<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function dashboard(){
        $category = Category::all();
        
        return view('admin.dashboard', compact('category'));
    }
}
