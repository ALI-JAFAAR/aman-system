<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Package;

class Packages extends Controller{
    
    function index(){


        return view("backend.".Auth::user()->user.".package.create");
    
    }

    function show(){
        
        $package = Package::all();
        
        return view("backend.".Auth::user()->user.".package.show",compact(['package']));
    
    }

    function save(Request $res){
        Package::create([
            'name'      => $res->name,
            'details'   => $res->details,
            'cost'      => $res->cost,
            'max_value' => $res->max_value,
        ]);
        
        return redirect()->route('package-show');
    
    }

    function view($id){
       
        $data = Package::where('id',$id)->first();
        return view("backend.".Auth::user()->user.".package.edit",compact('data'));
    
    }

    function edit($id,Request $res){
       
        $row = Package::where('id',$id)->first();

        if($res->name !="")
            
            $row->name = $res->name;

        if($res->details !="")

            $row->details = $res->details;

        if($res->cost !="")

            $row->cost = $res->cost;

        if($res->max_value !="")

            $row->max_value = $res->max_value;

        $row->save();
    
        return redirect()->route('package-show');
    
    }

    function del($id){
       
        $row = Package::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route('package-show');
    
    }
}
