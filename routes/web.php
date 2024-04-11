<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return '<h1>Homepage</h1><a href="/about">Go to about</a>';
});

Route::get('/about', function () {

    return '<h1>About page</h1><a href="/">Back to home</a>';
});
