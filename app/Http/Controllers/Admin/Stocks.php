<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Stock;

class Stocks extends Controller{
    

    function index(){
        return view("backend.".Auth::user()->user.".stock.create");
    }

    function show(){
        $stock = Stock::all();
        return view("backend.".Auth::user()->user.".stock.show",compact(['stock']));
    }

    function save(Request $res){
        Stock::create([
            'name'       => $res->name,
            'details'    => $res->details,
            'start_cost' => $res->start_cost,
            'note'       => $res->note,
        ]);
        return redirect()->route('stock-show');
    }

    function view($id){
        $data = Stock::findOrFail($id);
        return view("backend.".Auth::user()->user.".stock.edit",compact('data'));
    }

    function edit($id,Request $res){
        $row = Stock::findOrFail($id);
        $attributes = $res->only(['name', 'details', 'start_cost', 'note']);
        $row->update($attributes);
        return redirect()->route('stock-show');
    }

    function del($id){
        Stock::findOrFail($id)->delete();
        return redirect()->route('stock-show');
    }

}
