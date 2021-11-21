<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function formRegister()
    {
        return view('register');
    }


    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->address = $request->address;
        $user->image = $request->image;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login');

    }

    public function formLogin()
    {
        return view('login');
    }

    public function login(AuthRequest $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            if(Auth::user()->role == 1){
                return redirect()->route('home_admin');
            }

            return redirect()->route('home');
        } else {

            Session::flash('errorLogin', 'Tài khoản hoặc mật khẩu không chính xác');
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
