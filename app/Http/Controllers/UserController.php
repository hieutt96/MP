<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matches;
use App\bets;
use App\users;
use Auth;
class UserController extends Controller
{
    public function history(){
    	if(Auth::check()){
    		$user=users::find(Auth::user()->id);
    	}
    	return view('user.history')->with('user',$user);
    }
    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }
}
