<?php

namespace App\Http\Controllers\Client\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\User;
use App\Models\Promotion;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', auth()->id())->with('dish')->get();
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

        return view('clients.cart.index', compact('cartItems', 'total', 'discount'));
    }

    public function applyDiscountCode(Request $request)
    {
        $promotion = Promotion::where('code', '=', $request->code)->first();

        if ($promotion) {
            $cartItems = Cart::where('user_id', auth()->id())->get();

            foreach ($cartItems as $cartItem) {
                $total = $cartItems->sum('total_price') -  $promotion->discount;
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

        foreach ($cartData as $dishId => $quantity) {
            // Tìm Cart item theo dish_id và user_id
            $cartItem = Cart::where('user_id', auth()->id())
                ->where('dish_id', $dishId)
                ->first();

            if ($cartItem) {
                // Cập nhật số lượng trong Cart
                $cartItem->quantity = $quantity;
                $cartItem->total_price = $quantity * $cartItem->dish->price; // Cập nhật tổng giá
                $cartItem->save();
            }
        }

        // Chuyển hướng lại trang giỏ hàng với thông báo thành công
        return redirect()->route('cart')->with('success', 'Giỏ hàng đã được cập nhật!');
    }
}
