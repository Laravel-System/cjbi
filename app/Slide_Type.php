<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide_Type extends Model
{
    protected $table = "slide_type";
    
    public function slides(){
        return $this->hasMany('App\Slide','slide_type_id');
    }   
}
