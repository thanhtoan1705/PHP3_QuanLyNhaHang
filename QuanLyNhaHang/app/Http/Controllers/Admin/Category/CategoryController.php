<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function list()
    {

        $categories = category::all();

        return view('admin.category.list', compact('categories'));
    }

    public function add()
    {

        return view('admin.category.add');
    }

    public function store(CreateCategoryRequest $request)
    {
        // Validate and get validated data
        $validated = $request->validated();

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = 'category_' . time() . '.' . $file->getClientOriginalExtension();
            // Move file to storage folder
            $path = $file->move(public_path('storage/images'), $fileName);
            $validated['image'] = $fileName; // Save file name to database
        }
        // Create new category
        $validated['slug'] = Str::slug($validated['name']);

        Category::create($validated);
        flash()->success('Thêm thành công.');
        return redirect()->route('category.list');
    }

    public function update($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        return view('admin.category.update', compact('category'));
    }

    public function processUpdate(UpdateCategoryRequest $request, $slug)
    {
        $validated = $request->validated();

        $category = Category::where('slug', $slug)->firstOrFail();

        $category->name = $validated['name'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = 'category_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->move(public_path('storage/images'), $fileName);
            $category->image = $fileName;
        }

        $category->save();
        flash()->success('Cập nhật thành công.');
        return redirect()->route('category.list');
    }

    public function delete(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        if ($category->image) {
            $imagePath = public_path('storage/images/' . $category->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $category->delete();
        flash()->success('Xóa thành công.');
        return redirect()->route('category.list');
    }
}
