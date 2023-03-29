<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;



Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [SiteController::class, 'post_detail'])->name('post_detail');

Route::get('/post_list', [SiteController::class, 'post_list'])->name('post_list');

