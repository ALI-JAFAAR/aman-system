<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Models\PosUser;
use App\Models\Union;
use App\Models\Guild;
use App\ImgUser;
use Auth;
class Users extends Controller{
    
    function index(){
        $pos = PosUser::all();
        $union = Union::all();
        $guild = Guild::all();
        return view("backend.".Auth::user()->type.".users.create",compact('pos','union','guild'));
    
    }

    function show(){
        
        $users = User::where('org_id','!=',1)->with('union','guild')->get();
        
        // dd($users);
        return view("backend.".Auth::user()->type.".users.show",compact(['users']));
    
    }

    function save(Request $res){

        $password_show =$res->password;
        $org_id=0;

        $user = User::create([
            'name'          => $res->name,
            'email'         => $res->email,
            'phone'         => $res->phone,
            'password'      => bcrypt($res->password),
            'position'      => $res->position,
            'union_id'      => $res->union_id,
            'guild_id'      => $res->guild_id,
            'org_id'        => $org_id,
            'type'        => $res->type,
            'password_show' => $password_show,
        ]);
        
        return redirect()->route(Auth::user()->type.'.users-show');
    
    }

    function view($id){
       
        $data = User::where('id',$id)->with('union','guild')->first();
        $pos = PosUser::all();
        $union = Union::all();
        $guild = Guild::all();
        return view("backend.".Auth::user()->user.".users.edit",compact('data','pos','union','guild'));
    
    }

    function edit($id,Request $res){
       
        $row = User::where('id',$id)->first();

        if($res->name !="")
            $row->name = $res->name;

        if($res->email !="")
            $row->email = $res->email;

        if($res->phone !="")
            $row->phone = $res->phone;

        if($res->password_show !=""){
            $row->password_show = $res->password_show;
            $row->password = bcrypt($res->password_show);
        }

        if($res->position !="")
            $row->position = $res->position;

        if($res->union_id !="")
            $row->union_id = $res->union_id;

        if($res->guild_id !="")
            $row->guild_id = $res->guild_id;
        

        $row->save();
    
        return redirect()->route(Auth::user()->type.'.users-show');
    
    }

    function del($id){
       
        $row = User::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route(Auth::user()->type.'.users-show');
    
    }









    function pos_index(){
    
        return view("backend.".Auth::user()->type.".users.pos.create");
    
    }

    function pos_show(){
        
        $pos = PosUser::all();
        
        return view("backend.".Auth::user()->type.".users.pos.show",compact(['pos']));
    
    }

    function pos_save(Request $res){

        PosUser::create([
            'position'    => $res->position,
        ]);
    
        return redirect()->route('pos-show');
    
    }

    function pos_view($id){
       
        $data = PosUser::where('id',$id)->first();
    
        return view("backend.".Auth::user()->type.".users.pos.edit",compact(['data']));
    
    }

    function pos_edit($id,Request $res){
       
        $row = PosUser::where('id',$id)->first();

        if($res->position !="")
            $row->position = $res->position;
        $row->save();
    
        return redirect()->route('pos-show');
    
    }

    function pos_del($id){
       
        $row = PosUser::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route('pos-show');
    
    }














    function employee_index(){
        $pos = PosUser::all();
        return view("backend.".Auth::user()->type.".employee.create",compact('pos'));
    }

    function employee_show(){
        $employee = User::where('org_id',1)->with('imgs')->get();
        
        return view("backend.".Auth::user()->type.".employee.show",compact(['employee']));
    
    }

    function employee_save(Request $res){
    
        $user = User::create([
            'name'          => $res->name,
            'email'         => $res->email,
            'phone'         => $res->phone,
            'password'      => bcrypt($res->password),
            'password_show' => $res->password,
            'type'          => $res->type,
            'position'      => $res->position,
            'org_id'        => 1,
            'salary'        => $res->salary,
            'active'        => $res->active,
            
        ]);
        
        if($res->imgs != null){
            foreach ($res->file('imgs') as $imagefile) {
            
                ImgUser::create([
                    'user_id'   => $user->id,
                    'img'       => 'storage/'.$imagefile->store('public/emp_img','public'), 
                ]);
            
            }
        }

        return redirect()->route(Auth::user()->type.'.employee-show');
    
    }

    function employee_view($id){
       
        $data = User::findOrFail($id);
        $pos = PosUser::all();
        return view("backend.".Auth::user()->type.".employee.edit",compact('data','pos'));
    
    }

    function employee_edit($id,Request $res){
       
        $row = User::findOrFail($id);
        $attributes = $res->only(['name','email','phone','position','salary','active']);
        $row->update($attributes);
        if ($res->password !== "") {
            $row->password = bcrypt($res->password);
            $row->password_show = $res->password;
        }
        $row->save();
        return redirect()->route(Auth::user()->type.'.employee-show');
    
    }

    function employee_del($id){
        User::findOrFail($id)->delete();
        $img =ImgUser::where('user_id',$id)->delete();
        return redirect()->route(Auth::user()->type.'.employee-show');
    
    }

}
