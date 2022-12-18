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

use App\Http\Controllers\eventController;
use App\Http\Controllers\projectController;

Route::get('/', [eventController::class, 'index']);
Route::get('/portfolio', [projectController::class,  'portfolio']);
Route::post('/portfolio', [projectController::class,  'store']);
Route::get('/aboutme', [eventController::class, 'aboutme']);
Route::get('/contact', [eventController::class, 'contact']);
Route::get('/admin', [eventController::class, 'admin']);

