<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Union extends Model{
    
    protected $guarded = ["id"];

    public function user(){
    
        return $this->hasOne('App\User');
    
    }
    
    public function gov(){
    
        return $this->belongsTo('App\Models\Governorate','gov_id');
    
    }

    public function getImgAttribute($img){

      return asset($img);
    
    }

    public function getSignAttribute($img){

      return asset($img);
    
    }

    // public function offer(){
    //     return $this->hasMany('App\Models\OfferShops','shop_id','id');
    // }
}
