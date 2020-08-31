<?php

use Illuminate\Support\Facades\Route;

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

// Route::middleware('loggedin')->group(function() {
//     Route::get('login', 'AuthController@loginView')->name('login-view');
//     Route::post('login', 'AuthController@login')->name('login');
//     Route::get('register', 'AuthController@registerView')->name('register-view');
//     Route::post('register', 'AuthController@register')->name('register');

//     Route::get('business_register', 'AuthController@business_registerView')->name('business_register-view');

    

//     Route::post('business_register', 'AuthController@business_register')->name('business_register');

//     Route::get('step2payment', 'AuthController@step2payment_registerView')->name('business_register-view');

// });

// Route::middleware('auth')->group(function() {
//     Route::get('/', 'PageController@loadPage')->name('dashboard');
//     Route::get('logout', 'AuthController@logout')->name('logout');
//     Route::get('page/{layout}/{pageName}', 'PageController@loadPage')->name('page');
// });

Auth::routes();

Route::get('/home', 'BusinessController@enterNumber')->name('enter-number');

Route::get('/', 'BusinessController@enterNumber')->name('enter-number');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);

    

    
});


Route::get('/add-business', 'BusinessController@addBusiness')->name('add-business');

Route::post('/store-business', 'BusinessController@storeBusiness')->name('store-business');


Route::get('/export/all_visits','BusinessController@createPDF');



Route::get('/business-dashboard', 'BusinessController@businessDashboard')->name('business-dashboard');


Route::get('/add-visit/{id}', 'BusinessController@addVisit');

Route::get('/get-visits/{id}', 'BusinessController@getVisitsByBusiness');

Route::get('/enter-number', 'BusinessController@enterNumber')->name('enter-number');

Route::get('/verify-number', 'BusinessController@verifyNumber');


Route::get('/simple-search', 'BusinessController@simple')->name('simple_search');


Route::get('/burl', 'BusinessController@business_url')->name('business_url');



Route::get('/thank-you', 'BusinessController@thanks')->name('thank-you');

Route::get('/logout', 'BusinessController@logout')->name('logout');

Route::get('/autologin', 'BusinessController@autologin')->name('autologin');


Route::get('search', 'BusinessController@search')->name('search');

Route::get('search_today', 'BusinessController@search_today')->name('search_today');

Route::get('search_this_week', 'BusinessController@search_this_week')->name('search_this_week');


Route::get('search_this_month', 'BusinessController@search_this_month')->name('search_this_month');

// Route::get('autocomplete', 'BusinessController@autocomplete')->name('autocomplete');



// Route::get('/logout', function(){
//     Session::flush();
//     Auth::logout();
//     return Redirect::to("/enter-number");
// });