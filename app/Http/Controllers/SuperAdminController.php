<?php

namespace App\Http\Controllers;

use App\Models\PropertyApproved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PropertyUnapproved;
use Yajra\DataTables\DataTables as Datatables;

class SuperAdminController extends Controller
{
    public function manageuser(Request $request){
        if($request->ajax()){
            $data = User::where('role','!=','superadmin')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                $btn = '<select id="change" data-id="'.$row->id.'" class="form-select change">
                            <option value="">Select Role</option>
                            <option value="propertyadmin">Property Admin</option>
                            <option value="user">User</option>
                        </select> ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboard.SuperAdmin.manageuser');

    }

    public function changerole(Request $request){
        $user = User::where('id',$request->id)->first();
        $user->role = $request->role;
        $user->save();
        return redirect()->back();
    }

    public function manage_unapproved_properties(Request $request){
        if($request->ajax()){
            $data = PropertyUnapproved::get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('admin',function($row)
            {
                $admin = User::where('id',$row->admin)->first();
                return $admin->name;
            })
            ->addColumn('action1',function($row){
                $users = User::where('role','propertyadmin')->get();
                $btn = '<select id="assign" data-id="'.$row->id.'" class="assign">
                            <option value="">Select Admin</option>';
                foreach($users as $user){
                    $btn .= '<option value="' . $user->id . '">' . $user->name . '</option>';
                }
                $btn .= '</select>' ;
                return $btn;
            })
            ->addColumn('action2', function($row){
                $btn = '<a href="javascript:void(0);" id="'.$row->id.'" class="approve btn btn-primary ml-3 btn">Approve</a>';
                return $btn;
            })
            ->rawColumns(['admin','action1', 'action2'])
            ->make(true);
        }
        return view('dashboard.SuperAdmin.manage_unapproved_properties');

    }

    public function assignadmin(Request $request){
        $property = PropertyUnapproved::find($request->id);
        $property->admin = $request->admin;
        $property->save();
        return redirect()->back();
    }

    public function approve(Request $request){
        $unapproved = PropertyUnapproved::where('id',$request->id)->first();
        $approved = new PropertyApproved;
        $approved->title = $unapproved->title;
        $approved->admin = $unapproved->admin;
        $approved->description = $unapproved->description;
        $approved->price = $unapproved->price;
        $approved->no_of_seats = $unapproved->no_of_seats;
        $approved->address = $unapproved->address;
        $approved->city = $unapproved->city;
        $approved->state = $unapproved->state;
        $approved->country = $unapproved->country;
        $approved->name = $unapproved->name;
        $approved->email = $unapproved->email;
        $approved->phone = $unapproved->phone;
        $approved->image1 = $unapproved->image1;
        if($unapproved->username){
        $approved->username = $unapproved->username;
            }
        if($unapproved->image2){
            $approved->image2 = $unapproved->image2;
            }
        if($unapproved->image3){
            $approved->image3 = $unapproved->image3;
            }
        if($unapproved->image4){
            $approved->image4 = $unapproved->image4;
            }
        if($unapproved->image5){
            $approved->image5 = $unapproved->image5;
            }
        if($unapproved->image6){
            $approved->image6 = $unapproved->image6;
            }
        if($unapproved->image7){
            $approved->image7 = $unapproved->image7;
            }
        if($unapproved->air_conditioning){
            $approved->air_conditioning = $unapproved->air_conditioning;
            }
        if($unapproved->coworking){
            $approved->coworking = $unapproved->coworking;
            }
        if($unapproved->cabin){
            $approved->cabin = $unapproved->cabin;
            }
        if($unapproved->meetingrooms){
            $approved->meetingrooms = $unapproved->meetingrooms;
            }
        if($unapproved->trainingrooms){
            $approved->trainingrooms = $unapproved->trainingrooms;
            }
        if($unapproved->wifi){
            $approved->wifi = $unapproved->wifi;
            }
        if($unapproved->parking){
            $approved->parking = $unapproved->parking;
            }
        if($unapproved->lounge){
            $approved->lounge = $unapproved->lounge;
            }
        if($unapproved->cafeteria){
            $approved->cafeteria = $unapproved->cafeteria;
            }
        if($unapproved->it_support){
            $approved->it_support = $unapproved->it_support;
            }
        if($unapproved->locker){
            $approved->locker = $unapproved->locker;
            }
        if($unapproved->_24x7){
            $approved->_24x7 = $unapproved->_24x7;
            }
        $approved->save();
        $unapproved->save();
        return redirect()->back();
    }

    public function manage_approved_properties(Request $request){
        if($request->ajax()){
            $data = PropertyApproved::get();
            return Datatables::of($data)
            ->addIndexColumn()
            // ->addColumn('action', function($row){
            //     $btn = '<a href="javascript:void(0);" id="'.$row->id.'" class="approve btn btn-primary ml-3 btn">Approve</a>';
            //     return $btn;
            // })
            // ->rawColumns(['action1', 'action2'])
            ->make(true);
        }
        return view('dashboard.SuperAdmin.manage_approved_properties');

    }

}
