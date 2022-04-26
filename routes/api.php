<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/signin', [App\Http\Controllers\AuthController::class, 'signIn']);
Route::post('/signup', [App\Http\Controllers\AuthController::class, 'signUp']);

Route::get('/client/getClient', [App\Http\Controllers\ClientController::class, 'getClient']);

Route::get('/client/getProductInfo/{productId}', [App\Http\Controllers\ProductController::class, 'getProductInfo']);

// Route::get('/client/getType', function () {
//     return response()->json('hello');
// });