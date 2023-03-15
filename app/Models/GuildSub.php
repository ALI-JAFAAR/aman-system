<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuildSub extends Model{
    
    protected $guarded = ["id"];

    public function guild(){
    
        return $this->belongsTo('App\Models\Guild','guild_id');
    
    }
    
}
