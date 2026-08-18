<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ServiceController;

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hola desde Laravel 13 🚀',
    ]);
});

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/services', [ServiceController::class, 'index']);