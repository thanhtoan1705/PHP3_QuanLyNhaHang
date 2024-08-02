<?php

namespace App\Http\Controllers\Client\Table;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableBook\CreateTableBookClientRequest;
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
        $bookedTableIds = Order::pluck('table_id')->toArray(); // Fetch booked table IDs
        return view('clients.table.index', compact('dishes', 'tables', 'bookedTableIds'));
    }

    public function store(CreateTableBookClientRequest $request)
    {
        Order::createNewBookTableClient($request->validated());
        flash()->success('Đặt bàn thành công.');
        return redirect()->route('tableClient');
    }
}
