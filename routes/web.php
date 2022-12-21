<?php

use App\Http\Controllers\controlSeries;
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

// Index
Route::get('/series', [controlSeries::class, 'index']);

//Adicionar Série
Route::get('/series/create', [controlSeries::class, 'create']);

//Adicionar ao DB
Route::post('/series/adicionar', [controlSeries::class, 'store']);

