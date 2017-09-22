<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\bets;
class users extends Model
{
    protected $table = 'users';
    
    public function matches(){
    	return $this->hasMany('App\bets','id_user');
    }
}
