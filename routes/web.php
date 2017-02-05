<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/



/*-----------------------------------Menu Guest--------------------*/
//  Home
Route::get('/','IndexController@index');

//  About
Route::get('about','IndexController@about');

//  Contact
Route::get('contact','IndexController@contact');

/*------------------------------------accounts controller--------------------*/

//  Accounts
Route::get('accounts','AccountsController@accounts');

// Add User
Route::get('addUser','AccountsController@addUser');


/*------------------------------------bookings controller--------------------*/
//  Bookings

    Route::get('bookings', 'BookingsController@bookings');

//  1. display for search
    Route::get('searchB', 'BookingsController@displayFormB');

// //  2. send cust_id for the report -> click button
    Route::post('reportB/customer', 'BookingsController@searchFormB');

// Car damage form through Bookings
    Route::get('/damage/{booking}', 'BookingsController@setDamageForm');

// Car damage SET through Bookings
    Route::post('damage', 'BookingsController@setDamage');


/*------------------------------------bookings archived--------------------*/
//  Display Archived
Route::get('archived','BookingsController@archived');

//display  form to archive bookings------1----
Route::get('/archive','BookingsController@displayArchForm');
//--click on submit button action 
Route::post('/archive','BookingsController@archiveForm');
//SUBMIT display bookings about to archive-----2----contirmation
//Route::get('/archive/delete','BookingsController@toArchive');


/*------------------------------------cars controller--------------------*/
//  CarsController
Route::get('cars','CarsController@cars');

//display add form
Route::get('/car','CarsController@addCarForm');

//SUBMIT AddCar
Route::post('/car','CarsController@addCar');

//AddDamage
Route::get('addDamage','CarsController@addDamage');

//  Damaged all
Route::get('damaged','CarsController@damaged');

//  Damaged form by cust
Route::get('searchD','CarsController@displayFormD');

// //   send cust_id for the report -> click button
Route::post('reportD/customer','CarsController@searchFormD');

//display desactivate form 
Route::get('/retired/{car}','CarsController@desactiveForm');

//submit customer desactivation
Route::post('/retired','CarsController@desactivation');  

//display rate edit form 
Route::get('/rate/{car}','CarsController@rateForm');

//submit new rate
Route::post('/rate','CarsController@setRate');   

//  Faulty cars form by rego no
Route::get('searchF','CarsController@displayFormF');

// //   send rego_no for the report -> click button
Route::post('reportF/car','CarsController@searchFormF');



/*------------------------------------customers controller--------------------*/
//  display Customers
Route::get('/customers','CustomerController@customers');

//display add form
Route::get('/customer', 'CustomerController@addCustForm');

//SUBMIT AddCustomer
Route::post('/customer','CustomerController@addCust');

//display edit form
Route::get('/customer/{customer}', 'CustomerController@editCustForm');

//SUBMIT edit Customer
Route::post('/customer/update','CustomerController@updateCust');

//display desactivate form 
Route::get('/inactive/{customer}','CustomerController@desactiveForm');

//submit customer desactivation
Route::post('/inactive','CustomerController@desactivation');


/*------------------------------------Auth-------------------*/
Auth::routes();

Route::get('/home', 'HomeController@index');






