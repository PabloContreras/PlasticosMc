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

Route::get('/',['as'=>'inicio','uses'=>'PageController@inicio']);

Route::get('/nosotros',['as'=>'nosotros','uses'=>'PageController@nosotros']);

Route::get('/servicios',['as'=>'servicios','uses'=>'PageController@servicios']);

Route::get('/contacto',['as'=>'contacto','uses'=>'PageController@contacto']);

Route::get('/buzon',['as'=>'buzoncli','uses'=>'PageController@buzon']);