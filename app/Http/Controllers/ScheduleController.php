<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matches;
use App\bets;
use App\users;
use Auth;
use App\User;
use Validator;
class ScheduleController extends Controller
{
    public function show(){
    	$matches=matches::where('date','>' ,date('Y-m-d H:i:s'))->where('public',1)->get();
    	return view('user.schedule')->with('matches',$matches);
    }
    public function bets($id_match){
    	$matche=matches::find($id_match);
    	return view('user.bets')->with('matche',$matche);
    }
    public function postbets(Request $request,$id_match){   
      if(Auth::check()){
            $user = users::find(Auth::user()->id);
        }
        $remain_money=$user->remain_money;
    	$validate=Validator::make($request->all(),[
                'bets_money'=>'required|numeric|min:1|max:'.$remain_money,
                'bets'=>'required'
            ],[
            ]);
        if($validate->fails()){
            return redirect()->route('betsform',$id_match)->withErrors($validate)->withInput();
        }else{
        $a=$user->remain_money;
        $user->remain_money=$a- $request->bets_money;
        $user->save();
        $bet=new bets;
        $bet->id_matche=$id_match;
        $bet->id_user=$user->id;
        $bet->bet_money=$request->bets_money;
        $b=$request->bets;
        if($request->bets==1){
            $bet->betting_team=1;

        }elseif($request->bets==0){
            $bet->betting_team=0;
        }
        else{$bet->betting_team=(-1);}
        $bet->save();
        return redirect('/schedule');
        }
    }
}
