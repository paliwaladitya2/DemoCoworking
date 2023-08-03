<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(){
        return view('register');
    }

    public function saveregister(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password|min:6',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        Auth::guard('web')->attempt($credentials);
        $user = Auth::guard('web')->user();
        return redirect()->route('index',compact('user'))->with('success', 'Registered and Logged In Successfully');

    }

    public function login(){
        return view('login');
    }

    public function logincheck(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::guard('web')->attempt($credentials)){;
        $user = Auth::guard('web')->user();
        $user->save();
        return redirect()->route('index')->with('success', 'Logged In Successfully!!');
        }
        return redirect()->route('login')->with('danger','Credentials are Wrong' );
    }
}
