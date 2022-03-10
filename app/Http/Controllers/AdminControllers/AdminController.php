<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $students = [
            'id' => 1,
            'name' => 'dat',
            'age' => 20
        ];
        return view('admin.dashboard');
    }
}
