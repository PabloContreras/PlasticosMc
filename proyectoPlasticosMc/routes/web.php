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

Route::group(['prefix' => 'administrador'], function () {
  Route::get('/login', 'AdministradorAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdministradorAuth\LoginController@login');
  Route::post('/logout', 'AdministradorAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdministradorAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdministradorAuth\RegisterController@register');

  Route::post('/password/email', 'AdministradorAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdministradorAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdministradorAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdministradorAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'editor'], function () {
  Route::get('/login', 'EditorAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'EditorAuth\LoginController@login');
  Route::post('/logout', 'EditorAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'EditorAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'EditorAuth\RegisterController@register');

  Route::post('/password/email', 'EditorAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'EditorAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'EditorAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'EditorAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'empleado'], function () {
  Route::get('/login', 'EmpleadoAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'EmpleadoAuth\LoginController@login');
  Route::post('/logout', 'EmpleadoAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'EmpleadoAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'EmpleadoAuth\RegisterController@register');

  Route::post('/password/email', 'EmpleadoAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'EmpleadoAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'EmpleadoAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'EmpleadoAuth\ResetPasswordController@showResetForm');
});
