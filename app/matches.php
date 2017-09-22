<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matches extends Model
{
     protected $table = 'matches';
     protected $primaryKey='id_match';
     public function bets(){
     	return $this->hasMany('App\bets','id_matche');
     }
}
