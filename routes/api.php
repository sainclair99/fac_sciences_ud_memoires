<?php

use Illuminate\Http\Request;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FiliereController;
use App\Http\Controllers\Api\MemoireController;
use App\Http\Controllers\Api\DepartementController;
use App\Http\Controllers\LocaleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function (Request $request) {
    return response()->json([
        'Test' => true
    ]);
});

Route::get('/locale/{lang}', [LocaleController::class,'setLocale']);

Route::get("/me", [AuthController::class,'getUser']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::apiResource('departement', DepartementController::class);
Route::apiResource('filiere', FiliereController::class);
Route::apiResource('memoire', MemoireController::class);
