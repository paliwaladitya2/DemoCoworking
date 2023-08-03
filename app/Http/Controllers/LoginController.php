<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function register(){
        return view('register');
    }

    public function saveregister(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
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
        // 
        Auth::attempt($credentials);
        $user = Auth::user();
        if($user->role('admin')){
             return redirect()->route('index',compact('user'))->with('success', 'Registered and Logged In Successfully!!');
            }
        elseif($user->role('user')){
            return redirect()->route('index',compact('user'))->with('success', 'Registered and Logged In Successfully');
        }
        return redirect()->route('login');
    }

    public function login(){
        return view('login');
    }

    public function logincheck(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($credentials)){;
        $user = Auth::user();
        return redirect()->route('index')->with('success', 'Logged In Successfully!!');
        }
        return redirect()->route('login')->with('danger','Credentials are Wrong' );
    }

    public function dashboard(){
        return view('index');
    }
}
