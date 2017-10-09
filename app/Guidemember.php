<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guidemember extends Model
{
     public $timestamps = false;

     public function trips(){
     	return $this->hasMany(Trip::class);
     }
      protected $hidden = ['password'];
}
