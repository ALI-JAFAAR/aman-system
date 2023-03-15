<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

use App\Models\Governorate;

class Gov extends Controller{
    
    function index(){
        // $tr = new GoogleTranslate('en');
        // $tr->translate('');
        return view("backend.admin.gov.create");
    
    }

    function show(){
        
        $gov = Governorate::all();
        
        return view("backend.admin.gov.show",compact(['gov']));
    
    }

    function save(Request $res){

        Governorate::create([
            'name'    => $res->name,
        ]);
    
        return redirect()->route('gov-show');
    
    }

    function view($id){
       
        $data = Governorate::where('id',$id)->first();
    
        return view("backend.admin.gov.edit",compact(['data']));
    
    }

    function edit($id,Request $res){
       
        $row = Governorate::where('id',$id)->first();

        if($res->name !="")
            $row->name = $res->name;
        $row->save();
    
        return redirect()->route('gov-show');
    
    }

    function del($id){
       
        $row = Governorate::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route('gov-show');
    
    }

}
