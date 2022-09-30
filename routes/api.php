<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\EventController;


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

Route::get('/items', [ItemController::class, 'index']);
Route::prefix('/item')->group(function () {
        Route::post('/store',[ItemController::class, 'store']);
        Route::put('/{id}',[ItemController::class, 'update']);
        Route::delete('/{id}',[ItemController::class, 'destroy']);
    }
);

Route::get('/blogposts', [BlogpostController::class, 'index']);
Route::prefix('/blogpost')->group(function () {
        Route::post('/store',[BlogpostController::class, 'store']);
        Route::put('/{id}',[BlogpostController::class, 'update']);
        Route::delete('/{id}',[BlogpostController::class, 'destroy']);
    }
);
Route::get('/events', [EventController::class, 'index']);
Route::prefix('/event')->group(function () {
        Route::post('/store',[EventController::class, 'store']);
        Route::put('/{id}',[EventController::class, 'update']);
        Route::delete('/{id}',[EventController::class, 'destroy']);
    }
);