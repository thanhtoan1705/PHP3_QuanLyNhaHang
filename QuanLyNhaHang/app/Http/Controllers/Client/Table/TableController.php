<?php

namespace App\Http\Controllers\Client\Table;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableBook\CreateTableBookRequest;
use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Order;
use App\Models\Table;

class TableController extends Controller
{
    public function index()
    {
        $dishes = Dish::all();
        $tables = Table::all();
        return view('clients.table.index', compact('dishes', 'tables'));
    }

    public function store(CreateTableBookRequest $request)
    {
        Order::createNewBookTable($request->validated());

        return redirect()->route('table')->with('success', 'Bàn của bạn đã được đặt thành công.');
    }
}
