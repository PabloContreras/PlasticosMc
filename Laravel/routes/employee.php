<?php

Route::get('/inicio', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('employee')->user();

    //dd($users);

    return view('employee.home');
});

Route::get('/inicio', 'EmployeeController@home');
Route::get('/', 'EmployeeController@home');
Route::get('/home', 'EmployeeController@home');
Route::get('/perfil', 'EmployeeController@profile');