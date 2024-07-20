<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function list(){
        return view('admin.dish.list');
    }

    public function add(){
        return view('admin.dish.add');
    }

    public function edit(){
        return view('admin.dish.edit');
    }
}
