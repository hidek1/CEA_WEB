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
// Route::group(['prefix' => 'admin'], function() {
//   Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
//   Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login');
//   Route::get('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
  
//   Route::get('register', 'Admin\Auth\RegisterController@showRegisterForm')->name('admin.register');
//   Route::post('register', 'Admin\Auth\RegisterController@register')->name('admin.register');
 
//   Route::get('home', 'Admin\HomeController@index')->name('admin.home');
// });


// more than student
Route::group(['middleware' => ['auth', 'can:student-higher']], function () {
});
// more than staff
Route::group(['middleware' => ['auth', 'can:staff-higher']], function () {
  // for dashboard page url
  Route::get('/dashboard', 'DashboardController@index');
  Route::get('/dashboard_user_list', 'DashboardController@userlist');
  Route::get('/dashboard_angecy_list', 'DashboardController@agencylist');
  Route::get('/dashboard_contact_list', 'DashboardController@contactlist');
  Route::get('/dashboard_survey_list', 'DashboardController@surveylist');
});
// only developer
Route::group(['middleware' => ['auth', 'can:system-only']], function () {

});

Route::get('user/{id}/edit', 'UserEditController@edit');
Route::patch('user/{id}', 'UserEditController@update');
Route::delete('user/{id}', 'UserEditController@destroy');

Route::get('/', function () {
    return view('index');
});
Route::get('/index_home', function () {
	$blogs = DB::table('blogs')
			->orderBy('created_at', 'DESC')
			->take(5)
			->get();
    return view('index_home')->with('blogs', $blogs);
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
Route::get('/index_community_members', 'CommunityController@index');

Route::get('/index_contact', 'ContactsController@index');
Route::post('contact/confirm', 'ContactsController@confirm');
Route::post('contact/complete', 'ContactsController@complete');
// Route::get('contact/list', 'ContactsController@list');
Route::get('contact/{id}/edit', 'ContactsController@edit');
Route::patch('contact/{id}', 'ContactsController@update');
Route::delete('contact/{id}', 'ContactsController@destroy');


Route::get('/index_registration_agency', 'RegiAgencyController@index');
Route::post('registration_agency/confirm', 'RegiAgencyController@confirm');
Route::post('registration_agency/complete', 'RegiAgencyController@complete');
// Route::get('registration_agency/list', 'RegiAgencyController@list');
Route::get('registration_agency/{id}/edit', 'RegiAgencyController@edit');
Route::patch('registration_agency/{id}', 'RegiAgencyController@update');
Route::delete('registration_agency/{id}', 'RegiAgencyController@destroy');

Route::get('/index_survey', 'SurveyController@index');
Route::post('survey/complete', 'SurveyController@complete');
// Route::get('survey/list', 'SurveyController@list');
Route::get('survey/{id}/edit', 'SurveyController@edit');
Route::patch('survey/{id}', 'SurveyController@update');
Route::delete('survey/{id}', 'SurveyController@destroy');

Route::get('/index_experience', 'ExperienceController@index');
Route::post('experience/complete', 'ExperienceController@complete');
// Route::get('experience/list', 'ExperienceController@list');
Route::get('experience/{id}/edit', 'ExperienceController@edit');
Route::patch('experience/{id}', 'ExperienceController@update');
Route::delete('experience/{id}', 'ExperienceController@destroy');

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

// upload image
Route::get('image-upload',['as'=>'image.upload','uses'=>'ImageUploadController@imageUpload']);
Route::post('image-upload',['as'=>'image.upload.post','uses'=>'ImageUploadController@imageUploadPost']);

// upload photo
Route::get('file','FileController@showUploadFOrm')->name('upload.file');
Route::post('file','FileController@storeFile');

// upload eassay photo
Route::get('eassayphoto','eassayController@showUploadFOrm')->name('essay.file');
Route::post('eassayphoto','eassayController@storeFile');

// for display image
Route::get('/mypicture', 'FileController@innerjoin');

// upload speech
Route::get('speech','SpeechController@showUploadFOrm')->name('speech.file');
Route::post('speech','SpeechController@storeFile');

// adding blog and update delete
/*
Route::get('blog','blogController@showUploadFOrm')->name('blog.file');
Route::post('blog','blogController@storeFile');
Route::get('blog/show', 'blogController@show');
Route::get('/blog/{id}/edit', 'blogController@edit');
Route::post('/blog/{id}', 'blogController@update');
*/
// adding blog and update delete
Route::resource('blog', 'blogController');
// adding route for mystory
Route::resource('mystory','mystoryController');

// display all blogs

Route::get('allblog/{id}', 'blogController@listallblog');