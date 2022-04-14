<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function user(){
        $user = User::OrderBy('id', 'desc')->paginate(5);
        return view('admin.users.home', compact('user'));
    }

    public function delete($id){
        User::find($id)->delete();
        Alert::success('xóa thành công');
        return redirect('admin/users');
    }
}
