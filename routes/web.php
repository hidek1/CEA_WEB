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

// more than student
Route::group(['middleware' => ['auth', 'can:camp-student']], function () {
  Route::get('/index_community_members', 'CommunityController@index');
  Route::get('/index_survey', 'SurveyController@index');
  Route::post('survey/complete', 'SurveyController@complete');
  Route::get('index_experience/{page}', 'ExperienceController@index')->name('experience');
  Route::post('experience/confirm', 'ExperienceController@confirm');
  Route::post('experience/complete', 'ExperienceController@complete');
});


// more than staff
Route::group(['middleware' => ['auth', 'can:staff']], function () {
  // for dashboard page url
  Route::get('/dashboard', 'DashboardController@index');
  Route::get('/dashboard_user_list/{type}', 'DashboardController@userlist')->name('dashboard_user');
  Route::get('/dashboard_angecy_list', 'DashboardController@agencylist');
  Route::get('/dashboard_contact_list', 'DashboardController@contactlist');
  Route::get('/dashboard_survey_list', 'DashboardController@surveylist');
  Route::get('/dashboard_blog_list', 'DashboardController@bloglist');
  Route::get('/dashboard_experience_list/{type}', 'DashboardController@experiencelist')->name('dashboard_experience');

  Route::get('user/{id}/edit', 'UserEditController@edit');
  Route::patch('user/{id}', 'UserEditController@update');
  Route::delete('user/{id}', 'UserEditController@destroy');

  Route::get('contact/{id}/edit', 'ContactsController@edit');
  Route::patch('contact/{id}', 'ContactsController@update');
  Route::delete('contact/{id}', 'ContactsController@destroy');

  Route::get('registration_agency/{id}/edit', 'RegiAgencyController@edit');
  Route::patch('registration_agency/{id}', 'RegiAgencyController@update');
  Route::delete('registration_agency/{id}', 'RegiAgencyController@destroy');

  Route::get('survey/{id}/edit', 'SurveyController@edit');
  Route::patch('survey/{id}', 'SurveyController@update');
  Route::delete('survey/{id}', 'SurveyController@destroy');

  Route::get('experience/{id}/edit', 'ExperienceController@edit');
  Route::patch('experience/{id}', 'ExperienceController@update');
  Route::delete('experience/{id}', 'ExperienceController@destroy');
  Route::get('experience/{id}/show', 'ExperienceController@show');

  Route::get('/home', 'HomeController@index')->name('home');

  Route::get('/official-dashboard', function () {
      return view('official.dashboard');
  });
    // upload photo
  Route::get('file/{type}','PictureController@showUploadFOrm')->name('upload.file');
  Route::post('file/{type}','PictureController@storeFile');

  // // upload eassay photo
  // Route::get('eassayphoto','eassayController@showUploadFOrm')->name('essay.file');
  // Route::post('eassayphoto','eassayController@storeFile');

  // upload speech
  Route::get('speech/{type}','SpeechController@showUploadFOrm')->name('speech.file');
  Route::post('speech/{type}','SpeechController@storeFile');

  // upload pdf
  Route::get('pdf/{type}','PDFController@showUploadFOrm')->name('pdf.file');
  Route::post('pdf/{type}','PDFController@storeFile');
  // adding blog and update delete
  Route::resource('blog', 'blogController');
});



// only developer
Route::group(['middleware' => ['auth', 'can:admin']], function () {

});

Route::get('/', function () {
    return view('index');
});

Route::get('/index_home', 'FaceController@index');
Route::get('/index_camp_description', function () {
    return view('index_camp_description');
});
Route::get('/index_jr_camp', function () {
    return view('index_jr_camp');
});
Route::get('/index_family_camp', function () {
    return view('index_family_camp');
});

Route::get('/index_contact', 'ContactsController@index');
Route::post('contact/confirm', 'ContactsController@confirm');
Route::post('contact/complete', 'ContactsController@complete');

Route::get('/index_registration_agency', 'RegiAgencyController@index');
Route::post('registration_agency/confirm', 'RegiAgencyController@confirm');
Route::post('registration_agency/complete', 'RegiAgencyController@complete');

Route::get('/index_movie', function () {
    return view('index_movie');
});

// this route for login page and log out
Route::get('/main','MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');

// display blog
Route::get('allblog/{id}', 'blogController@listallblog');

//change language
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['middleware' => ['auth', 'can:official-student']], function () {
  // for official website
  Route::get('/official-home', 'OfficialController@index');
  // Route::get('/official-experience', 'ExperienceController@index');
  Route::get('/official-speech', 'SpeechController@showVideos');

  //mail request sending 
  Route::get('contactmail', 'mailController@getContact');
  Route::post('contactmail', 'mailController@postContact');
  Route::get('contactmail/{id}/edit', 'mailController@edit');

  //mail absent request form

  Route::get('absentform', 'absentController@getForm');
  Route::post('absentform', 'absentController@postForm');

  // mail travel request form
  Route::get('travelform', 'travelController@getTravel');
  Route::post('travelform', 'travelController@postTravel');

  // mail academic request form

  Route::get('academicform', 'academicController@getAcademic');
  Route::post('academicform', 'academicController@postAcademic');

  // rout for cea dashboard
  Route::get('officialdashboard', 'OfficialController@dashboard');
});