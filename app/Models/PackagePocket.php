<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackagePocket extends Model{
    
    protected $guarded = ["id"];
    
    public function partner(){
    
        return $this->belongsTo('App\Models\Partners','partner_id');
    
    }
}
