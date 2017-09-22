<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matches;
class ReviewController extends Controller
{
    public function show(){
    	$matches=matches::where('public',1)->where('home_goal','<>','')->get();
    	return view('user.review')->with('matches',$matches);
    }
}
