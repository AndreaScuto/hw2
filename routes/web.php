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


Route::get('signup','App\Http\Controllers\AccessCONTROLLER@signup_form');
Route::post('signup','App\Http\Controllers\AccessCONTROLLER@signup');

Route::get('login','App\Http\Controllers\AccessCONTROLLER@login_form');
Route::post('login','App\Http\Controllers\AccessCONTROLLER@login');

Route::get('home','App\Http\Controllers\HomeCONTROLLER@home');
Route::post('home', 'App\Http\Controllers\HomeCONTROLLER@inviaCOMMENTO');

Route::get('archivio','App\Http\Controllers\ArchivioCONTROLLER@archivio');

Route::get('profile','App\Http\Controllers\ProfileCONTROLLER@profile');
Route::get('logout','App\Http\Controllers\ProfileCONTROLLER@logout');

