<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BulletinController;
use App\Http\Controllers\CarouselArticleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::resource('articles', ArticleController::class)->withTrashed();
Route::get('articles/{article}/edit-content', [ArticleController::class, 'editBody'])->name('articles.edit.body');
Route::put('articles/{article}/update-content', [ArticleController::class, 'updateBody'])->name('articles.update.body');
Route::put('articles/{article}/update-content', [ArticleController::class, 'updateVisibility'])->name('articles.update.visibility');

Route::resource('carousel', CarouselArticleController::class);

Route::get('/', [BulletinController::class, 'index'])->name('bulletin');

/* Route::get('/a', function () {
    return view('test');
}); */

Auth::routes([
    'register' => false,
]);

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Route::get('/editor', fn () => view('editor'))->name('editor');
