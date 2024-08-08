<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\UEController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\AuthController;




Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('me', [AuthController::class, 'me']);
});
Route::middleware('auth:api')->group(function () {
    Route::resource('etudiants', EtudiantController::class);
    Route::resource('matieres', MatiereController::class);
    Route::resource('ues', UEController::class);
    Route::resource('evaluations', EvaluationController::class);
});
