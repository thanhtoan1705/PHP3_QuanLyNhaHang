<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDish;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;

class OrderController extends Controller
{
    public function index()
    {
        // Lấy các đơn hàng của người dùng
        $orders = Order::with(['user', 'dishes', 'table', 'payments'])->get();

        return view('admin.order.index', compact('orders'));
    }

    public function show(string $id)
    {
        $order = Order::with(['user', 'dishes', 'table', 'payments'])->findOrFail($id);

        return view('admin.order.detail.detail', compact('order'));
    }

    public function generatePdf($id)
    {
        // Lấy thông tin đơn hàng
        $order = Order::with(['user', 'dishes', 'table', 'payments'])->findOrFail($id);

        // Tính toán tổng số tiền
        $totalAmount = $order->dishes->sum(function ($dish) {
            return $dish->price * $dish->pivot->quantity;
        });

        // Tạo instance của PDF
        $pdf = App::make(PDF::class); // Sử dụng App::make để tạo instance của PDF

        // Tạo PDF
        $pdf->loadView('admin.order.pdf', compact('order', 'totalAmount'));

        // Trả về file PDF cho người dùng tải về
        return $pdf->download('invoice_' . $order->id . '.pdf');
    }
}
