<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
    
    protected $guarded = ["id"];
    

    public function card(){
    
        return $this->belongsTo('App\Models\Card','card_id');
    
    }

    public function package(){
    
        return $this->belongsTo('App\Models\Package','package_id');
    
    }

    public function union(){
    
        return $this->belongsTo('App\Models\Union','union_id');
    
    }


    public function employeer(){
    
        return $this->belongsTo('App\Models\Customer','employeer_id');
    
    }


    public function user(){
    
        return $this->belongsTo('App\User','user_id');
    
    }


    public function guild(){
    
        return $this->belongsTo('App\Models\Guild','guild_id');
    
    }

    public function guildsub(){
    
        return $this->belongsTo('App\Models\GuildSub','guild_sub_id');
    
    }


    public function govs(){
    
        return $this->belongsTo('App\Models\Governorate','gov_id');
    
    }
    
    public function job_govs(){
    
        return $this->belongsTo('App\Models\Governorate','job_govs');
    
    }


    public function partner(){
    
        return $this->belongsTo('App\Models\Union','union_id');
    
    }

    public function imgs(){
    
        return $this->hasMany('App\Models\CustomerImgs','cus_id');
    
    }



    public function getImgAttribute($img){

      return asset($img);
    
    }
}
