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
  $response = response()->json($workarts)
    ->header('Access-Control-Allow-Origin', '*')
    ->header('Access-Control-Allow-Headers', ['Origin', 'X-Requested-With', 'Content-Type', 'Accept'])
    ->header('Access-Control-Allow-Methods', ['GET', 'POST', 'PUT', 'DELETE'])
    ->header('Content-Type', 'application/json');
  return $response;
});

Route::get('workarts/{id}', function ($id) {
  $workart = Workart::findOrFail($id);
  $response = response()->json($workart)
    ->header('Access-Control-Allow-Origin', '*')
    ->header('Access-Control-Allow-Headers', ['Origin', 'X-Requested-With', 'Content-Type', 'Accept'])
    ->header('Access-Control-Allow-Methods', ['GET', 'POST', 'PUT', 'DELETE'])
    ->header('Content-Type', 'application/json');
  return $response;
});

Route::get('artists', function () {
  $artists = Artist::all();
  $response = response()->json($artists)
    ->header('Access-Control-Allow-Origin', '*')
    ->header('Access-Control-Allow-Headers', ['Origin', 'X-Requested-With', 'Content-Type', 'Accept'])
    ->header('Access-Control-Allow-Methods', ['GET', 'POST', 'PUT', 'DELETE'])
    ->header('Content-Type', 'application/json');
  return $response;
});

Route::get('artists/{id}', function ($id) {
  $artist = Artist::findOrFail($id);
  $response = response()->json($artist)
    ->header('Access-Control-Allow-Origin', '*')
    ->header('Access-Control-Allow-Headers', ['Origin', 'X-Requested-With', 'Content-Type', 'Accept'])
    ->header('Access-Control-Allow-Methods', ['GET', 'POST', 'PUT', 'DELETE'])
    ->header('Content-Type', 'application/json');
  return $response;
});

Route::get('artists/{id}/workarts', [WorkartController::class, 'getWorkarts']);
