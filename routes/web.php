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
// <---------------User Route----------->
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/contact','ContactController@show');
Route::post('/contact/send','ContactController@mail');

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/working', function () {
    return view('how_it_works');
});

Route::get('/admin_login', function () {
    return view('admin.admin_login');
});

Route::get('/admin', function () {
    return view('admin.create_user');
});

Route::get('/cms_user', function () {
    return view('admin.cms_user');
});

Route::get('/site_user', function () {
    return view('admin.site_user');
});

Route::get('/writer_mgmt', function () {
    return view('admin.writer_mgmt');
});

Route::get('/department', 'DepartmentController@index');
Route::post('/department', 'DepartmentController@store');
Route::get('/department/create','DepartmentController@create');
Route::get('/department/{department}/edit','DepartmentController@edit');
Route::get('/department/{department}/delete','DepartmentController@destroy');
Route::post('/department/{department}','DepartmentController@update');

Route::get('/story_mgmt', function () {
    return view('admin.story_mgmt');
});

Route::get('/faq_mgmt', function () {
    return view('admin.faqs_mgmt');
});

Route::get('/faq_cat_mgmt', function () {
    return view('admin.faq_cat_mgmt');
});

Route::get('/bie_mgmt', function () {
    return view('admin.bie_mgmt');
});
Route::get('/tech_cat_mgmt', function () {
    return view('admin.techniques_cat_mgmt');
});

Route::get('/banner_mgmt', function () {
    return view('admin.banner_mgmt');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('verify/{email}/{token}','Auth\RegisterController@verifyUser')->name('verify');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('profile','UserProfileController@show');
Route::get('user/profile/{id}','UserProfileController@edit');
Route::post('profile/update/{id}','UserProfileController@update');

// <------------Admin Route---------->



Route::get('create_user','UserController@create');
Route::post('store','UserController@store');
Route::get('site_user','UserController@site_user');
Route::get('site_user/{id}/edit','UserController@edit');
Route::post('site_user/{id}','UserController@update');
Route::get('site_user/{id}/delete','UserController@destroy');
Route::get('cms_user','UserController@cms_user');

Route::get('admin','UserController@Admin');
Route::post('dashboard','UserController@AdminLogin');

Route::get('writer_mgmt','AdminController@writer');
Route::get('writer_mgmt/{id}/edit','AdminController@WriterEdit');
Route::post('writer_mgmt/{id}/update','AdminController@WriterUpdate');
Route::get('writer_mgmt/{id}/delete','AdminController@WriterUpdate');

Route::get('create_story','StoryController@index');
Route::post('store','StoryController@create');
Route::get('show_story','StoryController@show');
Route::get('story/{id}/edit','StoryController@edit');
Route::post('story/{id}/update','StoryController@update');

Route::get('create_faq','FaqMgmtController@index');
Route::post('store_faq','FaqMgmtController@create');
Route::get('show_faq','FaqMgmtController@show');
Route::get('faq/{id}/edit','FaqMgmtController@edit');
Route::post('faq/{id}/update','FaqMgmtController@update');
Route::get('faq/{id}/delete','FaqMgmtController@destroy');