<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
 Route::group(['middleware'=>'admin'],function(){
	Route::get('/admin/addmatch','AddmatchController@show')->name('add_match');
	Route::post('/admin/addmatch','AddmatchController@postvalidation');
	Route::get('/admin/manageuser','ManageuserController@show');
	Route::get('/admin/managematch','ManagematchController@show');
	Route::get('admin/managematch/detail','Managematch_DetailController@show');
	Route::get('/admin/managematch/delete/{id_match}','ManagematchController@delete');
	Route::get('/admin/managematch/detail/{id_match}','ManagematchController@detail');
	Route::get('/admin/managematch/{id_match}/editscore','ManagematchController@editscore');
	Route::post('/admin/managematch/{id_match}/editscore','ManagematchController@posteditscore')->name('editscore');
 });





// Route::get('/admin/manageuser/{id}/editlevel','ManageuserController@editlevel');
 Route::group(['middleware'=>'user'],function(){
	Route::get('/schedule/bets/{id_match}','ScheduleController@bets')->name('betsform');
	Route::post('/schedule/bets/{id_match}','ScheduleController@postbets');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/review','ReviewController@show');
	Route::get('/schedule','ScheduleController@show');
	Route::get('/playing','PlayingController@show');
	Route::get('/user/history','UserController@history');
});
// Route::get('/logout','UserController@logout');
// Route::post('/store', 'RegisterController@store');
Route::get('image-upload','ImageController@imageUpload');
Route::post('image-upload','ImageController@imageUploadPost');
