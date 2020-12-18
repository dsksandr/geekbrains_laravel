<?php

use Illuminate\Support\Facades\Route;

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

Route::get(
    '/',
    'App\Http\Controllers\HomeController@index'
)->name('home');

Route::get(
    '/courses',
    'App\Http\Controllers\CoursesController@index'
)->name('courses');

Route::get(
    '/course/{id}',
    'App\Http\Controllers\CoursesController@course_item'
)->name('course');

Route::get(
    '/profile',
    'App\Http\Controllers\ProfileController@index'
)->name('profile');
