<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable{
    
    use Notifiable;

    protected $guarded = ["id"];

    public function union(){
    
        return $this->belongsTo('App\Models\Union','union_id');
    
    }
    
    public function guild(){
    
        return $this->belongsTo('App\Models\Guild','guild_id');
    
    }
    
    public function imgs(){
        
        return $this->hasMany('App\ImgUser','user_id');
    
    }

}
