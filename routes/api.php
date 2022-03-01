<?php

use App\Http\Controllers\Api\RectangleController;
use App\Http\Controllers\Api\TriangleController;
use App\Models\Triangle;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function(){

    Route::prefix('triangles')->group(function(){

        Route::get('/', [TriangleController::class, 'index']);
        Route::post('/', [TriangleController::class, 'store']);

    });

    Route::prefix('rectangles')->group(function(){

        Route::get('/', [RectangleController::class, 'index']);
        Route::post('/', [RectangleController::class, 'store']);

    });
});