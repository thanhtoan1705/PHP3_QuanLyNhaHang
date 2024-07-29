<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function list(){
        return view('admin.booktable.list');
    }

    public function add(){
        return view('admin.booktable.add');
    }

    public function edit(){
        return view('admin.booktable.edit');
    }
}

