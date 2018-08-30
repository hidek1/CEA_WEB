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
Auth::routes();

Route::get('/', function () {
    return view('index');
});
Route::get('/index_home', function () {
    return view('index_home');
});
Route::get('/index_camp_description', function () {
    return view('index_camp_description');
});
Route::get('/index_jr_camp', function () {
    return view('index_jr_camp');
});
Route::get('/index_family_camp', function () {
    return view('index_family_camp');
});
Route::get('/index_community_members', function () {
    return view('index_community_members');
});
/*
Route::get('/index_contact', 'ContactsController@index');
Route::post('contact/confirm', 'ContactsController@confirm');
Route::post('contact/complete', 'ContactsController@complete');
*/

Route::get('/index_registration_agency', 'RegiAgencyController@index');
Route::post('registration_agency/confirm', 'RegiAgencyController@confirm');
Route::post('registration_agency/complete', 'RegiAgencyController@complete');
Route::get('registration_agency/list', 'RegiAgencyController@list');
Route::get('registration_agency/{id}/edit', 'RegiAgencyController@edit');
Route::patch('registration_agency/{id}', 'RegiAgencyController@update');
Route::delete('registration_agency/{id}', 'RegiAgencyController@destroy');

Route::get('/password_forget', function () {
    return view('password_forget');
});
Route::get('/index_movie', function () {
    return view('index_movie');
});

// this route for login page and log out
Route::get('/main','MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');


// display all contacts
Route::get('/allcontacts', 'ContactsController@listallcontact');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/contact', 'contactController');
Route::get('/dashboard', 'dashboardController@index');