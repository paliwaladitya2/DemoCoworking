<?php

namespace App\Http\Controllers;

use App\Models\Issues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables as Datatables;


class TeamController extends Controller
{
    public function activeissues(Request $request){
        $team = Session::get('user')->team;
        if($request->ajax()){
            $id = Session::get('user')->property_id;
            $data = Issues::where('property_id',$id)->where('department',$team)->where('status','active')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                $btn =' <a href="'.route('issuedetails',$row->id).'"><i class="fa fa-eye"></i></a>';
                $btn = $btn.' &nbsp;&nbsp;<a href="javascript:void(0);" id="'.$row->id.'" class="status btn btn-success">Solved</a>';
               
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboard.teams.activeissues');
    }

    public function resolvedissues(Request $request){
        $team = Session::get('user')->team;
        if($request->ajax()){
            $id = Session::get('user')->property_id;
            $data = Issues::where('property_id',$id)->where('department',$team)->where('status','resolved')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                $btn =' <a href="'.route('issuedetails',$row->id).'"><i class="fa fa-eye"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboard.teams.resolvedissues');
    }

    public function solved(Request $request){
        $issue = Issues::find($request->id);
        $issue->status = 'resolved';
        $issue->save();
    }

    public function issuedetails($id){
        $issue = Issues::find($id);
        return view('dashboard.teams.issuedetails',compact('issue'));

    }
}
