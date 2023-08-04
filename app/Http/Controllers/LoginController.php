<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use DataTables;
use Yajra\DataTables\DataTables as Datatables;


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
            'phone' => 'required|digits:10',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->save();
        $u = User::where('email',$user->email)->first();
        Session::put('user',$u);
        if($u->role == 'user')
        {
            return redirect()->route('index');
        }
        return redirect()->route('dashboard');
    }

    public function login(){
        return view('login');
    }

    public function logincheck(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user && Hash::check($request->password, $user->password) ){
            Session::put('user',$user);
            return redirect()->route('index')->with('success', 'Logged In Successfully!!');
        }else{
            return redirect()->route('login')->with('danger','Credentials are Wrong' );
        }
        
    }

    public function dashboard(){
        if(Session::has('user'))
        {
            return view('dashboard');
        }
        return redirect()->route('login');
    }

    public function logout(){
        Session::flush();
        return redirect()->route('login');
    }
}
