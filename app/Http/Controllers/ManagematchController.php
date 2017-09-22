<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matches;
use Validator;
use App\users;
use App\User;
use App\bets;
class ManagematchController extends Controller
{
	
    public function show(){
    	$matchess=matches::all();
    	return view('admin.admin_managematch')->with('matches',$matchess);
    }
    public function delete($id_match){
    	$match=matches::find($id_match);
    	$match->delete();
    	return redirect('/admin/managematch');
    }
    public function detail($id_match){
        // $this->validate($request,['status'=>'required'],[]);
    	$match=matches::find($id_match);
    	return view('admin/admin_managematch_detail')->with('match',$match);
        // return "Hello";
    }
    public function editscore($id_match){
        $match=matches::find($id_match);
       return view('admin/admin_managematch_editscore')->with('match',$match);
        //return 'controll';
    }
    public function posteditscore(Request $request,$id_match){
       
        $validate = Validator::make($request->all(),[

            'home'=>'required|min:2|max:30|different:way',
            'way'=>'required|min:2|max:30|different:home',
            'time_start'=>'required',
            'date'=>'required|after'.date('Y-m-d'),
            'time_end'=>'required',
            'time_bets'=>'required|before:time_start',
            'homewin'=>'required',
            'equal'=>'required',
            'waywin'=>'required',
            'home_score'=>'',
            'way_score'=>'',
            ],[

            ]);
            
            $Matches=matches::find($id_match);
            $Matches->home_goal=$request->home_goal;
            $Matches->way_goal=$request->way_goal; 
            $Matches->save();
            if($request->home_goal>$request->way_goal){
                $a=1;
            }elseif($request->home_goal<$request->way_goal){$a=-1;}
                else{$a=0;}
            foreach($Matches->bets as $bet){
                if($bet->betting_team==$a){
                    $bet->result=1;
                    if($bet->betting_team==1){
                        $bet->collect_lost=$bet->bet_money *$Matches->home_rate;
                        $bet->user->remain_money= $bet->user->remain_money+$bet->collect_lost;
                    } elseif($bet->betting_team==0){
                        $bet->collect_lost=$bet->bet_money * $Matches->equal;
                        
                        $bet->user->remain_money= $bet->user->remain_money+$bet->collect_lost;
                    }else{
                        $bet->collect_lost=$bet->bet_money * $Matches->way_rate;
                         $bet->user->remain_money= $bet->user->remain_money+$bet->collect_lost;

                    }
                }else{$bet->result=0;
                    $bet->collect_lost=- $bet->bet_money;
                }
                $bet->save();
                $bet->user->save();
            }

            
            return redirect('admin/managematch')->with('messenge','Edit Success!');


    
    }
}
