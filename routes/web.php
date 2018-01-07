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

Auth::routes();


// Social Auth
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/home', 'HomeController@index');
});

Route::resource('tasks','TaskController');
Route::get('tasks', 'TaskController@index')->name('overview');

Route::resource('schedules','ScheduleController');
Route::put('schedules','ScheduleController@update');

Route::get('footerpages/about','FooterController@about')->name('footerpages.about');
Route::get('footerpages/contact','FooterController@contact')->name('footerpages.contact');
Route::get('footerpages/privacy','FooterController@privacy')->name('footerpages.privacy');

Route::resource('abbs','AbbController');
Route::get('abbs', 'AbbControler@index')->name('myaccount');

//Da home ikke kunne findes som navn flyttede jeg linien herned og så virkede name pludselig. Før stod den på linie 19.
Route::get('/home', 'HomeController@index')->name('home');