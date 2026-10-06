<?php

use App\Controllers\PublicController;
use App\Route;
use App\Controllers\PostsController;

Route::get('/', [PublicController::class, 'index']);
Route::get('/us', [PublicController::class, 'us']);
Route::get('/technology', [PublicController::class, 'technology']);
Route::get('/form', [PublicController::class, 'form']);
Route::post('/form', [PublicController::class, 'answer']);
Route::get('/test', [PublicController::class, 'test']);
Route::get('/admin/posts', [PostsController::class, 'index']);
Route::get('/admin/posts/create', [PostsController::class, 'create']);
Route::post('/admin/posts', [PostsController::class, 'store']);