<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;

class Activities extends Controller{
    
    function index(){

        return view("backend.".Auth::user()->user.".activity.create");
    
    }

    function show(){
        
        $activity = Activity::all();
        
        return view("backend.".Auth::user()->user.".activity.show",compact(['activity']));
    
    }

    function save(Request $res){
        Activity::create([
            'name'          => $res->name,
        ]);
        
        return redirect()->route('acitivty-show');
    
    }

    function view($id){
       
        $data = Activity::where('id',$id)->first();
        return view("backend.".Auth::user()->user.".activity.edit",compact('data'));
    
    }

    function edit($id,Request $res){
       
        $row = Activity::where('id',$id)->first();

        if($res->name !="")
            $row->name = $res->name;

        $row->save();
    
        return redirect()->route('acitivty-show');
    
    }

    function del($id){
       
        $row = Activity::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route('acitivty-show');
    
    }
}
