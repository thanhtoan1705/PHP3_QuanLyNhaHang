<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dish\CreateDishRequest;
use App\Http\Requests\Dish\UpdateDishRequest;
use App\Models\Category;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function list(){
        $dishes = Dish::paginate(5);
        return view('admin.dish.list', compact('dishes'));
    }

    public function add(){
        $categories = Category::getAllCategories();
        return view('admin.dish.add', compact('categories'));
    }

    public function edit($slug){
        $dish = Dish::where('slug', $slug)->firstOrFail();
        $categories = Category::getAllCategories();
        return view('admin.dish.edit', compact('dish', 'categories'));
    }

    public function store(CreateDishRequest $request)
    {
        Dish::createNewDish($request->validated());

        return redirect()->route('dish.list')->with('success', 'Dish added successfully!');
    }

    public function update(UpdateDishRequest $request, $slug)
    {
        $dish = Dish::where('slug', $slug)->firstOrFail();
        $dish->updateDish($request->validated());
        return redirect()->route('dish.list')->with('success', 'Dish updated successfully!');
    }

    public function delete($slug)
    {
        $dish = Dish::where('slug', $slug)->firstOrFail();
        $dish->delete();
        return redirect()->route('dish.list')->with('success', 'Dish deleted successfully!');
    }
}
