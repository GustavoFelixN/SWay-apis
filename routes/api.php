<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/users', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);

Route::post('/occurrence', [OccurenceController::class,'store']);
Route::get('/occurrences', [OccurenceController::class,'index']);
// Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');
// Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

