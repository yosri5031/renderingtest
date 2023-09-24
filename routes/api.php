<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\FileController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* API endpoints for CRUD operations on projects and files */

// Projects endpoints
Route::get('/projects', [ProjectController::class, 'index']);
Route::post('/projects', [ProjectController::class, 'store']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);
Route::put('/projects/{id}', [ProjectController::class, 'update']);
Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);

//billing endpoints
Route::post('/projects/quote', 'ProjectController@quote');
Route::post('/projects/approve', 'ProjectController@approve');
Route::post('/projects/bill', 'ProjectController@bill');

// Files endpoints
Route::get('/files', [FileController::class, 'index']);
Route::post('/files', [FileController::class, 'store']);
Route::get('/files/{id}', [FileController::class, 'show']);
Route::put('/files/{id}', [FileController::class, 'update']);
Route::delete('/files/{id}', [FileController::class, 'destroy']);


