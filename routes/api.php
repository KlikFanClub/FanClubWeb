<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkartController;
use App\Models\Artist;
use App\Models\Workart;

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

Route::get('workarts', function() {
  $workarts = Workart::all();
  return json_encode($workarts);
});

Route::get('workarts/{id}', function($id) {
  $workart = Workart::findOrFail($id);
  return json_encode($workart);
});



Route::get('artists', function() {
  $artists = Artist::all();
  return json_encode($artists);
});

Route::get('artists/{id}', function($id) {
  $artist = Artist::findOrFail($id);
  return json_encode($artist);
});
