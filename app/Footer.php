<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = "footers";

    // public function pages(){
    //     return $this->BelongToMany('App\Post','page_id','footer_id','footer_pages');
    // }
}
