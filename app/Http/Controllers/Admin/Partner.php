<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Partners;
use App\Models\Package;

class Partner extends Controller{
    
    function index(){
        $package = Package::all();
        return view("backend.admin.partner.create",compact('package'));
    
    }

    function show(){
        
        $partner = Partners::with('package')->get();
        
        return view("backend.admin.partner.show",compact(['partner']));
    
    }

    function save(Request $res){

        Partners::create([
            'name'       => $res->name,
            'details'    => $res->details,
            'package_id' => $res->package_id,
            'cost'       => $res->cost,
            'img'        => 'storage/'.$res->file('img')->store('public/partner','public'),

        ]);
    
        return redirect()->route('partner-show');
    
    }

    function view($id){
       
        $data = Partners::where('id',$id)->with('package')->first();
        $package = Package::all();
        return view("backend.admin.partner.edit",compact(['data','package']));
    
    }

    function edit($id,Request $res){
       
        $row = Partners::where('id',$id)->first();

        if($res->name !="")
            $row->name = $res->name;

        if($res->details !="")
            $row->details = $res->details;

        if($res->package_id !="")
            $row->package_id = $res->package_id;

        if($res->cost !="")
            $row->cost = $res->cost;

        if($res->img !="")
            $row->img = 'storage/'.$res->file('img')->store('public/partner','public');

        $row->save();
    
        return redirect()->route('partner-show');
    
    }

    function del($id){
       
        $row = Partners::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route('partner-show');
    
    }
}
