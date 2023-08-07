<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\DataTables as Datatables;

class PropertyAdminController extends Controller
{
    public function manageuser(Request $request){
        if($request->ajax()){
            $data = User::where('role','!=','superadmin')->where('role','!=','propertyadmin')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                // $btn = '<a href="javascript:void(0);" id="'.$row->id.'" class="it btn btn-primary">Property Admin</a>';
                $btn = '<select id="changerole" data-id="'.$row->id.'" class="form-select changerole">
                            <option value="">Select Role</option>
                            <option value="itTeam">IT Team</option>
                            <option value="facilityTeam">Facility Team</option>
                            <option value="client">Client</option>
                            <option value="user">User</option>
                        </select>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

        }


        return view('propertyadmin.manageuserpa');
    }

    public function changerole(Request $request){
        $user = User::where('id',$request->id)->first();
        $user->role = $request->role;
        $user->save();
        return redirect()->back();
    }

    public function issues(){
        return view('propertyadmin.issues');
    }
}
