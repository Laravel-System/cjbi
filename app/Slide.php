<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected  $table = "slides";
   	public function slide_type(){
      return $this->belongsTo('App\Slide_Type','slide_type_id');
    }
    public function user()
    {
      return $this->belongsTo('App\User','user_id');
    }
   	public function posts_slide(){
        return $this->belongsToMany('App\Post','post_slides','post_id','slide_id');
    }
    public function slide_image(){
    	return $this->HasMany('App\Slide_image','slide_id');
    }

}
