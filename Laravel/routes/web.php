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
Route::get('/productos', function(){
  return view('vermas');
})->name('productos');

Route::get('/inicio', function(){
    return view('inicio');
})->name('inicio');

Route::get('/procesos', function(){
  return view('servicios');
});
Route::get('/desarrollo', function(){
  return view('desarrollo');
});
Route::get('/reclutamiento', function(){
  return view('reclutamiento');
});

Route::get('/',['as'=>'inicio','uses'=>'PageController@inicio']);

Route::get('/nosotros',['as'=>'nosotros','uses'=>'PageController@nosotros']);

Route::get('/mercados-clientes',['as'=>'mercados.clientes','uses'=>'PageController@servicios']);

Route::get('/contacto',['as'=>'contacto','uses'=>'PageController@contacto']);

Route::get('/buzon',['as'=>'buzoncli','uses'=>'PageController@buzon']);
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'employee'], function () {
  Route::get('/login', 'EmployeeAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'EmployeeAuth\LoginController@login');
  Route::post('/logout', 'EmployeeAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'EmployeeAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'EmployeeAuth\RegisterController@register');

  Route::post('/password/email', 'EmployeeAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'EmployeeAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'EmployeeAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'EmployeeAuth\ResetPasswordController@showResetForm');
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
