<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Card;

class Cards extends Controller{

    function index(){
    
        return view("backend.admin.card.create");
    
    }

    function show(){
        
        $card = Card::all();
        
        return view("backend.admin.card.show",compact(['card']));
    
    }

    function save(Request $res){

        Card::create([
            'name'    => $res->name,
            'type'    => $res->type,
        ]);
    
        return redirect()->route('card-show');
    
    }

    function view($id){
       
        $data = Card::where('id',$id)->first();
    
        return view("backend.admin.card.edit",compact(['data']));
    
    }

    function edit($id,Request $res){
       
        $row = Card::where('id',$id)->first();

        if($res->name !="")
            $row->name = $res->name;
        if($res->type !="")
            $row->type = $res->type;

        $row->save();
    
        return redirect()->route('card-show');
    
    }

    function del($id){
       
        $row = Card::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route('card-show');
    
    }

}
