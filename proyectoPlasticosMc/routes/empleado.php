<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('empleado')->user();

    //dd($users);

    return view('empleado.home');
})->name('home');

