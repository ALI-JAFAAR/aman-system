<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerImgs extends Model{

    protected $guarded = ["id"];
    
    public function getImgAttribute($img){

      return asset($img);
    
    }
}
