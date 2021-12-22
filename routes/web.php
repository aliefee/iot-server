<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\Weight2Controller;

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

Route::get('/', function () {
    return view('welcome');
});

// Weight sensor1
Route::get('/waterlevel', [WeightController::class, 'index']);
Route::get('/historyWater', [WeightController::class, 'history']);
Route::post('/waterlevel', [WeightController::class, 'store']);
// Weight sensor2
Route::get('/weightsens', [Weight2Controller::class, 'index']);
Route::get('/historyWeight', [Weight2Controller::class, 'history']);
Route::post('/weightsens', [Weight2Controller::class, 'store']);
