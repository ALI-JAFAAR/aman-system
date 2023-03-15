<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Union;
use App\User;
use App\Models\Governorate;


class Unions extends Controller{

    function index(){
        $gov  = Governorate::all();
        // $user = User::where('union_id','!=',null)->get();
        return view("backend.admin.union.create",compact('gov'));
    
    }

    function show(){
        
        $union = Union::with('gov')->get();

        return view("backend.admin.union.show",compact(['union']));
    
    }

    function save(Request $res){

        Union::create([
            'name'    => $res->name,
            'cost_persent'    => $res->cost_persent,
            'cost'    => $res->cost,
            'gov_id' => $res->gov_id,
            // 'sign'    => 'storage/'.$res->file('sign')->store('public/union','public'),
            // 'img'       => 'storage/'.$res->file('img')->store('public/union','public'),
        ]);
    
        return redirect()->route('union-show');
    
    }

    function view($id){
       
        $data = Union::where('id',$id)->first();
        $gov = Governorate::all();
        return view("backend.admin.union.edit",compact(['data','gov']));
    
    }

    function edit($id,Request $res){
       
        $row = Union::where('id',$id)->first();

        if($res->name !="")
            $row->name = $res->name;

        if($res->cost_persent !="")
            $row->cost_persent = $res->cost_persent;

        if($res->cost !="")
            $row->cost = $res->cost;
        
        if($res->gov_id !="")
            $row->gov_id = $res->gov_id;
        
        if($res->user_id !="")
            $row->user_id = $res->user_id;

        if($res->img !="")
            $row->img = 'storage/'.$res->file('img')->store('public/union','public');

        if($res->sign !="")
            $row->sign = 'storage/'.$res->file('sign')->store('public/union','public');

        $row->save();
    
        return redirect()->route('union-show');
    
    }

    function del($id){
       
        $row = Union::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route('union-show');
    
    }
}
