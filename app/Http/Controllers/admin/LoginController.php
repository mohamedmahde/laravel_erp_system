<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Auth;


class LoginController extends Controller
{
    //show login page
    public function show_login_view(){
        return view('admin.auth.login');
    }


    public function login(LoginRequest  $request){
        if(auth()->guard('admin')->attempt(['username'=>$request->input('username'),'password'=>$request->input('password')]))
        {
 return redirect()->route('admin.dashboard');
        }

    }

    // public function make_new_admin(){
    //     $admin = new App\Models\Admin();
    //     $admin->name = 'admin';
    //     $admin->email = 'admin@gmail.com';
    //     $admin->username = 'admin';
    //     $admin->password = bcrypt('admin');
    //     $admin->added_by ='admin';
    //     $admin->updated_by ='admin';
    //     $admin->com_code = 1;
    //     $admin->save();
    // }

    public function logout(){
        auth()->logout();
        return redirect()->route('admin.showlogin');
        }
}
