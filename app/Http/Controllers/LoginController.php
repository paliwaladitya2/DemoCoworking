<?php

namespace App\Http\Controllers;

use App\Models\FacilityTeam;
use App\Models\ItTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PropertyApproved;
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
        return redirect()->route('dashboard.dashboard');
    }

    public function login(){
        return view('mainweb.loginindex');
    }

    public function logincheck(Request $request){
        $user = User::where('email',$request->email)->first();
        $user1 = ItTeam::where('email',$request->email)->first();
        $user2 = FacilityTeam::where('email',$request->email)->first();
        if($user && Hash::check($request->password, $user->password) ){
            Session::put('user',$user);
            return redirect()->route('index')->with('success', 'Logged In Successfully!!');
        }elseif($user1 && Hash::check($request->password, $user1->password)){
            Session::put('user',$user1);
            return redirect()->route('dashboard');
        }elseif($user2 && Hash::check($request->password, $user2->password)){
            Session::put('user',$user2);
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->with('danger','Credentials are Wrong' );
        }
        
    }

    public function dashboard(){
        if(Session::has('user'))
        {
            return view('dashboard.dashboard');
        }
        return redirect()->route('login');
    }

    public function logout(){
        Session::flush();
        return redirect()->route('login');
    }
}
