<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Record;
use App\Models\Customer;

class Records extends Controller{
    

    function index(){
        $cus = Customer::all();
        return view("backend.".Auth::user()->user.".record.index",compact(['cus']));
    
    }

    function view($id){
        
        $cus = Customer::where('id',$id)->first();
        
        return view("backend.".Auth::user()->user.".record.show",compact(['cus']));
    
    }
}
