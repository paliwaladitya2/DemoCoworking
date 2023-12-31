<?php

namespace App\Http\Controllers;
use App\Models\BlogComments;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\GeneralQuery;
use App\Models\PropertyUnapproved;
use App\Models\PropertyApproved;
use App\Models\Reviews;
use App\Models\Blog;

class HomeController extends Controller
{
    //
    public function add_properties(){
        if(Session::has('user')){
            return view('mainweb.add-property');

        }
        else{
            return view('mainweb.loginindex');
        }
    }

    public function contact_us(){
        return view('mainweb.contact-us');
    }

    public function about(){
        return view('mainweb.about');
    }

    public function blog_list(){
        $blogs = Blog::latest()->get();
        return view('mainweb.blog-list-sidebar',compact('blogs'));
    }

    public function blog_details($slug){
        $blogs = Blog::latest()->take(3)->get();
        $blog = Blog::where('slug',$slug)->first();
        $comments = BlogComments::where('blog_id', $blog->id)->latest()->take(3)->get();
        return view('mainweb.blog-details',compact('blog','comments','blogs'));
    }

    public function user_profile(){
        return view('mainweb.user-profile');
    }

    public function payment_method(){
        return view('mainweb.payment-method');
    }

    public function change_password(){
        return view('mainweb.change-password');
    }

    public function single_property($id){
        $properties = PropertyApproved::latest()->take(3)->get();
        $reviews = Reviews::latest()->get();
        return view('mainweb.single-property-1',compact('id', 'properties','reviews'));
    }


    public function properties_details(){
        return view('properties-details');
    }

    public function properties_grid(){
        $properties = PropertyApproved::all();
        $ps = PropertyApproved::latest()->take(3)->get();
        $blogs = Blog::latest()->take(3)->get();
        return view('mainweb.properties-grid-2',compact(['properties','ps','blogs']));
    }

    public function save_general_query(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric|digits:10',
            'message' => 'required',
        ]);
        $query = new GeneralQuery;
        $query->name = $validated['name'];
        $query->email = $validated['email'];
        $query->phone = $validated['phone'];
        $query->message = $validated['message'];
        $query->save();
        return redirect()->route('contact-us')->with('success', 'Message Submitted Successfully!!');
    }

    public function save_property(Request $request){
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
        $property = new PropertyUnapproved;
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
        return redirect()->back()->with('success', 'Property Submitted Successfully!!');

    }
    public function savereview(Request $request){
        $validated = $request->validate([
            'name'=> 'required',
            'phone'=> 'required|digits:10' ,
            'email'=> 'required|email',
            'message'=> 'required'
        ]);
        $review = new Reviews;
        $review->fid=$request->fid;
        $review->name=$validated['name'];
        $review->phone=$validated['phone'];
        $review->email=$validated['email'];
        $review->message=$validated['message'];
        $review->save();
        return redirect()->back()->with('success','Review submitted successfully');

    }

    public function savecomment(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);
        $comment = new BlogComments;
        $comment->name = $validated['name'];
        $comment->email = $validated['email'];
        $comment->comment = $validated['comment'];
        $comment->blog_id = $request->id;
        $comment->save();

        return redirect()->back()->with('success','Comment Submitted Successfully!!');
    }
}
