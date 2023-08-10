<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComments;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Image;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Blog::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('comment',function($row){
                        $btn = '<a href="'.route('manage_comment',$row->id).'">View Comments</a>';
                        return $btn;
                    })
                    ->addColumn('action', function($row){
                        $btn =' <a href="'.route('edit_blog',$row->id).'"><i class="fa fa-pencil"></i></a>';
                        $btn = $btn.' &nbsp;&nbsp;<a href="javascript:void(0);"" id="'.$row->id.'" class="delete"><i class="fa fa-trash"></i></a>';
                        return $btn;
                    })
                    ->rawColumns(['action', 'comment'])
                    ->make(true);
        }
        return view('dashboard.SuperAdmin.manage_blogs');
    }
    public function add_blog()
    {
        $categories = BlogCategory::all();
        return view('dashboard.SuperAdmin.add_blog',compact('categories'));
    }

    

    public function save_blog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'image_main' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'slug' => 'required|unique:blogs',
            'content' => 'required',
        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->category_id = $request->category_id;
        $blog->content = $request->content;
        if($request->hasFile('image_main'))
        {
            $image = $request->file('image_main');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/blogs');
            $image->move($destinationPath, $name);
            $blog->image_main = $name;
            $blog->image_thumbnail = "thumb_".$name;
        }
        if($request->meta_title)
        {
            $blog->meta_title = $request->meta_title;
        }
        if($request->meta_description)
        {
            $blog->meta_description = $request->meta_description;
        }
        if($request->meta_keywords)
        {
            $blog->meta_keywords = $request->meta_keywords;
        }
        if($request->tag1)
        {
            $blog->tag1 = $request->tag1;
        }
        if($request->tag2)
        {
            $blog->tag2 = $request->tag2;
        }
        if($request->tag3)
        {
            $blog->tag3 = $request->tag3;
        }
        if($request->tag4)
        {
            $blog->tag4 = $request->tag4;
        }
        if($request->tag5)
        {
            $blog->tag5 = $request->tag5;
        }
        if($request->tag6)
        {
            $blog->tag6 = $request->tag6;
        }
        if($request->tag7)
        {
            $blog->tag7 = $request->tag7;
        }
        if($request->tag8)
        {
            $blog->tag8 = $request->tag8;
        }
        if($request->tag9)
        {
            $blog->tag9 = $request->tag9;
        }
        if($request->tag10)
        {
            $blog->tag10 = $request->tag10;
        }
        $blog->save();
        return redirect()->route('manage_blogs')->with('success','Blog Added Successfully');
    }
    public function edit_blog($id)
    {
        $blog = Blog::find($id);
        return view('dashboard.SuperAdmin.edit_blog',compact('blog'));
    }
    public function update_blog(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:blog_category,name,'.$request->id,
        ]);
        $blog_category = Blog::find($request->id);
        $blog_category->name = $request->name;
        $blog_category->save();
        return redirect()->route('manage_blog')->with('success','Blog Updated Successfully');
    }
    public function delete_blog($id)
    {
        $blog_category = Blog::find($id);
        $comments = BlogComments::where('blog_id',$id)->get();
        if($comments){
            foreach($comments as $comment){
                $comment->delete();
            }
        }
        $blog_category->delete();
        return redirect()->back()->with('success','Blog Deleted Successfully');
    }

    public function manage_comment($id, Request $request)
    {
        if($request->ajax()){
            $comments = BlogComments::where('blog_id',$id)->get();
            return DataTables::of($comments)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                $btn = '<a href="javascript:void(0);"" id="'.$row->id.'" class="delete"><i class="fa fa-trash"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboard.SuperAdmin.manage_comment',compact('id'));
    }

    public function delete_comment($id)
    {
        $comment = BlogComments::find($id);
        $comment->delete();
        return redirect()->back()->with('success','Comment Deleted Successfully');
    }
}
