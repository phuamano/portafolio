<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\TechnologyController;
use App\Http\Controllers\Api\ContactMessageController;

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hola desde Laravel 13 🚀',
    ]);
});

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/technologies', [TechnologyController::class, 'index']);

Route::post('/contact', [ContactMessageController::class, 'store']);