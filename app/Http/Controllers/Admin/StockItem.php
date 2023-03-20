<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StockItems;
use App\Models\Stock;
class StockItem extends Controller{
    
    function index(){
        $stock = Stock::all();
        return view("backend.".Auth::user()->user.".stockitem.create",compact('stock'));
    }

    function show(){
        $stockitem = StockItems::with('stock')->get();
        return view("backend.".Auth::user()->user.".stockitem.show",compact(['stockitem']));
    }

    function save(Request $res){
        StockItems::create([
            'name'     => $res->name,
            'stock_id' => $res->stock_id,
            'cost'     => $res->cost,
            'qty'      => $res->qty,
            'note'     => $res->note,
        ]);
        return redirect()->route('stockitem-show');
    }

    function view($id){
        $data = StockItems::with('stock')->findOrFail($id);
        $stock = Stock::all();
        return view("backend.".Auth::user()->user.".stockitem.edit",compact('data','stock'));
    }

    function edit($id,Request $res){
        $row = StockItems::findOrFail($id);
        $attributes = $res->only(['name', 'stock_id','qty', 'cost', 'note']);
        $row->update($attributes);
        return redirect()->route('stockitem-show');
    }

    function del($id){
        StockItems::findOrFail($id)->delete();
        return redirect()->route('stockitem-show');
    }
}
