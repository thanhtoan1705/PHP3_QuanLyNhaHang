<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function list(){
        return view('admin.table.list');
    }

    public function add(){
        return view('admin.table.add');
    }

    public function edit(){
        return view('admin.table.edit');
    }
}

