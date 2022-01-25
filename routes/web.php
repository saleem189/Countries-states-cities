<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\StatesController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/country',[CountryController::class,'index']);
Route::get('/getStates/{id}', [StatesController::class, 'index' ])->name('state');
Route::get('country-state-city',[CountryController::class,'index']);
Route::post('get-states-by-country',[CountryController::class,'getState']);
Route::post('get-cities-by-state',[CountryController::class,'getCity']);