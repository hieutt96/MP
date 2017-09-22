<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matches;
class PlayingController extends Controller
{
    public function show(){
    	$matches=matches::where('date',date('Y-m-d'))->get();
    	return view('user.playing')->with('matches',$matches);
    }
}
