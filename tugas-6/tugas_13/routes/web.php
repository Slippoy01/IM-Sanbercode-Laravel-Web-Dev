<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CastController;

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

Route::get('/', [DashboardController::class, 'main']);
Route::get('/register', [DashboardController::class, 'form']);
Route::post('/welcome', [DashboardController::class, 'welcome']);

Route::get('/table', function(){
    return view('page.table');
});

Route::get('/data-table', function(){
    return view('page.data-table');
});

//CRUD

//create data
Route::get('/cast/create', [CastController::class, 'create']);
Route::post('/cast', [CastController::class, 'store']);

//view adn show data
Route::get('/cast', [CastController::class, 'index']);
Route::get('/cast/{id}', [CastController::class, 'show']);

//edit data
Route::get('/cast/{id}/edit', [CastController::class, 'edit']);
Route::post('/cast/{id}', [CastController::class, 'update']);

//delete data
Route::delete('/cast/{id}', [CastController::class, 'destroy']);