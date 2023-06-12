<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArchivioController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {return $request->user();});

Route::get('/ultimi3articoli', [HomeController::class, 'ultimi3ARTICOLI']);
Route::get('/commentiarticoli', [HomeController::class, 'commentiARTICOLI']);

Route::post('/cercaARTICOLO', [HomeController::class, 'ricerca']);
Route::get('/gare', [ArchivioController::class, 'gare']);
Route::post('/archivioRICERCA', [ArchivioController::class, 'archivioRICERCA']);