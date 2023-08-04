<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Yajra\DataTables\DataTables as Datatables;

class SuperAdminController extends Controller
{
    public function manageuser(Request $request){
        if($request->ajax()){
            $data = User::get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                $btn = '<a href="javascript:void(0);" id="'.$row->id.'" class="change btn btn-primary">Property Admin</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

        }


        return view('SuperAdmin.manageuser');

    }

    public function changerole(Request $request){
        $user = User::where('id',$request->id)->first();
        $user->role = $request->role;
        $user->save();
        return redirect()->back();
    }
}
