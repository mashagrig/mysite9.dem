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

//Auth::routes();
\Illuminate\Support\Facades\Auth::routes(['verify' => true]);
//создаст набор маршрутов


//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
//Route::get('/home', 'HomeController@index')->name('home');

//--------- privacy -----------------
//--------- singup -----------------

Route::get('/privacy', function () {
    return view('privacy');
})->middleware('auth');
Route::get('/privacy', 'SingupController@index')->name('privacy')->middleware('auth');
//POST запрос аутентификации на сайте
Route::post('/privacy', 'SingupController@store')->middleware('auth');
Route::post('/privacy/{id}/update', 'SingupController@update')->middleware('auth');
Route::post('/privacy/destroy', 'SingupController@destroy')->middleware('auth');




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


//--------- about -----------------
Route::get('/about', 'about\AboutController@index')->name('about');
Route::get('/about#about', 'about\AboutController@index')->name('about');
Route::get('/about#photo_gallery', 'about\AboutController@index')->name('photo');
Route::get('/about#actions', 'about\AboutController@index')->name('actions');
Route::get('/about#partners', 'about\AboutController@index')->name('partners');
Route::get('/about#comments', 'about\AboutController@index')->name('comments');

//Route::get('/about/photo', 'about\PhotoController@index')->name('photo');
//Route::get('/about/actions', 'about\ActionsController@index')->name('actions');
//Route::get('/about/news', 'about\NewsController@index')->name('news');
//Route::get('/about/partners', 'about\PartnersController@index')->name('partners');
//Route::get('/about/comments', 'about\CommentsController@index')->name('comments');

//--------- programs -----------------
Route::get('/programs', 'programs\ProgramsController@index')->name('programs');
Route::get('/programs#morning_programs', 'programs\MorningProgramsController@index')->name('morning_programs');
Route::get('/programs#body_building', 'programs\BodyBuildingController@index')->name('body_building');
Route::get('/programs#stretching', 'programs\StretchingController@index')->name('stretching');
Route::get('/programs#fitness', 'programs\FitnessController@index')->name('fitness');
Route::get('/programs#yoga', 'programs\YogaController@index')->name('yoga');
Route::get('/programs#pilates', 'programs\PilatesController@index')->name('pilates');
Route::get('/programs#child_programs', 'programs\ChildProgramsController@index')->name('child_programs');
//--------- cards -----------------
Route::get('/cards', 'cards\CardsController@index')->name('cards');
Route::get('/cards#cards_year', 'cards\CardsYearController@index')->name('cards_year');
Route::get('/cards#cards_six_month', 'cards\CardsSixMonthController@index')->name('cards_six_month');
Route::get('/cards#cards_three_month', 'cards\CardsThreeMonthController@index')->name('cards_three_month');
Route::get('/cards#cards_one_month', 'cards\CardsOneMonthController@index')->name('cards_one_month');
Route::get('/cards#cards_personal', 'cards\CardsPersonalController@index')->name('cards_personal');
Route::get('/cards#cards_child', 'cards\CardsPersonalController@index')->name('cards_child');
//--------- trainers -----------------
Route::get('/trainers', 'trainers\TrainersController@index')->name('trainers');
//--------- shedule -----------------
Route::get('/shedule', 'shedule\SheduleController@index')->name('shedule');
Route::post('/shedule', 'shedule\SheduleController@index');
Route::post('/shedule/', 'shedule\SheduleController@show');
Route::post('/shedule', 'shedule\SheduleController@store');



//--------- contacts -----------------
Route::get('/contacts', 'contacts\ContactsController@index')->name('contacts');


/*





  */
