<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\WorkartController;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Mail;
use App\Mail\New_Artist_Mail;
use App\Models\User;

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



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/agenda', [HomeController::class, 'pageConstructions'])->name('pageConstructions');
Route::get('/blog', [HomeController::class, 'pageConstructions'])->name('pageConstructions');
Route::get('/contactus', [HomeController::class, 'contact'])->name('contact');

//Routes Workart

Route::get('/workarts', [WorkartController::class, 'index'])->name('workarts');
Route::get('/workarts/create',[WorkartController::class, 'create'])->middleware('admin')->name('createWorkart');
Route::post('/workarts/create', [WorkartController::class,'store'])->middleware('admin')->name('storeWorkart');
Route::get('/workarts/edit/{id}', [WorkartController::class, 'edit'])->middleware('admin')->name('editWorkart');
Route::put('/workarts/update/{id}', [WorkartController::class, 'update'])->middleware('admin')->name('updateWorkart');
Route::get('/workarts/delete/{id}', [WorkartController::class, 'destroy'])->middleware('admin')->name('deleteWorkart');

//Routes Artists

Route::get('/artists', [ArtistController::class, 'index'])->name('artists');
Route::get('/artists/create', [ArtistController::class, 'create'])->middleware('admin')->name('createArtist');
Route::post('/artists/create', [ArtistController::class, 'store'])->middleware('admin')->name('storeArtist');
Route::get('/artists/edit/{id}', [ArtistController::class, 'edit'])->middleware('admin')->name('editArtist');
Route::put('/artists/update/{id}', [ArtistController::class, 'update'])->middleware('admin')->name('updateArtist');
Route::get('/artists/delete/{id}', [ArtistController::class, 'destroy'])->middleware('admin')->name('deleteArtist');
Route::get('/artists/show/{id}', [ArtistController::class, 'show'])->name('showArtist');

Route::get('/prueba', [User::class, 'isLoggedIn']);

//Send mails

//Route::get ('/mail', [MailController::class, 'index'])->name('mailmesaje');
/* Route::get ('/newartistmail', [MailController::class, 'index'])->name('sendmail.index');
Route::post ('/newartistmail', [MailController::class, 'store'])->name('sendmail.store'); */


