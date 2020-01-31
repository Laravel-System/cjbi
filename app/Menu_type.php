<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_type extends Model
{
    protected $table = "menu_types";
	protected $fillable = ['name'];
	
	public function menus(){
        return $this->belongsToMany('App\Menu','menu_type_id');
    }
}
