<?php

namespace App\Http\Controllers\Client\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
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

        $total = session()->get('discounted_total', $cartItems->sum('total_price'));
        $discount = session()->get('discount_value', 0);

        return view('clients.cart.index', compact('cartItems', 'total', 'discount', 'users', 'tables'));
    }

    public function applyDiscountCode(Request $request)
    {
        $result = Cart::applyDiscount(auth()->id(), $request->code);

        if (isset($result['error'])) {
            flash()->error($result['error']);
        } else {
            session(['discounted_total' => $result['total']]);
            session(['discount_value' => $result['discount']]);
            flash()->success($result['success']);
        }

        return redirect()->route('cart');
    }

    public function addToCart(Request $request)
    {
        $result = Cart::addToCart(auth()->id(), $request->product_id, $request->quantity);

        if (isset($result['error'])) {
            flash()->error($result['error']);
        } else {
            flash()->success($result['success']);
        }

        return redirect()->route('cart');
    }

    public function remove($id)
    {
        Cart::findOrFail($id)->delete();

        flash()->success('Sản phẩm đã được xóa khỏi giỏ hàng!');
        return redirect()->route('cart');
    }

    public function clear()
    {
        $result = Cart::clearCart(auth()->id());

        flash()->success($result['success']);
        return redirect()->route('home');
    }

    public function update(Request $request)
    {
        $result = Cart::updateCart(auth()->id(), $request->input('cart', []));

        if (isset($result['error'])) {
            flash()->error($result['error']);
        } else {
            session(['discounted_total' => $result['total']]);
            session(['discount_value' => $result['discount']]);
            flash()->success($result['success']);
        }

        return redirect()->route('cart');
    }
}
