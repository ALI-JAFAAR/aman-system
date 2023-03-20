<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PosUser;
use Auth;
class Pos extends Controller{
    
    function index(){

        return view("backend.".Auth::user()->type.".users.pos.create");
    
    }

    function show(){
        
        $pos = PosUser::all();
        
        return view("backend.".Auth::user()->type.".users.pos.show",compact(['pos']));
    
    }

    function save(Request $res){

        PosUser::create([
            'user_id'    => $res->user_id,
            'position'   => $res->position,
        ]);
    
        return redirect()->route(Auth::user()->type.'.pos-show');
    
    }

    function view($id){
       
        $data = PosUser::where('id',$id)->first();
    
        return view("backend.".Auth::user()->type.".users.pos.edit",compact(['data']));
    
    }

    function edit($id,Request $res){
       
        $row = PosUser::where('id',$id)->first();

        if($res->name !="")
            $row->name = $res->name;

        if($res->link !="")
            $row->link = $res->link;

        if($res->discrip !="")
            $row->discrip = $res->discrip;
        
        if($res->img !="")
            $row->img = 'storage/'.$res->file('img')->store('public/page','public');
        $row->save();
    
        return redirect()->route(Auth::user()->type.'.pos-show');
    
    }

    function del($id){
       
        $row = PosUser::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route(Auth::user()->type.'.pos-show');
    
    }

}
