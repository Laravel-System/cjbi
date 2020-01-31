<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

	protected $table = "roles";
	protected $fillable = ['name','display_name','description'];
    public function users(){
    	return $this->BelongToMany('App\User','user_id','role_id','user_roles');
    }
}
