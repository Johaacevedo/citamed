<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('inicio');
    
});

Route::get('/login', function () {
    return view('login');
    
});

Route::get('/prueba', function () {
    return view('prueba');
    
});
