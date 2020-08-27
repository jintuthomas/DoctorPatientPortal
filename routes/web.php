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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/Login',function() {
	return view('Login');
  
});
Route::get('/addDoctor1',function() {
	return view('Admin.addDoctor1');
  
});
Route::get('/LeaveView',function() {
	return view('Admin.LeaveView');
  
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
Route::get('/PatientHome',function() {
	return view('PatientHome');
  
});
Route::get('/PharmacyHome',function() {
	return view('PharmacyHome');
  
});
Route::get('/DoctorHome',function() {
	return view('DoctorHome');
  
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
Route::get('/ApplyLeave',function() {
	return view('Doctor.ApplyLeave');
  
});
Route::get('/profileView',function() {
	return view('Patient.profileView');
  
});
Route::get('/addnewitems',function() {
	return view('Patient.addnewitems');
  
});

Route::get('/detail',function() {
	return view('Doctor.Detail');
  
});
Route::get('/AddMedicine',function() {
	return view('Pharmacy.AddMedicine');
  
});
Route::get('/AddCategory',function() {
	return view('Pharmacy.AddCategory');
  
});
Route::get('/addBrand',function() {
	return view('Pharmacy.addBrand');
  
});
Route::get('/r2',function() {
	return view('Pharmacy.r2');
  
});
Route::get('/viewRequest',function() {
	return view('Pharmacy.viewRequest');
  
});
Route::get('/Product',function() {
	return view('Admin.ProductView');
  
});
Route::get('/date',function() {
	return view('Admin.date');
  
});
Route::get('/onlinePayment',function() {
	return view('Patient.payment');
  
});
Route::get('/viewCart',function() {
	return view('Patient.viewCart');
  
});
Route::get('/sendRequest',function() {
	return view('Admin.sendRequest');
  
});
Route::get('/productRequest',function() {
	return view('Patient.productRequest');
  
});
Route::get('/transactionComplete',function() {
	return view('Patient.transactionComplete');
  
});
Route::get('/addTreatment',function() {
	return view('Doctor.addTreatment');
  
});
Route::get('/viewMedicalHistory',function() {
	return view('Doctor.viewMedicalHistory');
  
});
Route::get('/viewOrders',function() {
	return view('Pharmacy.viewOrders');
  
});
Route::get('/itemView',function() {
	return view('Pharmacy.itemView');
  
});
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/Loginme', 'LoginController@Login')->name('home');
Route::post('/Registerme', 'RegisterController@Register')->name('home');
//Route::resource('/Registerme', 'RegisterController');
Route::post('/Registerme', 'RegisterController@store')->name('home');
Route::post('/addDoctor', 'TblDoctorController@addDoctor1')->name('home');
Route::post('/addDoctor1', 'TblDoctorController@store')->name('home');


Route::get('ViewDoctor','TblDoctorController@index');
Route::get('ViewPatient','RegisterController@index');
Route::get('delete/{id}','TblDoctorController@destroy'); 
Route::get('/logout', '\App\Http\Controllers\LoginController@logout');
//Route::get('/DoctorProfile','TblDoctorController@profile');
//Route::get('/editProfile','TblDoctorController@edit');
//Route::get('addDoctor1','SpecilizationController@index')->name('home');
Route::get('AdminHome','SpecilizationController@store')->name('home');

Route::post('/AddCategory','TblCategoryController@insert');
Route::post('/addBrand','TblBrandController@insert');
//Route::post('/addMedicine','TblPharmacyController@insert');
Route::any('/addMedicine','TblPharmacyController@store');

Route::post('/send','TblPharmacyController@send');

Route::post('/LeaveReason','DateController@insert');
Route::get('delete1/{id}','TblPharmacyController@request'); 
//Route::post('/ApplyLeave','TblLeaveController@insert');
Route::get('/search','RegisterController@reach');
//Route::get('/search','RegisterController@search');


Route::post('/LeaveApply',array('as'=>'store','uses'=>'TblLeaveController@store'));

Route::get('/ProductView','TblPharmacyController@show');
Route::get('/ProductDetails','TblPharmacyController@detail');
Route::get('/ProductDetails/{mid}',    [
    'as' => 'imgview', 'uses' => 'TblPharmacyController@detail'
]);




Route::get('/profile/{id}',[
'as'=>'logs','uses'=>'TblDoctorController@profile']);

Route::get('/profile_edit/{id}',[
'as'=>'profile_edit','uses'=>'TblDoctorController@edit']);
Route::post('/profileUpdate','TblDoctorController@profile_update');
Route::post('/Detail','TblDoctorController@update');
Route::post('/addSpecializaion','SpecilizationController@insert');

Route::any('/','DistrictController@index');
Route::post('show_city','DistrictController@cityajax');

//Route::get('/logout', 'LoginController@getLogout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ListDoctor', 'TblDoctorController@show')->name('home');

//Route::post('/viewCart','TblcartController@addcart');
//Route::post('/viewCart','TblcartController@index');
Route::get('delete2/{cart_id}','TblcartController@cart'); 
Route::get('/search','TblDoctorController@search');
Route::get('/DoctorDetail','TblDoctorController@doctor');
Route::get('/DoctorDetail/{id}',    [
    'as' => 'doctor', 'uses' => 'TblDoctorController@doctor'
]);

Route::any('/addMedicalHistory','TblDoctorController@medical');
Route::post('/medicalhistory','TblDoctorController@medicalhistory');


//Appoinment

//Route::post('/Appoinment','TblAppoinmentController@appoinmnet');

Route::get('/notAvail','TblAppoinmentController@avail');
Route::any('/ConfirmAppointment','TblAppoinmentController@Confirm');
Route::post('/Appoinment','TblAppoinmentController@create');
//payment
Route::post('/Payment','TblAppoinmentController@Payment');



//
Route::get('approve/{l_id}','TblLeaveController@approve'); 
Route::get('reject/{l_id}','TblLeaveController@reject'); 
Route::get('/viewSpecialization','SpecilizationController@create'); 

Route::get('/AppoitnmentConfirm',function() {
	return view('Patient.AppoitnmentConfirm');
  
});

//product request

Route::any('/Request','TblMedicineRequestController@store');
Route::get('/viewMedicineRequest','TblPharmacyController@medicineRequest');
Route::get('ok/{mr_id}','TblMedicineRequestController@ok'); 
Route::get('remove/{mr_id}','TblMedicineRequestController@remove');
Route::get('move/{mr_id}','TblMedicineRequestController@move');
//Search product for Request 
Route::any('/SearchProduct','TblMedicineRequestController@SearchProduct');
Route::any('/SearchRequest','TblMedicineRequestController@create');
Route::any('/RequestStatus','TblMedicineRequestController@RequestStatus');

//Leave Action
Route::any('/LeaveCancel','TblLeaveController@cancel');
Route::get('cancelLeave/{l_id}','TblLeaveController@cancelLeave'); 
Route::any('/LeaveStatus','TblLeaveController@status');
//Appointment view
Route::any('/viewAppointment','TblAppoinmentController@viewAppoin');
//cart
Route::post('/viewCart','TblcartController@store');
Route::any('/CheckOut','TblcartController@pay');
Route::post('/Check','TblcartController@create');
Route::any('/payOnline','TblcartController@payOnline');
//viewAppointment
//Route::get('/Prescription','TblAppoinmentController@Prescription');
Route::get('Prescription/{a_id}','TblAppoinmentController@Prescription');
Route::any('/add','TblTreatmentController@add');
///
Route::get('sremove/{sid}','SpecilizationController@sremove');







