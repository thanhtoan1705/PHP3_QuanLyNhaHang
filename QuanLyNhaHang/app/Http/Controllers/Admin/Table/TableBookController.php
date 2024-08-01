<?php

namespace App\Http\Controllers\Admin\Table;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableBook\CreateTableBookRequest;
use App\Http\Requests\TableBook\UpdateTableBookRequest;
use App\Models\Dish;
use App\Models\Order;
use App\Models\Table;
use App\Models\User;
use Illuminate\Http\Request;

class TableBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::paginate(5);
        return view('admin.booktable.list', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        $users = User::all();
        $tables = Table::all();
        $dishes = Dish::all();
        return view('admin.booktable.add', compact('users', 'tables', 'dishes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTableBookRequest $request)
    {
        $validated = $request->validated();
        Order::createNewBookTable($validated);

        $table = Table::findOrFail($validated['table_id']);
        $table->update(['seats' => $validated['seats']]);

        flash()->success('Thêm thành công.');
        return redirect()->route('table-book.list');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $users = User::all();
        $tables = Table::all();
        $dishes = Dish::all();
        return view('admin.booktable.edit', compact('order', 'users', 'tables', 'dishes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTableBookRequest $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->updateNewBookTable($request->validated());

        $table = Table::findOrFail($request->validated('table_id'));
        $table->update(['seats' =>$request->validated('seats')]);

        flash()->success('Cập nhật thành công.');
        return redirect()->route('table-book.list');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        flash()->success('Xóa thành công.');
        return redirect()->route('table-book.list');
    }

    /**
     * Fetch table details.
     */
    // In TableBookController
    public function getTableDetails($id)
    {
        $table = Table::findOrFail($id);
        return response()->json($table);
    }
}
