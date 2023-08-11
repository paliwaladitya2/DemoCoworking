<?php

namespace App\Http\Controllers;

use App\Models\PropertyApproved;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables as Datatables;
class PropertyUsersController extends Controller
{
    public function manage_team_client(Request $request)
    {
        if($request->ajax())
        {
            $user_id = Session::get('user')->id;
            $data = PropertyApproved::where('admin',$user_id)->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn =' <a class="btn btn-primary" href="'.route('manageuser_propertyadmin').'">Assign Team & Client</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('dashboard.propertyadmin.manageteam&clients');
    }
}
