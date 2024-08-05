<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class PaymentController extends Controller
{
    public function index()
    {
        return view('admin.payment.index');
    }

    public function store(Request $request)
    {

       
    }
}
