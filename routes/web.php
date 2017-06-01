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

// Se activa las funcioanes prefabricadas de Laravel Authentication

Auth::routes();

// ------------- SECCION INICIAL - NO AUTH REQUERIDO ----------------

Route::get('/', 'HomeController@index');

Route::get('/teacher/login', 'HomeController@teacherLogin');

Route::get('/admin/login', 'HomeController@adminLogin');

// ---------- Rutas AUTH -----------------//
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/teacher/register', 'Auth\RegisterController@registrarProfesor')->name('register');
Route::get('/admin/register', 'Auth\RegisterController@registrarAdmnistrador')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

        // Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// ------------- SECCION DASHBOARD - AUTH REQUERIDO ----------------

Route::get('/dashboard', 'UserController@dashboard');

Route::get('/dashboard/teacher', 'UserController@dashboardProfesor');

Route::get('/dashboard/teacher/course/', 'CourseTeacherController@index');

//Rutas Usuarios
Route::get('/dashboard/user/', 'UserController@index');
Route::get('/dashboard/user/inactive/', 'UserController@listInactive');
Route::post('/dashboard/activar/{id}/', 'UserController@active');

// Rutas Tipos de Usuarios
Route::get('/dashboard/userType/', 'UserTypeController@index');
Route::post('/dashboard/userType/create/', 'UserTypeController@create');
Route::get('/dashboard/userType/{id}/update/', 'UserTypeController@Update');
Route::put('/dashboard/userType/{id}/update/', 'UserTypeController@putUpdate');

// Rutas para el CRUD de los cursos
Route::get('/dashboard/course/', 'CourseController@index');

Route::get('/dashboard/course/create', 'CourseController@getCreate');
Route::post('/dashboard/course/create', 'CourseController@postCreate');

Route::get('/dashboard/course/{id}/update/', 'CourseController@Update');
Route::put('/dashboard/course/{id}/update/', 'CourseController@putUpdate');

// Rutas para el CRUD de los contenidos
Route::get('/dashboard/content/', 'ContentController@index');

Route::get('/dashboard/content/create','ContentController@getCreate');

Route::post('/dashboard/content/create', 'ContentController@create');

Route::get('/dashboard/content/{id}/update/', 'ContentController@Update');
Route::put('/dashboard/content/{id}/update/', 'ContentController@putUpdate');

// Rutas para los contenidos de los cursos
Route::get('/dashboard/course/content/{id}','CourseContentController@index');
Route::post('/dashboard/course/content/{id}/create/', 'CourseContentController@create');
Route::delete('/dashboard/course/content/{curso}/{contenido}/{id}/delete/', 'CourseContentController@destroy');

// Rutas para el CRUD de los Questionario
Route::get('/dashboard/test/', 'TestController@index');

Route::get('/dashboard/test/create', 'TestController@getCreate');

Route::post('/dashboard/test/create', 'TestController@create');

Route::get('/dashboard/test/{id}/update/', 'TestController@Update');
Route::put('/dashboard/test/{id}/update/', 'TestController@putUpdate');

// Rutas para el CRUD de los Preguntas
Route::get('/dashboard/question/', 'QuestionController@index');

Route::get('/dashboard/question/create', 'QuestionController@getCreate');

Route::post('/dashboard/question/create', 'QuestionController@create');

Route::get('/dashboard/question/{id}/update/', 'QuestionController@Update');
Route::put('/dashboard/question/{id}/update/', 'QuestionController@putUpdate');

// Rutas para el CRUD de los Respuestas
Route::get('/dashboard/answer/', 'AnswerController@index');

Route::get('/dashboard/answer/create', 'AnswerController@getCreate');
Route::post('/dashboard/answer/create', 'AnswerController@postCreate');

Route::get('/dashboard/answer/{id}/update/', 'AnswerController@Update');
Route::put('/dashboard/answer/{id}/update/', 'AnswerController@putUpdate');

// Rutas para el CRUD de Questionario - Preguntas
Route::get('/dashboard/test/question/{id}/', 'TestQuestionController@index');
Route::post('/dashboard/test/question/{id}/create/', 'TestQuestionController@create');
Route::delete('/dashboard/test/question/{question}/{pregunta}/{id}/delete/', 'TestQuestionController@destroy');

//Rutas Estudiantes por Curso
Route::get('/dashboard/studenCourse/','CourseStudenController@index');

// Dashboard Administracion
Route::get('/dashboard/admin', 'UserController@index');

Route::get('/dashboard/examen/{id}','ExamenController@index');
Route::post('/dashboard/examen/','ExamenController@respuesta');