<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login',function () {
    return view('auth.login');
});

Route::get('/dashboard/teacher',function () {
    return view('admin.profesor');
});

Route::get('/dashboard/admin',function () {
    return view('admin.dash');
});

Route::get('/teacher/login',function () {
    return view('auth.login');
});

Route::get('/admin/login',function () {
    return view('auth.login');
});

Route::get('/register',function () {
    return view('auth.register');
});

Route::get('/teacher/register',function () {
    return view('auth.register');
});

Route::get('/admin/register',function () {
    return view('auth.register');
});

Route::get('/dashboard',function () {
    return view('admin.index');
});