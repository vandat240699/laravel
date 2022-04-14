<?php

namespace App\Http\Controllers\AdminControllers;


use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;



class CategoryController extends Controller
{
    public function category(){
        $category = Category::OrderBy('id', 'desc')->paginate(5);
        return view('admin.categories.home', compact('category'));
    }

    public function addForm() { 
        return view('admin.categories.add');
    }

    public function add(Request $request) {
        $category = new Category();
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'required',
        ]);
        $category->fill($request->all());
        $category->status = 0;
        $category->slug = Str::slug($request->name, '-');
        $category->save();
        Alert::success('Success Title', 'Thêm thành công');
        return redirect('admin/categories');
    }  
    
    public function delete($id) {
        Category::find($id)->delete();
        Alert::success('Success Title', 'Xóa thành công');
        return redirect('admin/categories');
    }

    public function editForm($id) { 
        
        $cate = Category::find($id);
        return view('admin.categories.edit', compact('cate'));
    }

    public function edit(Request $request, $id) {
        $category = Category::find($id);
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'required',
        ]);
        $category->fill($request->all());
        $category->status = 0;
        $category->slug = Str::slug($request->name, '-');
        $category->save();
        Alert::success('Success Title', 'Sửa thành công');
        return redirect('admin/categories');
    }  
}
