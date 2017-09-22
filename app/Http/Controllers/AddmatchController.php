<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\matches;
use App\Http\Controllers\Controller;

class AddmatchController extends Controller
{
    public function show(){
    	return view('admin/admin_addmatch');
    }
    public function postvalidation(Request $request){
    	$this->validate($request,[
            'home'=>'required|min:2|max:30|different:way',
            'way'=>'required|min:2|max:30|different:home',
            'time_start'=>'required',
            'date'=>'required|after:'.date('Y-m-d'),
            'time_end'=>'required',
            'time_bets'=>'required|after:now',
            'homewin'=>'required',
            'equal'=>'required',
            'waywin'=>'required',
            'home_score'=>'',
            'way_score'=>''
            ],[
            // 'home.different'=>"The home must be different the way",
            // 'home.required'=>'The home field is required.',
            // 'way.required'=>'The way field is required.',
            // 'home.min' => ' The home must be at least 2 characters.',
            // 'home.max' => ' The home may not be greater than 35 characters.',
            // 'way.min' => ' The way must be at least 2 characters.',
            // 'way.max' => ' The way may not be greater than 35 characters.',
            // 'time_start.required'=>'The time start field is required.',
            // 'date.required'=>'The date field is required.',
            // 'time_end.required'=>'The time end field is required.',
            // 'time_bets.required'=>'The date end field is required.',
            // 'homewin.required'=>'The rate home win field is required.',
            // 'equal.required'=>'The rate equal field is required.',
            // 'waywin.required'=>'The rate way win field is required.',
            // 'home_score.required'=>'The way score field is required.',
            // 'way_score.required'=>'The home score field is required.'
            ]);
    	 
        
            
        $Matches= new matches;
        $Matches->home =$request->home;
        $Matches->way=$request->way;
        $Matches->home_goal=$request->home_score;
        $Matches->way_goal=$request->way_score;
        $Matches->home_rate=$request->homewin;
        $Matches->equal=$request->equal;
        $Matches->way_rate=$request->waywin;
        $Matches->time_start=$request->time_start;
        $Matches->time_end=$request->time_end;
        $Matches->time_bets=$request->time_bets;
        $Matches->date=$request->date;
        if($request->status !=null){
        $Matches->public=$request->status;
        }else{$Matches->public=0;}
        $Matches->save();
        dd('You are successfully added all fields.');
    }
}
