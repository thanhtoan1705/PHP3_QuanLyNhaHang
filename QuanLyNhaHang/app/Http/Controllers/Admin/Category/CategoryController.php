<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort', 'desc');
        $categories = Category::query()
            ->when($search, function($query) use ($search) {
                return $query->where('name', 'LIKE', "%{$search}%");             
            })
            ->orderBy('created_at', $sort)
            ->paginate(5)
            ->appends([
                'search' => $search,
                'sort' => $sort
            ]);
            
        return view('admin.category.list', compact('categories'));
    }

    public function add()
    {

        return view('admin.category.add');
    }

    public function store(CreateCategoryRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $fileName = 'category_' . time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('images', $fileName, 'public');
                $validated['image'] = $fileName;
            } else {
                return back()->withErrors(['image' => 'Tệp ảnh không hợp lệ.']);
            }
        }

        Category::create($validated);

        flash()->success('Danh mục đã thêm thành công.');
        return redirect()->route('category.list');
    }


    public function update($id)
    {
        $category = Category::findOrFail($id);


        return view('admin.category.update', compact('category'));
    }

    public function processUpdate(UpdateCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validated();

        $category->name = $validated['name'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $fileName = 'category_' . time() . '.' . $file->getClientOriginalExtension();

                $file->storeAs('images', $fileName, 'public');

                if ($category->image && file_exists(public_path('storage/images/' . $category->image))) {
                    unlink(public_path('storage/images/' . $category->image));
                }

                // Cập nhật tên ảnh vào cơ sở dữ liệu
                $category->image = $fileName;
            } else {
                return back()->withErrors(['image' => 'Tệp ảnh không hợp lệ.']);
            }
        }
        $category->save();
        flash()->success('Danh mục đã cập nhật thành công.');
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
        flash()->success('Danh mục đã xóa thành công.');
        return redirect()->route('category.list');
    }
}
