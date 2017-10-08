<?php

namespace App;
use App\Guidemember;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //

    public function schedules(){
    	return $this->hasMany('App\Schedule','trip_id');
    }
    public function guide()
    {
        return $this->belongsTo(Guidemember::class);
    }
}
