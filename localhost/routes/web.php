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
    return view('welcome');
});

//Auth::routes();
\Illuminate\Support\Facades\Auth::routes(['verify' => true]);
//создаст набор маршрутов

//--------- menu -----------------

//--------- login -----------------
//Route::get('/login', 'HomeController@index')->name('login'); //- такой роут ставить нельзя - будет ошибка!!!
//отображение формы аутентификации
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//POST запрос аутентификации на сайте
Route::post('login', 'Auth\LoginController@login');

Route::get('/login/success', function () {
    return view('auth.loginSuccess');
});

//--------- register -----------------
//Route::get('/register', 'HomeController@index')->name('register');
//страница с формой Laravel регистрации пользователей
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//POST запрос регистрации на сайте
Route::post('register', 'Auth\RegisterController@register');


//--------- logout -----------------
//POST запрос на выход из системы (логаут)
//Route::post('logout', 'Auth\LoginController@logout');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
//Route::get('/logout', 'HomeController@index')->name('logout');

//--------- privacy????? -----------------
Route::get('/privacy', 'HomeController@index')->name('privacy');
//Route::get('/admin', 'HomeController@index')->name('admin');
//Route::get('/content', 'HomeController@index')->name('content');

//--------- sendResetLinkEmail -----------------
////POST запрос для отправки email письма пользователю для сброса пароля
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

//ссылка для сброса пароля (можно размещать в письме)
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');


//POST запрос для сброса старого и установки нового пароля
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
//страница с формой для сброса пароля
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

//--------- password - verification -----------------

//просто страница с формой для верификации пароля - регает ссылку с VerifContr после всех успешно выполненных методов и действий
Route::get('/password/verification', function () {
    return view('auth.verifySuccess');
});


// запрос для верификации - регает ссылку с RegisterContr и из шаблоне регистрации!
Route::get('verification.send', function () {
    return view('auth.verify');
});
Route::get('/password/send', 'Auth\VerificationController@send')->name('verification.send');


// запрос для верификации - регает ссылку с RegisterContr и из шаблоне регистрации!
Route::get('verification.resend', function () {
    return view('auth.verify');
});
Route::get('/password/resend', 'Auth\VerificationController@resend')->name('verification.resend');
//страница с формой для верификации пароля
//Route::get('/password/verification', 'Auth\VerificationController@show');
// запрос для верификации
//Route::get('/password/resend', 'Auth\VerificationController@resend')->name('verification.resend');

//Route::get('/password/resend', 'Auth\VerificationController@verify');


//--------- refresh_captcha -----------------

Route::get('/register/refresh_captcha', 'Auth\RegisterController@refreshCaptcha')->name('refresh_captcha');




//--------- menu -----------------
Route::get('/home', function () {
    return view('home');
});
//Route::get('/home', 'HomeController@index')->name('home');
//--------- about -----------------
Route::get('/about', 'HomeController@index')->name('about');
Route::get('/photo', 'HomeController@index')->name('photo');
Route::get('/actions', 'HomeController@index')->name('actions');
Route::get('/news', 'HomeController@index')->name('news');
Route::get('/partners', 'HomeController@index')->name('partners');
Route::get('/comments', 'HomeController@index')->name('comments');

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
Route::get('/trainers', 'TrainerController@index')->name('trainers');
//--------- shedule -----------------
Route::get('/shedule', 'HomeController@index')->name('shedule');
//--------- contacts -----------------
Route::get('/contacts', 'HomeController@index')->name('contacts');


/*





  */
