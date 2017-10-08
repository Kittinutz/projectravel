<?php

namespace App\Http\Controllers;
use App\Trip;
use App\Schedule;
use App\Guidemember;
use Illuminate\Http\Request;

class GuideController extends Controller
{

    public  function index(){
    	
    
    	return Trip::with(['guide','schedules'])->orderBy('id','desc')->get();
    }
}
