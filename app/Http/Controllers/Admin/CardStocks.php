<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\CardStock;
use Auth;
class CardStocks extends Controller{
    
    function index(){
        $card = Card::all();
        return view("backend.".Auth::user()->type.".blanks.create",compact('card'));
    }

    function show(){
        $cardstock = CardStock::with('card')->get();
        return view("backend.".Auth::user()->type.".blanks.show",compact(['cardstock']));
    }

    function save(Request $res){
        CardStock::create([
            'name'     => $res->name,
            'card_id' => $res->card_id,
            'cost'     => $res->cost,
            'qty'      => $res->qty,
        ]);
        return redirect()->route(Auth::user()->type.'.cardstock-show');
    }

    function view($id){
        $data = CardStock::with('card')->findOrFail($id);
        $card = Card::all();
        return view("backend.".Auth::user()->type.".blanks.edit",compact('data','card'));
    }

    function edit($id,Request $res){
        $row = CardStock::findOrFail($id);
        $attributes = $res->only(['name', 'card_id','qty', 'cost']);
        $row->update($attributes);
        return redirect()->route(Auth::user()->type.'.cardstock-show');
    }

    function del($id){
        CardStock::findOrFail($id)->delete();
        return redirect()->route(Auth::user()->type.'.cardstock-show');
    }

}
