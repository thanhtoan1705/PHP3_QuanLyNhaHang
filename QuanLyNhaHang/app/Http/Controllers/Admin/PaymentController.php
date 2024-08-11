<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDish;
use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::paginate(5);
        return view('admin.payment.index',compact('payments'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $user_id = auth()->id();

            $reservation_id = $request->input('reservation_id');
            $amount_given = $request->input('amount_given');

            // Lấy thông tin đặt bàn
            $reservation = Reservation::findOrFail($reservation_id);

            // Tính tổng tiền của đặt bàn
            $totalPrice = $reservation->calculateTotalPrice();

            // Kiểm tra số tiền khách đưa có đủ không
            // if ($amount_given < $totalPrice) {
            //     return redirect()->back()->withErrors(['Số tiền không đủ để thanh toán']);
            // }

            // Tạo đơn hàng mới
            $order = Order::create([
                'user_id' => $reservation->user_id,
                'table_id' => $reservation->table_id,
                'code_order' => 'DH-' . strtoupper(str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT)),
                'name' => $reservation->name,
                'note' => $reservation->note,
                'status' => 'Đã thanh toán',
                'order_date' => $reservation->reservation_date,
                'order_time' => $reservation->reservation_time
            ]);


            // Lưu thông tin món ăn vào order_dish
            foreach ($reservation->dishes as $dish) {
                dd($reservation->$order->id);

                OrderDish::create([
                    'order_id' => $order->id,
                    'dish_id' => $dish->id,
                    'quantity' => $dish->pivot->quantity,
                ]);
            }

            // Tạo bản ghi thanh toán
            Payment::create([
                'order_id' => $order->id,
                'user_id' => $user_id,
                'payment_date' => now(),
                'payment_method' => 'cash', // Giả sử phương thức thanh toán là tiền mặt
                'total_amount' => $totalPrice,
            ]);

            DB::commit();

            // Chuyển hướng người dùng tới trang thành công hoặc trang đơn hàng
            return redirect()->route('admin.payment.index')->with('success', 'Thanh toán thành công!');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['Đã xảy ra lỗi trong quá trình thanh toán: ' . $e->getMessage()]);
        }
    }
}
