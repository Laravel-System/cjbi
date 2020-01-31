<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    public function post()
    {
    	return $this->belongsToMany('App\Post','page_categories','categorie_id','page_id');
    }
    public function products()
    {
    	return $this->belongsToMany('App\Post','page_categories','brand_id','page_id');
    }

    public function cat_position(){
			return $this->hasOne('App\Page_Cat','categorie_id');
	}
	
	public function user(){
	    return $this->belongsTo('App\User','user_id');
	}
}
