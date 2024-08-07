<?php

namespace App\Http\Controllers\Client\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\User;
use App\Models\Promotion;
use App\Models\Table;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', auth()->id())->with('dish')->get();
        $users = auth()->user();
        $tables = Table::all();
        $total = $cartItems->sum('total_price');


        if (session()->has('discounted_total')) {
            $total = session('discounted_total');
            session()->forget('discounted_total');
        }

        if (session()->has('discount_value')) {
            $discount = session('discount_value');
            session()->forget('discount_value');
        } else {
            $discount = 0;
        }

        return view('clients.cart.index', compact('cartItems', 'total', 'discount', 'users', 'tables'));
    }

    public function applyDiscountCode(Request $request)
    {
        $promotion = Promotion::where('code', '=', $request->code)->first();

        if ($promotion) {
            $cartItems = Cart::where('user_id', auth()->id())->get();

            if ($cartItems->isEmpty()) {
                flash()->error('Giỏ hàng của bạn đang trống. Hãy chọn món trước khi áp dụng mã giảm giá.');
                return redirect()->route('menu');
            }

            $total = $cartItems->sum(function ($cartItem) {
                return $cartItem->dish->price * $cartItem->quantity;
            });

            $total = max(0, $total - $promotion->discount);

            foreach ($cartItems as $cartItem) {
                $cartItem->promotion_id = $promotion->id;
                $cartItem->save();
            }

            session(['discounted_total' => $total]);
            session(['discount_value' => $promotion->discount]);

            flash()->success('Mã giảm giá đã được áp dụng!');
        } else {
            flash()->error('Mã giảm giá không hợp lệ hoặc đã hết hạn.');
        }

        return redirect()->route('cart');
    }

    public function addToCart(Request $request)
    {
        $product = Dish::find($request->product_id);
        if (!$product) {
            flash()->error('Sản phẩm không tồn tại.');
            return redirect()->back();
        }
        if ($product->quantity <= 0) {
            flash()->error('Đã hết món vui lòng quay lại sau.');
            return redirect()->back();
        }

        $quantity = $request->quantity;
        if ($product->quantity < $quantity) {
            flash()->error('Số lượng sản phẩm không đủ. Vui lòng chọn số lượng khác.');
            return redirect()->back();
        }

        $cartItem = Cart::where('user_id', auth()->id())
            ->where('dish_id', $request->product_id)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->total_price = $cartItem->quantity * $product->price;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'dish_id' => $request->product_id,
                'quantity' => $quantity,
                'total_price' => $product->price * $quantity,
            ]);
        }

        flash()->success('Sản phẩm đã được thêm vào giỏ hàng!');
        return redirect()->route('cart');
    }

    public function remove(Request $request, $dish_id)
    {
        Cart::where('user_id', auth()->id())
            ->where('dish_id', $dish_id)
            ->delete();

        flash()->success('Sản phẩm đã được xóa khỏi giỏ hàng!');
        return redirect()->route('cart');
    }


    public function clear()
    {
        Cart::where('user_id', auth()->id())->delete();

        flash()->success('Giỏ hàng đã được làm sạch!');
        return redirect()->route('home');
    }

    public function update(Request $request)
    {
        // Lấy dữ liệu số lượng sản phẩm từ request
        $cartData = $request->input('cart', []);

        $total = 0;
        $promotionDiscount = 0;

        // Duyệt qua các sản phẩm trong giỏ hàng để cập nhật số lượng và tính tổng giá
        foreach ($cartData as $dishId => $quantity) {
            // Tìm Cart item theo dish_id và user_id
            $cartItem = Cart::where('user_id', auth()->id())
                ->where('dish_id', $dishId)
                ->first();

            if ($cartItem) {
                // Cập nhật số lượng trong Cart
                $cartItem->quantity = $quantity;
                $cartItem->total_price = $quantity * $cartItem->dish->price; // Cập nhật tổng giá trước khi áp dụng giảm giá

                // Cộng tổng giá của từng sản phẩm để tính tổng giá trị giỏ hàng
                $total += $cartItem->total_price;

                // Lưu thông tin sản phẩm đã cập nhật
                $cartItem->save();
            }
        }

        // Kiểm tra nếu giỏ hàng có promotion_id để áp dụng giảm giá cho tổng giá trị giỏ hàng
        $cartItemWithPromotion = Cart::where('user_id', auth()->id())
            ->whereNotNull('promotion_id')
            ->first();

        if ($cartItemWithPromotion) {
            $promotion = Promotion::find($cartItemWithPromotion->promotion_id);

            if ($promotion) {
                // Trừ giá trị giảm giá vào tổng giỏ hàng
                $promotionDiscount = $promotion->discount;
                $total = max(0, $total - $promotionDiscount); // Đảm bảo tổng giá trị không âm
            }
        }

        // Lưu tổng giá trị sau khi đã áp dụng mã giảm giá vào session (nếu cần thiết)
        session(['discounted_total' => $total]);
        session(['discount_value' => $promotionDiscount]);

        // Chuyển hướng lại trang giỏ hàng với thông báo thành công
        return redirect()->route('cart')->with('success', 'Giỏ hàng đã được cập nhật!');
    }
}
