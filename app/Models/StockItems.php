<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockItems extends Model{
    
    protected $guarded = ["id"];
    
    public function stock(){
    
        return $this->belongsTo('App\Models\Stock','stock_id');
    
    }
}
