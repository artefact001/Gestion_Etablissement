<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\UEController;
use App\Http\Controllers\EvaluationController;

Route::resource('etudiants', EtudiantController::class);
Route::resource('matieres', MatiereController::class);
Route::resource('ues', UEController::class);
Route::resource('evaluations', EvaluationController::class);