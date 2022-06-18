<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HandicapController;
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

Route::get('/', [CategoryController::class, 'index']);
Route::get('/handicaps/create',[HandicapController::class, 'create'])->name('handicaps.create');
Route::post('/handicaps/store',[HandicapController::class, 'store'])->name('handicaps.store');
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{categoryId}', [HandicapController::class, 'index']);
Route::get('/handicaps/{handicap}', [HandicapController::class, 'show']);
