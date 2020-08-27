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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/Login',function() {
	return view('Login');
  
});
Route::get('/addDoctor1',function() {
	return view('Admin.addDoctor1');
  
});
Route::get('/ViewDoctor',function() {
	return view('Admin.ViewDoctor');
  
});
Route::get('/ViewPatient',function() {
	return view('Admin.ViewPatient');
  
});
Route::get('/AdminHome',function() {
	return view('AdminHome');
  
});
Route::get('/addSpecializaion',function() {
	return view('Admin.addSpecializaion');
  
});
Route::get('/DoctorProfile',function() {
	return view('Doctor.DoctorProfile');
  
});
Route::get('/editProfile',function() {
	return view('Doctor.editProfile');
  
});

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/Loginme', 'LoginController@Login')->name('home');
Route::post('/Registerme', 'RegisterController@Register')->name('home');
//Route::resource('/Registerme', 'RegisterController');
Route::post('/Registerme', 'RegisterController@store')->name('home');
Route::post('/addDoctor', 'TblDoctorController@addDoctor1')->name('home');
Route::post('/addDoctor', 'TblDoctorController@store')->name('home');
Route::get('ViewDoctor','TblDoctorController@index');
Route::get('ViewPatient','RegisterController@index');
Route::get('delete/{id}','TblDoctorController@destroy'); 
Route::get('/logout', '\App\Http\Controllers\LoginController@logout');
Route::get('/DoctorProfile','TblDoctorController@profile');
Route::get('/editProfile','TblDoctorController@edit');



Route::any('/','DistrictController@index');
Route::post('show_city','DistrictController@cityajax');

//Route::get('/logout', 'LoginController@getLogout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


