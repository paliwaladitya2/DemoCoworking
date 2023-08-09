<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BlogCategoryController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = BlogCategory::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn =' <a href="'.route('edit_blog_category',$row->id).'"><i class="fa fa-pencil"></i></a>';
                        $btn = $btn.' &nbsp;&nbsp;<a href="javascript:void(0);"" id="'.$row->id.'" class="delete"><i class="fa fa-trash"></i></a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('dashboard.SuperAdmin.manage_blog_category');
    }
    public function add_blog_category()
    {
        return view('dashboard.SuperAdmin.add_blog_category');
    }
    public function save_blog_category(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:blog_category,name',
        ]);
        $blog_category = new BlogCategory();
        $blog_category->name = $request->name;
        $blog_category->save();
        return redirect()->route('manage_blog_category')->with('success','Blog Category Added Successfully');
    }
    public function edit_blog_category($id)
    {
        $blog_category = BlogCategory::find($id);
        return view('dashboard.SuperAdmin.edit_blog_category',compact('blog_category'));
    }
    public function update_blog_category(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:blog_category,name,'.$request->id,
        ]);
        $blog_category = BlogCategory::find($request->id);
        $blog_category->name = $request->name;
        $blog_category->save();
        return redirect()->route('manage_blog_category')->with('success','Blog Category Updated Successfully');
    }
    public function delete_blog_category($id)
    {
        $blog_category = BlogCategory::find($id);
        $blog_category->delete();
        return redirect()->back()->with('success','Blog Category Deleted Successfully');
    }
}
