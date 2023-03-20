<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

use App\Models\Governorate;
use Auth;
class Gov extends Controller{
    
    function index(){
        // $tr = new GoogleTranslate('en');
        // $tr->translate('');
        return view("backend.".Auth::user()->type.".gov.create");
    
    }

    function show(){
        
        $gov = Governorate::all();
        
        return view("backend.".Auth::user()->type.".gov.show",compact(['gov']));
    
    }

    function save(Request $res){

        Governorate::create([
            'name'    => $res->name,
        ]);
    
        return redirect()->route(Auth::user()->type.'.gov-show');
    
    }

    function view($id){
       
        $data = Governorate::where('id',$id)->first();
    
        return view("backend.".Auth::user()->type.".gov.edit",compact(['data']));
    
    }

    function edit($id,Request $res){
       
        $row = Governorate::where('id',$id)->first();

        if($res->name !="")
            $row->name = $res->name;
        $row->save();
    
        return redirect()->route(Auth::user()->type.'.gov-show');
    
    }

    function del($id){
       
        $row = Governorate::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route(Auth::user()->type.'.gov-show');
    
    }

}
