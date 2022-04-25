<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function loginForm(){
        return view("admin.users.login");
    }

    public function registerForm(){
        return view("admin.users.register");
    }


    public function login(Request $request){
        $request->validate(
            [
                'email'=>'required',
                'password'=>'required',
            ]
        );
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('admin/products');    
        }
        Alert::error('tài khoản mật khẩu không chính xác');
        return redirect('/admin/login');
    }

    public function register( Request $request ){
        $user = new User();
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:user',
                'password' => 'required',
            ]
        );
        $user->fill($request->all());
        $user -> email_verified_at = now();
        $user -> remember_token = Str::random(10);
        $user -> password = Hash::make($request->password);
        $user->save();
        Alert::success('Success Title', 'Đăng ký thành công');
        return redirect('/admin/register');
    }

    public function logout(){
        // $request -> session()-> invalidate();
        // $request -> session() -> regenerateToken();
        Auth::logout();
        return view('admin.users.login');
    }
}
