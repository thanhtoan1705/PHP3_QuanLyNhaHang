<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function list(){
        return view('admin.staff.list');
    }

    public function add(){
        return view('admin.staff.add');
    }

    public function update(){
        return view('admin.staff.update');
    }
}
