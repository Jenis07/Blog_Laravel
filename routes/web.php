<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\view;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'show'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/show/{id}', [view::class, 'showsingle'])->name('view');
    Route::get('/dashboard', [DashboardController::class, 'showpost'])->name('dashboard');
    Route::get('/post', [PostController::class, 'index'])->name('post_index');
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post_edit');
    Route::post('/post', [PostController::class, 'create'])->name('post_create');
    Route::post('/post/update/{id}', [PostController::class, 'update'])->name('post_update');
    Route::get('/post/delete/{id}', [PostController::class, 'destroy'])->name('post_delete');
});



require __DIR__ . '/auth.php';
