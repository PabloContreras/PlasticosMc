<?php

Route::get('/perfil', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.profile');
});

Route::get('/perfil', 'AdminController@profile');
/*
		Rutas para Administradores
*/
Route::get('/administradores', 'AdminController@index');
Route::get('/administradores/agregar', 'AdminController@create');
Route::post('/administradores/', 'AdminController@store');
Route::get('/administradores/{id}/actualizar', 'AdminController@edit');
Route::put('/administradores/{id}','AdminController@update');
Route::get('/administradores/{id}', 'AdminController@show');
Route::delete('/administradores/{id}/eliminar', 'AdminController@destroy');
/*
		Rutas para Editores
*/
Route::get('/editores', 'EditoresController@indexForAdmin');
Route::get('/editores/agregar', 'EditoresController@createForAdmin');
Route::post('/editores/', 'EditoresController@storeForAdmin');
Route::get('/editores/{id}/actualizar', 'EditoresController@editForAdmin');
Route::put('/editores/{id}','EditoresController@updateForAdmin');
Route::get('/editores/{id}', 'EditoresController@showForAdmin');
Route::delete('/editores/{id}/eliminar', 'EditoresController@destroyForAdmin');
/*
		Rutas para Empleados
*/
Route::get('/empleados', 'EmpleadosController@indexForAdmin');
Route::get('/empleados/agregar', 'EmpleadosController@createForAdmin');
Route::post('/empleados/', 'EmpleadosController@storeForAdmin');
Route::get('/empleados/{id}/actualizar', 'EmpleadosController@editForAdmin');
Route::put('/empleados/{id}','EmpleadosController@updateForAdmin');
Route::get('/empleados/{id}', 'EmpleadosController@showForAdmin');
Route::delete('/empleados/{id}/eliminar', 'EmpleadosController@destroyForAdmin');
/*
		Rutas para Vacantes
*/
Route::get('/vacantes', 'VacantesController@indexForAdmin');
Route::get('/vacantes/agregar', 'VacantesController@createForAdmin');
Route::post('/vacantes', 'VacantesController@storeForAdmin');
Route::get('/vacantes/{id}/actualizar', 'VacantesController@editForAdmin');
Route::put('/vacantes/{id}','VacantesController@updateForAdmin');
Route::get('/vacantes/{id}', 'VacantesController@showForAdmin');
Route::delete('/vacantes/{id}/eliminar', 'VacantesController@destroyForAdmin');
/*
		Rutas para Eventos
*/
Route::get('/publicaciones/eventos', 'PublicacionesController@indexEventosForAdmin');
Route::get('/publicaciones/eventos/agregar', 'PublicacionesController@createEventosForAdmin');
Route::post('/publicaciones/eventos', 'PublicacionesController@storeEventosForAdmin');
Route::get('/publicaciones/eventos/{id}', 'PublicacionesController@showEventosForAdmin');
Route::delete('/publicaciones/eventos/{id}/eliminar', 'PublicacionesController@destroyEventosForAdmin');

/*
		Rutas para Avisos
*/
Route::get('/publicaciones/avisos', 'PublicacionesController@indexAvisosForAdmin');
Route::get('/publicaciones/avisos/agregar', 'PublicacionesController@createAvisosForAdmin');
Route::post('/publicaciones/avisos', 'PublicacionesController@storeAvisosForAdmin');
Route::get('/publicaciones/avisos/{id}', 'PublicacionesController@showAvisosForAdmin');
Route::delete('/publicaciones/avisos/{id}/eliminar', 'PublicacionesController@destroyAvisosForAdmin');
/*
		Rutas para Documentos
*/
Route::get('/publicaciones/documentos', 'PublicacionesController@indexDocumentosForAdmin');
Route::get('/publicaciones/documentos/agregar', 'PublicacionesController@createDocumentosForAdmin');
Route::post('/publicaciones/documentos', 'PublicacionesController@storeDocumentosForAdmin');
Route::get('/publicaciones/documentos/{id}', 'PublicacionesController@showDocumentosForAdmin');
Route::delete('/publicaciones/documentos/{id}/eliminar', 'PublicacionesController@destroyDocumentosForAdmin');

Route::get('/download/{id}', 'PublicacionesController@getDownload');