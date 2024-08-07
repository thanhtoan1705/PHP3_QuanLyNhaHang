<?php

namespace App\Http\Controllers\Client\Checkout;

use App\Http\Controllers\Controller;
use App\Http\Requests\Checkout\CreateCheckoutRequest;
use App\Models\Cart;
use App\Models\Dish;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Promotion;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $users = auth()->user();
        $lastReservationId = session('last_reservation_id', null);
        // Lấy các Reservation của người dùng đã đăng nhập và nạp trước thông tin về bảng tương ứng
        $reservations = Reservation::where('user_id', auth()->id())->with('table')->get();
        $lastReservation = $reservations->firstWhere('id', $lastReservationId);
        $lastReservationTable = $lastReservation ? $lastReservation->table : null;
        session()->put('lastReservation', $lastReservation);

        // Lấy tất cả các bản ghi từ bảng carts của người dùng hiện tại và nạp trước thông tin dish và promotion
        $carts = Cart::where('user_id', auth()->id())->with(['dish', 'promotion'])->get();

        // Tính tổng giá trị của giỏ hàng
        $totalPrice = $carts->sum(function ($cart) {
            return $cart->quantity * $cart->dish->price;
        });
        // Kiểm tra nếu có ít nhất một promotion
        $discount = $carts->whereNotNull('promotion')->sum(function ($cart) {
            return $cart->promotion->discount ?? 0;
        });
        $totalPriceAfterDiscount = $totalPrice - $discount;

        return view('clients.checkout.index', compact('lastReservationTable', 'lastReservation', 'carts', 'totalPrice', 'totalPriceAfterDiscount'));
    }

    public function checkout(Request $request)
    {
        $users = auth()->user();

        $reservation = Reservation::create([
            'user_id' => $users->id,
            'table_id' => $request->table_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'seats' => $request->seats,
            'reservation_date' => $request->reservation_date,
            'reservation_time' => $request->reservation_time,
            'note' => $request->note,
        ]);

        session(['last_reservation_id' => $reservation->id]);

        return redirect()->route('checkout');
    }

    public function processPayment(Request $request)
    {
        $user_id = auth()->id();
        // Xác định phương thức thanh toán mà người dùng chọn
        $paymentMethod = $request->input('paymentMethod');

        // Lấy danh sách sản phẩm trong giỏ hàng của người dùng hiện tại
        $cartItems = Cart::where('user_id', $user_id)->get();
        // Tính toán tổng tiền
        $totalPrice = $cartItems->sum('total_price');
        // Nếu có khuyến mãi, áp dụng mã giảm giá
        $promotion = $cartItems->first()->promotion;
        if ($promotion) {
            $totalPrice -= $promotion->discount;
        }

        // Lấy thông tin lastReservation từ session
        $lastReservation = session()->get('lastReservation');
        $orderCode = 'DH-' . strtoupper(str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT));

        switch ($paymentMethod) {
            case 'restaurant':
                // Tạo đơn hàng mới
                $order = Order::create([
                    'user_id' => $user_id,
                    'table_id' => $lastReservation ? $lastReservation->table_id : null,
                    'name' => $lastReservation ? $lastReservation->name : auth()->user()->name,
                    'note' => $lastReservation ? $lastReservation->note : null,
                    'code_order' => $orderCode,
                    'status' => 'đang sử lý',
                    'order_date' => $lastReservation ? $lastReservation->reservation_date : null,
                    'order_time' => $lastReservation ? $lastReservation->reservation_time : null,
                ]);

                foreach ($cartItems as $cartItem) {
                    $order->dishes()->attach($cartItem->dish_id, ['quantity' => $cartItem->quantity]);
                    $dish = Dish::find($cartItem->dish_id);
                    if ($dish) {
                        $dish->quantity -= $cartItem->quantity;
                        $dish->save();
                    }
                }

                // Tạo bản ghi thanh toán
                $payment = Payment::create([
                    'order_id' => $order->id,
                    'user_id' => $user_id,
                    'payment_date' => $lastReservation ? $lastReservation->reservation_date : now(),
                    'payment_method' => $paymentMethod,
                    'total_amount' => $totalPrice,
                ]);

                // Xóa giỏ hàng sau khi thanh toán thành công
                Cart::where('user_id', $user_id)->delete();

                // Chuyển hướng người dùng tới trang thành công hoặc trang đơn hàng
                flash()->success('Thanh toán thành công!');
                return redirect()->route('home');
                break;
            case 'vnpay':
                $vnp_TmnCode = "YKF272RR"; // Mã website tại VNPay
                $vnp_HashSecret = "PYMAQEXTAZNBRTPPTHSPRZLJVDJRJOKA"; // Chuỗi bí mật
                $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html"; // URL thanh toán của VNPay
                $vnp_Returnurl = route('home'); // URL trả về khi thanh toán thành công
                $vnp_TxnRef = $orderCode; // Mã đơn hàng
                $vnp_OrderInfo = 'Thanh toán đơn hàng ' . $orderCode;
                $vnp_Amount = $totalPrice * 100; // VNPay yêu cầu giá trị phải nhân 100
                $vnp_Locale = 'vn'; // Ngôn ngữ
                $vnp_BankCode = ''; // Mã ngân hàng
                $vnp_IpAddr = request()->ip(); // Địa chỉ IP của người dùng

                // Xây dựng URL thanh toán
                $vnp_Params = [
                    "vnp_Version" => "2.1.0",
                    "vnp_Command" => "pay",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount,
                    "vnp_CurrCode" => "VND",
                    "vnp_TxnRef" => $vnp_TxnRef,
                    "vnp_OrderInfo" => $vnp_OrderInfo,
                    "vnp_OrderType" => "billpayment",
                    "vnp_Locale" => $vnp_Locale,
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_CreateDate" => now()->format('YmdHis'),
                ];

                if (!empty($vnp_BankCode)) {
                    $vnp_Params['vnp_BankCode'] = $vnp_BankCode;
                }

                ksort($vnp_Params);
                $query = '';
                $i = 0;
                $hashdata = '';
                foreach ($vnp_Params as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . $key . "=" . $value;
                    } else {
                        $hashdata .= $key . "=" . $value;
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }

                $vnp_Url = $vnp_Url . "?" . $query;
                if (isset($vnp_HashSecret)) {
                    $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                }

                return redirect($vnp_Url);
                break;
            case 'momo':
                $partnerCode = env('MOMO_PARTNER_CODE');
                $accessKey = env('MOMO_ACCESS_KEY');
                $secretKey = env('MOMO_SECRET_KEY');
                $endpoint = env('MOMO_ENDPOINT');

                $orderId = $orderCode;
                $orderInfo = 'Thanh toán đơn hàng';
                $amount = $totalPrice * 100; // MoMo yêu cầu số tiền phải nhân 100
                $returnUrl = route('momo.return'); // URL trả về sau khi thanh toán

                $requestId = Str::uuid()->toString();
                $requestData = [
                    'partnerCode' => $partnerCode,
                    'accessKey' => $accessKey,
                    'requestId' => $requestId,
                    'amount' => $amount,
                    'orderId' => $orderId,
                    'orderInfo' => $orderInfo,
                    'returnUrl' => $returnUrl,
                    'notifyUrl' => route('momo.notify'), // URL nhận thông báo từ MoMo
                    'requestType' => 'captureMoMoWallet',
                    'extraData' => ''
                ];

                // Tạo chữ ký
                $signature = hash_hmac('sha256', json_encode($requestData), $secretKey);
                $requestData['signature'] = $signature;

                // Gửi yêu cầu thanh toán
                $response = Http::post($endpoint, $requestData);

                $responseData = $response->json();
                if ($responseData['resultCode'] == '00') {
                    // Chuyển hướng người dùng tới trang thanh toán của MoMo
                    return redirect($responseData['payUrl']);
                } else {
                    flash()->error('Có lỗi xảy ra khi tạo yêu cầu thanh toán.');
                    return redirect()->back();
                }
                break;
            case 'bank_transfer':
                // Xử lý logic chuyển khoản ngân hàng
                break;
            default:
                flash()->error('Vui lòng chọn phương thức thanh toán.');
                return redirect()->back();
        }

        // Lưu thông tin thanh toán vào cơ sở dữ liệu (nếu cần)
        // Ví dụ: Tạo đơn hàng, cập nhật trạng thái thanh toán,...

        // Xóa giỏ hàng sau khi thanh toán thành công
        Cart::where('user_id', auth()->id())->delete();

        // Chuyển hướng người dùng tới trang thành công hoặc trang đơn hàng
        flash()->success('Thanh toán thành công!');
        return redirect()->route('home');
    }

    public function momoReturn(Request $request)
    {
        $responseCode = $request->input('responseCode');
        $orderId = $request->input('orderId');
        $amount = $request->input('amount');
        $signature = $request->input('signature');

        $secretKey = env('MOMO_SECRET_KEY');
        $validSignature = hash_hmac('sha256', $orderId . $amount . $responseCode, $secretKey);

        if ($signature === $validSignature) {
            if ($responseCode == '00') {
                // Cập nhật trạng thái đơn hàng và thanh toán
                $order = Order::where('code_order', $orderId)->first();
                if ($order) {
                    $order->update([
                        'status' => 'Đã thanh toán'
                    ]);

                    Payment::create([
                        'order_id' => $order->id,
                        'user_id' => $order->user_id,
                        'payment_date' => now(),
                        'payment_method' => 'momo',
                        'payment_status' => 'completed',
                        'total_amount' => $amount / 100,
                    ]);

                    // Xóa giỏ hàng
                    Cart::where('user_id', $order->user_id)->delete();

                    flash()->success('Thanh toán thành công!');
                    return redirect()->route('home');
                }
            } else {
                flash()->error('Thanh toán không thành công.');
                return redirect()->route('home');
            }
        } else {
            flash()->error('Chữ ký không hợp lệ.');
            return redirect()->route('home');
        }
    }
}
