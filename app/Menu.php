<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
 	protected $table = "menus";
    public function pages()
    {
        return $this->belongsToMany('App\Post','menu_posts','menu_id','post_id');
    }

    public function menu_type(){
    	return $this->belongsTo('App\Menu_type','menu_type_id');
    }
    public function parents()
    {
        return $this->belongsTo(static::class, 'parent_id');
    }
    public function languages()
    {
        return $this->belongsTo('App\Language', 'language');
    }
}
