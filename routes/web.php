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
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Routes Workart

Route::get('/workarts', [WorkartController::class, 'index'])->name('workarts');
Route::get('/workarts/create',[WorkartController::class, 'create']);
Route::post('/workarts/create', [WorkartController::class,'store'])->name('storeWorkart');
Route::get('/workarts/edit/{id}', [WorkartController::class, 'edit'])->name('editWorkart');
Route::put('/workarts/update/{id}', [WorkartController::class, 'update'])->name('updateWorkart');
Route::get('/workarts/delete/{id}', [WorkartController::class, 'destroy'])->name('deleteWorkart');

//Routes Artists

Route::get('/artists', [ArtistController::class, 'index'])->name('artists');
Route::get('/artists/create', [ArtistController::class, 'create']);
Route::post('/artists/create', [ArtistController::class, 'store'])->name('storeArtist');
Route::get('/artists/edit/{id}', [ArtistController::class, 'edit'])->name('editArtist');
Route::put('/artists/update/{id}', [ArtistController::class, 'update'])->name('updateArtist');
Route::get('/artists/delete/{id}', [ArtistController::class, 'destroy'])->name('deleteArtist');
