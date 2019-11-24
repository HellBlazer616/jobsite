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
Route::get('/index', function () {
    return view('index');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify', 'HomeController@verify')->name('verify');

Route::get('/login/company', 'Auth\LoginController@showCompanyLoginForm')->name('login.company');
Route::get('/register/company', 'Auth\RegisterController@showCompanyRegisterForm');

Route::post('/login/company', 'Auth\LoginController@companyLogin');
Route::post('/register/company', 'Auth\RegisterController@createCompany');

Route::get(
    '/passsword/reset/company',
    'Auth\ForgotPasswordController@showLinkRequestCompanyForm'
)->name('password.request.company');


Route::post(
    '/passsword/email/company',
    'Auth\ForgotPasswordController@sendResetLinkCompanyEmail'
)->name('password.email.company');


Route::get(
    '/passsword/reset/company/{token}',
    'Auth\ResetPasswordController@showResetFormCompany'
)->name('password.reset.company');


Route::post(
    '/passsword/reset/company/',
    'Auth\ResetPasswordController@resetCompany'
)->name('password.update.company');




Route::view('/home', 'home')->middleware('auth');
Route::view('/company', 'company');
Route::view('/writer', 'writer');
