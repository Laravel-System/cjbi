<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "gallery";
    
    public function posts_gallery(){
        return $this->belongsToMany('App\Post','post_galleries','gallerie_id','post_id');
    }  
    public function gallerie_image(){
    	return $this->HasMany('App\Gallery_Image','gallerie_id');
    }
    public function cat_gallery(){
    	return $this->belongsTo('App\Cat_Gallery','category_galleries_id');
    }
    public function user()
    {
    	return $this->belongsTo('App\User','user_id');
    }
}
