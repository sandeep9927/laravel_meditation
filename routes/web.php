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
Route::get('/','BannerController@homebanner');

Auth::routes();

Route::get('/contact','ContactController@show');
Route::post('/contact/send','ContactController@mail');

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/how-it-works', function () {
    return view('how_it_works');
});

Route::get('/technique', function () {
    return view('technique.technique_list');
});

Route::get('/learn/homepage','LearnController@index');

Route::get('/faq','FaqMgmtController@homefaq');
Route::get('/faq/{id}','FaqMgmtController@homefaq');
//<--------------------DepartmentController---------->
Route::get('/department', 'DepartmentController@index');
Route::post('/department', 'DepartmentController@store');
Route::get('/department/create','DepartmentController@create');
Route::get('/department/{department}/edit','DepartmentController@edit');
Route::get('/department/{department}/delete','DepartmentController@destroy');
Route::post('/department/{department}','DepartmentController@update');
Route::get('/department/search','DepartmentController@search');

//<-----------------------FaqController------------------->
Route::get('create_faq','FaqMgmtController@index');
Route::post('store_faq','FaqMgmtController@create');
Route::get('show_faq','FaqMgmtController@show');
Route::get('faq/{id}/edit','FaqMgmtController@edit');
Route::post('faq/{id}/update','FaqMgmtController@update');
Route::get('faq/{id}/delete','FaqMgmtController@destroy');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('verify/{email}/{token}','Auth\RegisterController@verifyUser')->name('verify');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

//<------------------UserProfile----------------->
Route::get('profile','UserProfileController@show');
Route::post('profile/{id}/update','UserProfileController@update');
Route::get('update-user-profile','UserProfileController@userprofile');


// <----------------UserController----------------->



//<-------------------AdminController-------------------->

Route::get('admin/login','AdminController@admin');
Route::post('admin/dashboard','AdminController@adminlogin');
Route::get('writers','AdminController@index');
Route::get('writers/{id}/edit','AdminController@edit');
Route::get('update-profile','AdminController@profile');
Route::post('writers/{id}/update','AdminController@update');
Route::get('/search','AdminController@search');


//<----------------------StoryController----------------->
Route::get('stories','StoryController@index');
Route::get('stories/create','StoryController@create');
Route::post('stories','StoryController@store');
Route::get('show_story','StoryController@show');
Route::get('stories/{id}/edit','StoryController@edit');
Route::post('stories/{id}/update','StoryController@update');
Route::delete('stories/{id}/','StoryController@destroy');

// <--------------------FaqMgmtController---------------------->

Route::get('faqs','FaqMgmtController@index')->name('faqs.index');
Route::get('faqs/create','FaqMgmtController@create');
Route::post('faqs','FaqMgmtController@store')->name('faqs.create');
Route::get('faqs/{faq}','FaqMgmtController@show');
Route::get('faqs/{id}/edit','FaqMgmtController@edit');
Route::post('faqs/{id}/update','FaqMgmtController@update');
Route::get('faq/{id}/delete','FaqMgmtController@destroy');


//<---------------------FqaCatMgmtController--------------------->

Route::resource('faqcats', 'FaqCatMgmtController');

//<----------------------BlogController------------------------->
Route::resource('blogs', 'BlogController');

//<----------------------TechniqueController------------------------->
Route::resource('techniques', 'TechniqueController');
Route::get('/search','TechniqueController@search');
//<----------------------BannerController------------------------->
Route::resource('banners', 'BannerController');
Route::get('banners/search', 'BannerController@search');

//<----------------------ParentCategoryController------------------->
Route::resource('parents', 'ParentCategoryController');

//<----------------------ChildCategoryController------------------->
Route::resource('childs', 'ChildCategoryController');

//<----------------------NotificationController------------------->
Route::get('notification', 'NotificationController@toMail');

//<----------------------home/technique------------------->
Route::get('home/technique','TechniqueController@technique');
Route::get('technique/{id}','TechniqueController@show');
Route::post('technique/{id}','TechniqueController@rate');



//<--------------------PaymentController------------------->
Route::get('payment-razorpay', 'PaymentController@create')->name('paywithrazorpay');
Route::post('payment', 'PaymentController@payment')->name('payment');



Route::group(['middleware'=>'can:isAdmin'], function () {
    Route::get('cms_user','UserController@cms_user');
    Route::get('user/{id}/edit','UserProfileController@edit');
//<------------------UserController-------------------------

    Route::get('users/create','UserController@create');
    Route::post('users','UserController@store');
    Route::get('site_user','UserController@site_user');
    Route::get('cms/{id}/edit','UserController@edit');
    Route::get('/user/{id}/delete','UserController@destroy');
    
    Route::get('update-my-profile','UserController@updateprofile');
    Route::post('site_user/{id}','UserController@update');
    Route::get('site_user/{id}/delete','UserController@destroy');

    Route::get('writers/{id}/delete','AdminController@destroy');
});


//<------------------------------chnagePassword-------------------->$this
Route::get('change/password', 'AdminController@changePassView')->middleware('auth');
Route::post('change/password', 'AdminController@changePassword')->name('changePassword');

Route::get('changeStatus', 'UserController@ChangeUserStatus');
Route::post('/comment/{post}','CommentController@store')->name('comment.store');