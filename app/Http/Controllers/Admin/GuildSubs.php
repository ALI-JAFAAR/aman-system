<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Activity;
use App\Models\Guild;
use App\Models\GuildSub;

class GuildSubs extends Controller{
    
    function index(){

        $activity = Activity::all();
        $guild    = Guild::all();

        return view("backend.".Auth::user()->user.".guild_sub.create",compact('activity','guild'));
    
    }

    function show(){
        
        $guildsub = GuildSub::with('guild')->get();
        
        return view("backend.".Auth::user()->user.".guild_sub.show",compact(['guildsub']));
    
    }

    function save(Request $res){
        
        foreach($res->name as $row){

            $user = GuildSub::create([
                'name'          => $row,
                'guild_id'      => $res->guild_id,
                'activity'      => $res->activity,
            ]);
        }
        
        return redirect()->route('guildsub-show');
    
    }

    function view($id){
        
        $data = GuildSub::where('id',$id)->with('guild')->first();
        
        $activity = Activity::all();
        $guild    = Guild::all();

        return view("backend.".Auth::user()->user.".guild_sub.edit",compact('data','activity','guild'));
    
    }

    function edit($id,Request $res){
       
        $row = GuildSub::where('id',$id)->first();

        if($res->name !="")
            $row->name = $res->name;

        if($res->guild_id !="")
            $row->guild_id = $res->guild_id;

        if($res->activity !="")
            $row->activity = $res->activity;

        $row->save();
    
        return redirect()->route('guildsub-show');
    
    }

    function del($id){
       
        $row = GuildSub::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route('guildsub-show');
    
    }

}
