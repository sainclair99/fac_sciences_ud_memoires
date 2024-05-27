<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FiliereController;
use App\Http\Controllers\Api\DepartementController;
use App\Http\Controllers\Api\MemoireController;
use App\Http\Middleware\SetLocale;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function (Request $request) {
    return response()->json([
        'Test' => true
    ]);
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::apiResource('departement', DepartementController::class);
Route::apiResource('filiere', FiliereController::class);
Route::apiResource('memoire', MemoireController::class);
