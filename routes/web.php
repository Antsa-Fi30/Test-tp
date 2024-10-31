<?php

use App\Http\Controllers\CollaboratorsController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\SearchController;
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


Route::get('/', [CollaboratorsController::class, 'index']);
Route::get('/logs', [LogController::class, 'index']);
Route::get('/logsfilter', [LogController::class, 'filter'])->name('logs.filter');
