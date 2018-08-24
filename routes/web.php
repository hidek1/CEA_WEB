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
    return view('index');
});
Route::get('/index_ja', function () {
    return view('index_ja');
});
Route::get('/index_ja_camp_description', function () {
    return view('index_ja_camp_description');
});
Route::get('/index_ja_jr_camp', function () {
    return view('index_ja_jr_camp');
});