<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_Gallery extends Model
{
    protected $table = "cat_galleries";
    
    public function gallery(){
        return $this->hasMany('App\Galleries','category_galleries_id');
    }   
}
