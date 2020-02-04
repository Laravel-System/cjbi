<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = "posts";
  
  public $directory = "/images";

  public function gePathAttribute($value){
    return $this->directory. $value;
  }

    public function menus()
    {
        return $this->belongsToMany('App\Menu','menu_posts','post_id','menu_id');
    }
    public function categories()
    {
    	return $this->belongsToMany('App\Category','post_categories','post_id','categorie_id');
    }

		public function cate()
    {
    	return $this->belongsToMany('App\Category','page_categories','page_id','categorie_id');
    }
		public function company()
    {
    	return $this->belongsToMany('App\Category','page_categories','page_id','company_id');
    }
    	public function brand()
    {
    	return $this->belongsToMany('App\Category','page_categories','page_id','brand_id');
    }
		public function page_cat_posi(){
			return $this->hasMany('App\Page_Cat','post_id');
		}
    public function galleries()
    {
        return $this->belongsToMany('App\Gallery','post_galleries','post_id','gallerie_id');
    }
    public function slides(){
        return $this->belongsToMany('App\Slide','post_slides','slide_id','post_id');
    }

		public function image_post(){
			return $this->hasMany('App\Post_image','post_id');
		}
		public function user(){
			return $this->belongsTo('App\Post','user_id');
		}
    public function lang(){
      return $this->belongsTo('App\Language','language');
    }
}
