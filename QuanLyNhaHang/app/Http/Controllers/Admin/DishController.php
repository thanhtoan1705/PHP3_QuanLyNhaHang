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
    public function list(Request $request)
{
    $search = $request->input('search');
    $category = $request->input('category');
    $price = $request->input('price');
    $dishes = Dish::query()
        ->when($search, function($query) use ($search) {
            return $query->where('name', 'LIKE', "%{$search}%")
                         ->orWhereHas('category', function($query) use ($search) {
                             $query->where('name', 'LIKE', "%{$search}%");
                         });
        })
        ->when($category, function ($query) use ($category) {
            return $query->where('category_id', $category);
        })
        ->when($price, function ($query) use ($price) {
            $priceRange = explode('-', $price);
            if (count($priceRange) == 2) {
                return $query->whereBetween('price', [$priceRange[0], $priceRange[1]]);
            } elseif ($price == '500000') {
                return $query->where('price', '>=', 500000);
            }
        })
        ->paginate(5)
        ->appends([
                'search' => $search,
                'category' => $category,
                'price' => $price,
            ]);
        $categories = Category::all();
    return view('admin.dish.list', compact('dishes','categories'));
}

    public function add()
    {
        $categories = Category::getAllCategories();
        return view('admin.dish.add', compact('categories'));
    }

    public function edit($slug)
    {
        $dish = Dish::where('slug', $slug)->firstOrFail();
        $categories = Category::getAllCategories();
        return view('admin.dish.edit', compact('dish', 'categories'));
    }

    public function store(CreateDishRequest $request)
    {
        Dish::createNewDish($request->validated());
        flash()->success('Thêm thành công.');
        return redirect()->route('dish.list');
    }

    public function update(UpdateDishRequest $request, $slug)
    {
        $dish = Dish::where('slug', $slug)->firstOrFail();
        $dish->updateDish($request->validated());
        flash()->success('Cập nhật thành công.');
        return redirect()->route('dish.list');
    }

    public function delete($slug)
    {
        $dish = Dish::where('slug', $slug)->firstOrFail();
        $dish->delete();
        flash()->success('Xóa thành công.');
        return redirect()->route('dish.list');
    }
}
