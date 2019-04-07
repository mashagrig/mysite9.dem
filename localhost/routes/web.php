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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();
//--------- menu -----------------
Route::get('/register', 'HomeController@index')->name('register');
Route::get('/logout', 'HomeController@index')->name('logout');
Route::get('/login', 'HomeController@index')->name('login');
Route::get('/privacy', 'HomeController@index')->name('privacy');
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/content', 'HomeController@index')->name('content');
//--------- menu -----------------

//--------- menu -----------------
Route::get('/home', 'HomeController@index')->name('home');
//--------- about -----------------
Route::get('/about', 'HomeController@index')->name('about');
Route::get('/photo', 'HomeController@index')->name('photo');
Route::get('/actions', 'HomeController@index')->name('actions');
Route::get('/news', 'HomeController@index')->name('news');
Route::get('/partners', 'HomeController@index')->name('partners');
Route::get('/comments', 'HomeController@index')->name('comments');
//--------- clubs -----------------
Route::get('/clubs', 'HomeController@index')->name('clubs');
Route::get('/clubs_kuskaya', 'HomeController@index')->name('clubs_kuskaya');
Route::get('/clubs_paveletskaya', 'HomeController@index')->name('clubs_paveletskaya');
Route::get('/clubs_tverskaya', 'HomeController@index')->name('clubs_tverskaya');
Route::get('/clubs_kievskaya', 'HomeController@index')->name('clubs_kievskaya');
//--------- programs -----------------
Route::get('/morning_programs', 'HomeController@index')->name('morning_programs');
Route::get('/body_building', 'HomeController@index')->name('body_building');
Route::get('/stretching', 'HomeController@index')->name('stretching');
Route::get('/fitness', 'HomeController@index')->name('fitness');
Route::get('/yoga', 'HomeController@index')->name('yoga');
Route::get('/pilates', 'HomeController@index')->name('pilates');
Route::get('/child_programs', 'HomeController@index')->name('child_programs');
//--------- cards -----------------
Route::get('/cards', 'HomeController@index')->name('cards');
Route::get('/cards_year', 'HomeController@index')->name('cards_year');
Route::get('/cards_six_month', 'HomeController@index')->name('cards_six_month');
Route::get('/cards_three_month', 'HomeController@index')->name('cards_three_month');
Route::get('/cards_one_month', 'HomeController@index')->name('cards_one_month');
Route::get('/cards_personal', 'HomeController@index')->name('cards_personal');
//--------- trainers -----------------
Route::get('/trainers', 'HomeController@index')->name('trainers');
//--------- shedule -----------------
Route::get('/shedule', 'HomeController@index')->name('shedule');
//--------- contacts -----------------
Route::get('/contacts', 'HomeController@index')->name('contacts');


/*





  */
