<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postLogin(Request $request){
        $role=(Auth::user('role'));
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])
        || $role == 1){
            return redirect(route('dashboard'));
        }elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password])
        || $role == 0){
            return redirect(route('homepage'));
        }
        return view('admin.auth.login', [
            'email' => $request->email,
            'msg' => "Tài khoản/mật khẩu không đúng!"
        ]);
    }
}