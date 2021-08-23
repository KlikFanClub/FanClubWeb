<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\WorkartController;
use App\Models\Workart;
use Illuminate\Support\Facades\Auth;

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

Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/workarts', [WorkartController::class, 'index']);
Route::get('/workarts/create',[WorkartController::class, 'create']);
Route::post('/workarts/create', [WorkartController::class,'store'])->name('storeWorkart');

