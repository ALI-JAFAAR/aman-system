<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model{
    
    protected $guarded = ["id"];
    
    public function package(){
    
        return $this->belongsTo('App\Models\Package','package_id');
    
    }

    public function getImgAttribute($img){

      return asset($img);
    
    }
}
