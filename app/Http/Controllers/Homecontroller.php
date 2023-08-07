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

    public function contact_us(){
        return view('contact-us');
    }

    public function blog_list(){
        return view('blog-list-sidebar');
    }

    public function user_profile(){
        return view('user-profile');
    }

    public function payment_method(){
        return view('payment-method');
    }

    public function change_password(){
        return view('change-password');
    }

    public function single_property(){
        return view('single-property-1');
    }

    public function properties_details(){
        return view('properties-details');
    }
}
