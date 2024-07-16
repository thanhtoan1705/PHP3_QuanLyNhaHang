<?php

namespace App\Http\Controllers\Client\Dish;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function dishDetail()
    {
        return view('clients.food.dish_detail');
    }

    public function menu()
    {
        return view('clients.food.menu');
    }
}
