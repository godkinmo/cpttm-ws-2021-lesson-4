<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => '/posts'], function () {
    Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])
        ->name('index');

    Route::group(['middleware' => 'auth'], function () {
        Route::post('/', [\App\Http\Controllers\PostController::class, 'store']);
        Route::get('/create', [\App\Http\Controllers\PostController::class, 'create']);
        Route::get('/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit']);
        Route::patch('/{post}', [\App\Http\Controllers\PostController::class, 'update']);
        Route::delete('/{post}', [\App\Http\Controllers\PostController::class, 'delete']);
    });

    Route::get('/{post}', [\App\Http\Controllers\PostController::class, 'show']);
});


require __DIR__.'/auth.php';
