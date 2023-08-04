<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SuperAdminController extends Controller
{
    public function manageuser(){
        return view('SuperAdmin.manageuser');
    }
}
