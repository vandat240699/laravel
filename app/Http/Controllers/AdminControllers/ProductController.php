<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class ProductController extends Controller
{
    public function product(){
        $product = Product::select('id','image','name','price','category','sl','status','slug')
        // ->with('category:categories.id,categories.name')
        ->paginate(5);
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
                'image' => 'required',
                'category' => 'required',
                'status' => 'required',
                'sl' => 'required',
            ]
        );
        $product -> fill($request->all());
        $product -> slug = Str::slug($request->name, '-');
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
        // $img = $_FILES['image'];
        // if($img['size']>0){
        //     $fileName = uniqid() . '-' . $img['name'];
        //     move_uploaded_file($img['name'], './public/uploads/'.$fileName);
        //     $model->avatar = 'uploads/'.$fileName;
        // }
        $request->validate(
            [
                'name' => 'required',
                'image' => 'required',
                'category' => 'required',
                'sl' => 'required',
                'status' => 'required',
            ]

        );
        $product->fill($request->all());
        $product->Slug=Str::slug($request->name, '-');
        $product->save();
        Alert::success('Success Title', 'Sửa thành công');
        return redirect('admin/products');
    }
}
