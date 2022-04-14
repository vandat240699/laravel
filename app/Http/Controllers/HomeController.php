<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;


class HomeController extends Controller
{
    public function index(){
        $product = Product::select('id','image','name','price','category','sl','status','slug')
        // ->with('category:categories.id,categories.name')
        ->paginate(5);   

        return view('home', compact('product'));
    }

    public function productss(){
        return view('admin.productss');
    }
}


