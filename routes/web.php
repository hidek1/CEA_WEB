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

Route::get('/index_contact', 'ContactsController@index');
Route::post('contact/confirm', 'ContactsController@confirm');
Route::post('contact/complete', 'ContactsController@complete');

Route::get('/index_registration_agency', function () {
    return view('index_registration_agency');
});
Route::get('/password_forget', function () {
    return view('password_forget');
});
Route::get('/index_movie', function () {
    return view('index_movie');
});


Route::get('/main','MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');
Route::get('/home', 'HomeController@index')->name('home');
