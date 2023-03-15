<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model{
    
    protected $guarded = ["id"];
    
    public function partner(){
    
        return $this->hasOne('App\Models\Partners','package_id');
    
    }   
}
