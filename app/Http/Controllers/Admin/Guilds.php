<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Union;
use App\Models\Guild;

class Guilds extends Controller{
    
    function index(){

        $union = Union::all();
        return view("backend.".Auth::user()->user.".guild.create",compact('union'));
    
    }

    function show(){
        
        $guild = Guild::with('union')->get();
        
        return view("backend.".Auth::user()->user.".guild.show",compact(['guild']));
    
    }

    function save(Request $res){
        $user = Guild::create([
            'name'          => $res->name,
            'cost'          => $res->cost,
            'union_id'      => $res->union_id,
            'img'           => 'storage/'.$res->file('img')->store('public/guild','public'),
            'sign'          => 'storage/'.$res->file('sign')->store('public/guild','public'),
        ]);
        
        return redirect()->route('guild-show');
    
    }

    function view($id){
       
        $data = Guild::where('id',$id)->with('union')->first();
        $union = Union::all();
        return view("backend.".Auth::user()->user.".guild.edit",compact('data','union'));
    
    }

    function edit($id,Request $res){
       
        $row = Guild::where('id',$id)->first();

        if($res->name !="")
            $row->name = $res->name;

        if($res->cost !="")
            $row->cost = $res->cost;

        if($res->union_id !="")
            $row->union_id = $res->union_id;

        if($res->img !="")
            $row->img = 'storage/'.$res->file('img')->store('public/guild','public');

        if($res->sign !="")
            $row->sign = 'storage/'.$res->file('sign')->store('public/guild','public');

        $row->save();
    
        return redirect()->route('guild-show');
    
    }

    function del($id){
       
        $row = Guild::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route('guild-show');
    
    }

}
