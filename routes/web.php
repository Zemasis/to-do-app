<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return "Hello World";
})->name('greeting'); // dăth tên cho route

Route::get('/greeting/{name}', function ($name) {
    return "Hello World". $name;
});

Route::get('/hto', function () {
    return redirect('/greeting');
});
// redirect trả về 1 response với status code 302 và header location

Route::get('/hi2', function () {
    return redirect()->route('greeting');
});
//cách này là redirect đến route có tên là greeting

Route::get('/Home', function () {
    return redirect('/');
});
