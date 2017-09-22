<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
class ManageuserController extends Controller
{
	
    public function show(){
    	$users=users::all();
    	return view('admin.admin_manageuser')->with('users',$users);
    }
    public function editlevel($id){
    }
}
