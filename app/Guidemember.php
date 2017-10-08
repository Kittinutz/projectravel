<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guidemember extends Model
{
     public $timestamps = false;

     public function trips(){
     	return $this->hasMany('App\Trip','guide_id');
     }
      protected $hidden = ['password'];
}
