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

        // dd($categories);

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
        // dd($validated);
        // die();
        return redirect()->route('category.list');
    }

    public function update($slug)
    {
        // Lấy danh mục cần cập nhật từ slug
        $category = Category::where('slug',$slug)->firstOrFail();

        // Trả về view để cập nhật danh mục với dữ liệu của danh mục đó
        return view('admin.category.update', compact('category'));
    }

    public function processUpdate(UpdateCategoryRequest $request, $slug)
    {
        // Validate và lấy dữ liệu đã được xác thực từ request
        $validated = $request->validated();

        // Tìm danh mục cần cập nhật từ ID
        $category = Category::where('slug',$slug)->firstOrFail();

        // Cập nhật dữ liệu mới vào danh mục
        $category->name = $validated['name'];

        // Xử lý tệp ảnh nếu người dùng cập nhật ảnh mới
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = 'category_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->move(public_path('storage/images'), $fileName);
            $category->image = $fileName;
        }

        // Lưu các thay đổi vào cơ sở dữ liệu
        $category->save();

        // Redirect về danh sách danh mục sau khi cập nhật thành công
        return redirect()->route('category.list');
    }

    public function delete(Request $request, $id)
    {
        // Tìm danh mục cần xóa từ ID
        $category = Category::findOrFail($id);

        // Xóa tệp ảnh liên quan nếu có
        if ($category->image) {
            // Xóa tệp ảnh từ thư mục lưu trữ
            $imagePath = public_path('storage/images/' . $category->image);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Xóa file
            }
        }

        // Xóa danh mục
        $category->delete();

        // Redirect về danh sách danh mục
        return redirect()->route('category.list');
    }

}
