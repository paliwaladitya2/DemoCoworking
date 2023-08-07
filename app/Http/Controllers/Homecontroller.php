<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function add_properties(){
        if(Session::has('user')){
            return view('add-property');

        }
        else{
            return view('login');
        }
    }
}
