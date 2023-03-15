<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardStock extends Model
{
    protected $guarded = ["id"];

    public function card(){
    
        return $this->belongsTo('App\Models\Card','card_id');
    
    }
}
