<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DishController extends Controller
{
    public function dishDetail(){
        return view('clients.food.dish_detail');
    }

    public function menu(){
        return view('clients.food.menu');
    }
}
