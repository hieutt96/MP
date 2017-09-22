<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bets extends Model
{
    protected $table = 'bets';
    protected $primaryKey='id_bets';
    public function user(){
    	return $this->belongsTo('App\users','id_user');
    }
    public function match(){
    	return $this->belongsTo('App\matches','id_matche');
    }
}
