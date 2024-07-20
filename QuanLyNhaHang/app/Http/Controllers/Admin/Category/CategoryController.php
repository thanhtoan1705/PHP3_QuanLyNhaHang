<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
        return view ('admin.category.list');
    }

    public function add(){
        return view ('admin.category.add');


    }

    public function update(){

        return view ('admin.category.update');
    }
}
