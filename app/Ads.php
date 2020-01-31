<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $table = "ads";
	protected $fillable = ['image'];
    public function ads_image(){
    	return $this->HasMany('App\Ads_image','ads_id');
    }
}
