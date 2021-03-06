<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkartController;
use App\Models\Artist;
use App\Models\User;
use App\Models\Workart;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('workarts', function () {
  $workarts = Workart::all();
  $workarts->load('artist');
  return json_encode($workarts);
});

Route::get('workarts/{id}', function ($id) {
  $workart = Workart::findOrFail($id);
  return response()->json($workart);
});

Route::get('artists', function () {
  $artists = Artist::all();
  return response()->json($artists);
});

Route::get('artists/{id}', function ($id) {
  $artist = Artist::findOrFail($id);
  return response()->json($artist);
});

Route::get('user_status',[User::class, 'isLoggedIn'])/* ->middleware('auth:api') */;

Route::get('artists/{id}/workarts', [WorkartController::class, 'getWorkarts']);
