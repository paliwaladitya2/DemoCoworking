<?php

namespace App\Http\Controllers;

use App\Models\PropertyApproved;
use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
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
        return view('dashboard.propertyadmin.manageuserpa');
    }

    public function changerole(Request $request){
        $user = User::where('id',$request->id)->first();
        $user->role = $request->role;
        $user->save();
        return redirect()->back();
    }

    public function issues(){
        return view('dashboard.propertyadmin.issues');
    }


    public function managereviews(Request $request){
        if($request->ajax()){
            $data = Reviews::get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                $btn = '<a href="javascript:void(0);" id="'.$row->id.'" class="delete btn btn-danger">Delete</a>';
               
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboard.propertyadmin.managereviews');
    }
    public function deletereviews(Request $request){
            $review = Reviews::where('id',$request->id)->first();
            $review->delete();
            
            return redirect()->back();

    }
    public function editproperty($id){
        $property = PropertyApproved::where('id',$id)->first();
        return view('dashboard.propertyadmin.editproperty',compact('property'));
    }

    public function updateproperty(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'no_of_seats' => 'required',
            'price' => 'required',
            'image1' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|digits:10',
        ]);
        $property = PropertyApproved::where('id',$request->id)->first();
        $property->title = $validated['title'];
        $property->description = $validated['description'];
        $property->price = $validated['price'];
        $property->no_of_seats = $validated['no_of_seats'];
        $property->address = $validated['address'];
        $property->city = $validated['city'];
        $property->state = $validated['state'];
        $property->country = $validated['country'];
        $property->name = $validated['name'];
        $property->email = $validated['email'];
        $property->phone = $validated['phone'];
        if($request->username){
            $property->username = $request->username;
        }
        if($request->hasFile('image1')){
            $file1 = $request->file('image1');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '_1_.' . $ext1;
            $file1->move('PropertyImages/', $filename1);
            $property->image1 = $filename1;
        }
        if($request->hasFile('image2')){
            $file2 = $request->file('image2');
            $ext2 = $file2->getClientOriginalExtension();
            $filename2 = time() . '_2_.' . $ext2;
            $file2->move('PropertyImages/', $filename2);
            $property->image2 = $filename2;
        }
        if($request->hasFile('image3')){
            $file3 = $request->file('image3');
            $ext3 = $file3->getClientOriginalExtension();
            $filename3 = time() . '_3_.' . $ext3;
            $file3->move('PropertyImages/', $filename3);
            $property->image3 = $filename3;
        }
        if($request->hasFile('image4')){
            $file4 = $request->file('image4');
            $ext4 = $file4->getClientOriginalExtension();
            $filename4 = time() . '_4_.' . $ext4;
            $file4->move('PropertyImages/', $filename4);
            $property->image4 = $filename4;
        }
        if($request->hasFile('image5')){
            $file5 = $request->file('image5');
            $ext5 = $file5->getClientOriginalExtension();
            $filename5 = time() . '_5_.' . $ext5;
            $file5->move('PropertyImages/', $filename5);
            $property->image5 = $filename5;
        }
        if($request->hasFile('image6')){
            $file6 = $request->file('image6');
            $ext6 = $file6->getClientOriginalExtension();
            $filename6 = time() . '_6_.' . $ext6;
            $file6->move('PropertyImages/', $filename6);
            $property->image6 = $filename6;
        }
        if($request->hasFile('image7')){
            $file7 = $request->file('image7');
            $ext7 = $file7->getClientOriginalExtension();
            $filename7 = time() . '_7_.' . $ext7;
            $file7->move('PropertyImages/', $filename7);
            $property->image7 = $filename7;
        }
        if($request->air_conditioning){
            $property->air_conditioning = 1;
        }
        if($request->coworking){
            $property->coworking = 1;
        }
        if($request->cabin){
            $property->cabin = 1;
        }
        if($request->meetingrooms){
            $property->meetingrooms = 1;
        }
        if($request->trainingrooms){
            $property->trainingrooms = 1;
        }
        if($request->wifi){
            $property->wifi = 1;
        }
        if($request->parking){
            $property->parking = 1;
        }
        if($request->lounge){
            $property->lounge = 1;
        }
        if($request->cafeteria){
            $property->cafeteria = 1;
        }
        if($request->it_support){
            $property->it_support = 1;
        }
        if($request->locker){
            $property->locker = 1;
        }
        if($request->_24x7){
            $property->_24x7 = 1;
        }
        $property->save();
        return redirect()->back()->with('success', 'Property Updated Successfully!!');

    }

    public function index(Request $request)
    {
        if($request->ajax())
        {
            $user_id = Session::get('user')->id;
            $data = PropertyApproved::where('admin',$user_id)->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn =' <a href="'.route('editproperty',$row->id).'"><i class="fa fa-pencil"></i></a>';
                        $btn = $btn.' &nbsp;&nbsp;<a href="javascript:void(0);"" id="'.$row->id.'" class="delete"><i class="fa fa-trash"></i></a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('dashboard.propertyadmin.manageproperty');
    }

    public function deleteproperty(Request $request){
        $property = PropertyApproved::where('id',$request->id)->first();
        $property->delete();
        
        return redirect()->back();

}
}
