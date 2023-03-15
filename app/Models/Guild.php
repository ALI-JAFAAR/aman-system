<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guild extends Model{
    
    protected $guarded = ["id"];
    
    public function union(){
    
        return $this->belongsTo('App\Models\Union','union_id');
    
    }


    public function user(){
    
        return $this->hasOne('App\User','guild_id');
    
    }

    public function getImgAttribute($img){

      return asset($img);
    
    }

    public function getSignAttribute($img){

      return asset($img);
    
    }
    
}
