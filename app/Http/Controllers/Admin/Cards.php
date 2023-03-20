<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Card;
use Auth;
class Cards extends Controller{

    function index(){
    
        return view("backend.".Auth::user()->type.".card.create");
    
    }

    function show(){
        
        $card = Card::all();
        
        return view("backend.".Auth::user()->type.".card.show",compact(['card']));
    
    }

    function save(Request $res){

        Card::create([
            'name'    => $res->name,
            'type'    => $res->type,
        ]);
    
        return redirect()->route(Auth::user()->type.'.card-show');
    
    }

    function view($id){
       
        $data = Card::where('id',$id)->first();
    
        return view("backend.".Auth::user()->type.".card.edit",compact(['data']));
    
    }

    function edit($id,Request $res){
       
        $row = Card::where('id',$id)->first();

        if($res->name !="")
            $row->name = $res->name;
        if($res->type !="")
            $row->type = $res->type;

        $row->save();
    
        return redirect()->route(Auth::user()->type.'.card-show');
    
    }

    function del($id){
       
        $row = Card::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route(Auth::user()->type.'.card-show');
    
    }

}
