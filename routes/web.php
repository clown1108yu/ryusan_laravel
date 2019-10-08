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

// ==============
//  ユーザー許可
// ==============
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/register_dentist', 'Auth\RegisterController@showRegistrationFormDentist')->name('register_dentist');
Route::get('/register_dental_engineer', 'Auth\RegisterController@showRegistrationFormDentalEngineer')->name('register_dental_engineer');
Route::get('/home', 'HomeController@index')->name('home');

// ==============
// 歯科医のみ許可
// ==============
Route::name('dentist.')->middleware('auth', 'can:dentist')->group(function () {
	Route::resource('dentist/order', 'OrderController');
	Route::get('dentist/companypreview', 'CompanyController@preview')->name('companypreview');
	Route::resource('dentist/company', 'CompanyController');
	Route::resource('dentist/patient', 'PatientController');
    Route::post('dentist/doctor', 'DoctorController@store');
	Route::post('patient', 'DoctorController@store');
	Route::resource('dentist/doctor', 'DoctorController');
	Route::resource('dentist/user', 'UserController');
  // add routing here ...
});

// ==============
// 技工士のみ許可
// ==============
Route::name('dental-engineer.')->middleware('auth', 'can:dental-engineer')->group(function () {
	Route::resource('dental-engineer/order', 'OrderController');
	Route::resource('dental-engineer/company', 'CompanyController');
	Route::resource('dental-engineer/patient', 'PatientController');
	// Route::resource('dental-engineer/doctor', 'DoctorController');
	Route::resource('dental-engineer/user', 'UserController');
    // add routing here ...
});
