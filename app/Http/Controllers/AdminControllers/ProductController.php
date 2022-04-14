<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class ProductController extends Controller
{
    public function product(){
        $product = Product::OrderBy('id', 'desc')->paginate(5);
        // ->with('category:categories.id,categories.name')
        return view('admin.products.home', compact('product'));
    }

    public function delete($id){
        Product::find($id)->delete();
        Alert::success('Xóa thành công');
        return redirect('admin/products');
    }

    public function addForm(){
        $category = Category::all();
        return view('admin/products/add', compact('category'));
    }

    public function add(Request $request){
        $product = new Product();
        $request->validate(
            [
                'name' => 'required|unique:products|max:255',
                'category' => 'required',
                'price' => 'required',
                'status' => 'required',
                'sl' => 'required',
            ]
        );
        $product -> fill($request->all());
        if (!empty($request->file('image'))) {
            $product->image = $request->file('image')->store('images', 'public');
        }
        $product -> slug = Str::slug($request->name, '-');
        // $product -> category = Category::name;
        $product -> save();
        Alert::success('Success Title', 'Thêm thành công');
        return redirect('admin/products');
    }

    public function editForm($id){
        $category = Category::all();
        $pro = Product::find($id);
        return view('admin/products/edit', compact('pro','category'));
    }

    public function edit(Request $request, $id){
        $product = Product::find($id);
        
        $request->validate(
            [
                'name' => 'required',
                'category' => 'required',
                'sl' => 'required',
                'status' => 'required',
            ]

        );
        $product->fill($request->all());
        if (!empty($request->file('image'))) {
            $product -> image = $request->file('image')->store('image', 'public');
        }
        $product->Slug=Str::slug($request->name, '-');
        $product->save();
        Alert::success('Success Title', 'Sửa thành công');
        return redirect('admin/products');
    }
}
