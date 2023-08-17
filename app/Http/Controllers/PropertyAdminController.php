<?php

namespace App\Http\Controllers;

use App\Models\ItTeam;
use App\Models\Issues;
use App\Models\IssuePortals;
use App\Models\FacilityTeam;
use App\Models\PropertyApproved;
use Illuminate\Support\Facades\Hash;
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

    public function issues($id){
        return view('dashboard.propertyadmin.issues',compact('id'));
    }


    public function managereviews(Request $request,$id){
        if($request->ajax()){
            $data = Reviews::where('fid',$id)->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                $btn = '<a href="javascript:void(0);" id="'.$row->id.'" class="delete btn btn-danger">Delete</a>';
               
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboard.propertyadmin.managereviews',compact('id'));
    }

    public function reviews(Request $request){
        if($request->ajax())
        {
            $user_id = Session::get('user')->id;
            $data = PropertyApproved::where('admin',$user_id)->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn =' <a href="'.route('managereviews',$row->id).'">View Reviews</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('dashboard.propertyadmin.reviews');
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

    public function createit(Request $request){
        if($request->ajax()){
            $user_id = Session::get('user')->id;
            $data = ItTeam::where('user_id',$user_id)->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('property_id',function($row)
            {
                $property = PropertyApproved::where('id',$row->property_id)->first();
                if($property){
                    return $property->title;
                }else{
                    return Null;
                }
            })
            ->addColumn('action', function($row){
                // $btn =' <a href="'.route('editproperty',$row->id).'"><i class="fa fa-pencil"></i></a>';
                $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);"" id="'.$row->id.'" class="delete"><i class="fa fa-trash"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        if(Session::has('user')){
            $user_id = Session::get('user')->id;
        }
        $properties = PropertyApproved::where('admin',$user_id)->get();
        return view('dashboard.propertyadmin.createit',compact('properties'));
    }

    public function saveit(Request $request){
        $validated = $request->validate([
            'property' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:it_teams',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        if(Session::has('user')){
            $user_id = Session::get('user')->id;
        }
        $itteam = new ItTeam;
        $itteam->user_id = $user_id;
        $itteam->property_id = $validated['property'];
        $itteam->name = $validated['name'];
        $itteam->email = $validated['email'];
        $itteam->password = bcrypt($validated['password']);
        $itteam->save();
        return redirect()->back()->with('success','Team Created Successfully!!');

    }

    public function deleteit(Request $request){
        $itteam = ItTeam::where('id',$request->id)->first();
        $itteam->delete();
        
        return redirect()->back();
    }

    public function createfacility(Request $request){
        if($request->ajax()){
            $user_id = Session::get('user')->id;
            $data = FacilityTeam::where('user_id',$user_id)->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('property_id',function($row)
            {
                $property = PropertyApproved::where('id',$row->property_id)->first();
                if($property){
                    return $property->title;
                }else{
                    return Null;
                }
            })
            ->addColumn('action', function($row){
                // $btn =' <a href="'.route('editproperty',$row->id).'"><i class="fa fa-pencil"></i></a>';
                $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);"" id="'.$row->id.'" class="delete"><i class="fa fa-trash"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        if(Session::has('user')){
            $user_id = Session::get('user')->id;
        }
        $properties = PropertyApproved::where('admin',$user_id)->get();
        return view('dashboard.propertyadmin.createfacility',compact('properties'));
    }

    public function savefacility(Request $request){
        $validated = $request->validate([
            'property' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:facility_teams',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        if(Session::has('user')){
            $user_id = Session::get('user')->id;
        }
        $itteam = new FacilityTeam;
        $itteam->user_id = $user_id;
        $itteam->property_id = $validated['property'];
        $itteam->name = $validated['name'];
        $itteam->email = $validated['email'];
        $itteam->password = bcrypt($validated['password']);
        $itteam->save();
        return redirect()->back()->with('success','Team Created Successfully!!');

    }

    public function deletefacility(Request $request){
        $itteam = FacilityTeam::where('id',$request->id)->first();
        $itteam->delete();
        
        return redirect()->back();
    }

    public function issueportals(Request $request){
        if($request->ajax()){
            $user_id = Session::get('user')->id;
            $data = IssuePortals::where('user_id',$user_id)->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('property_id',function($row)
            {
                $property = PropertyApproved::where('id',$row->property_id)->first();
                if($property){
                    return $property->title;
                }else{
                    return Null;
                }
            })
            ->addColumn('action', function($row){
                // $btn =' <a href="'.route('editproperty',$row->id).'"><i class="fa fa-pencil"></i></a>';
                $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);"" id="'.$row->id.'" class="delete"><i class="fa fa-trash"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        if(Session::has('user')){
            $user_id = Session::get('user')->id;
        }
        $properties = PropertyApproved::where('admin',$user_id)->get();
        return view('dashboard.propertyadmin.issueportals',compact('properties'));
    }

    public function saveportal(Request $request){
        $validated = $request->validate([
            'property' => 'required',
            'email' => 'required|email|unique:issue_portals',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        if(Session::has('user')){
            $user_id = Session::get('user')->id;
        }
        $itteam = new IssuePortals;
        $itteam->user_id = $user_id;
        $itteam->property_id = $validated['property'];
        $itteam->email = $validated['email'];
        $itteam->password = bcrypt($validated['password']);
        $itteam->save();
        return redirect()->back()->with('success','Portal Created Successfully!!');

    }

    public function deleteportal(Request $request){
        $itteam = IssuePortals::where('id',$request->id)->first();
        $itteam->delete();
        
        return redirect()->back();
    }

    public function issuelogin(){
        return view('dashboard.propertyadmin.issuelogin');
    }

    public function issuecheck(Request $request){
        $user = IssuePortals::where('email',$request->email)->first();
        $pid = $user->property_id;
        if($user && Hash::check($request->password, $user->password) ){
            Session::put('user',$user);
            return redirect()->route('issues',['id'=>$pid])->with('success', 'Logged In Successfully!!');
        }else{
            return redirect()->route('issuelogin')->with('danger','Credentials are Wrong' );
        }
    }

    public function saveissue(Request $request){
        $validated = $request->validate([
            'cname' => 'required',
            'floor' => 'required',
            'name' => 'required',
            'seat' => 'required',
            'department' => 'required',
            'title' => 'required',
            'description' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'priority' => 'required',
        ]);
        $issue = new Issues;
        $issue->property_id = $request->property_id;
        $issue->company = $validated['cname'];
        $issue->floor = $validated['floor'];
        $issue->name = $validated['name'];
        $issue->seat = $validated['seat'];
        $issue->department = $validated['department'];
        $issue->title = $validated['title'];
        $issue->description = $validated['description'];
        $issue->email = $validated['email'];
        $issue->number = $validated['phone'];
        $issue->date = $validated['date'];
        $issue->priority = $validated['priority'];
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images/issues');
            $image->move($destinationPath, $name);
            $issue->image = $name;
        }
        $issue->save();
        return redirect()->back()->with('success','Issue Submitted Successfully');
    }
}
