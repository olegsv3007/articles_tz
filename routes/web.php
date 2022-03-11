<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article\ArticleIndexController;
use App\Http\Controllers\Article\ArticleShowController;
use App\Http\Controllers\Article\ArticleCreateController;
use App\Http\Controllers\Article\ArticleStoreController;
use App\Http\Controllers\Article\ArticleEditController;
use App\Http\Controllers\Article\ArticleUpdateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/article/create', ArticleCreateController::class)->name('app.article.create');
    Route::post('/article/store', ArticleStoreController::class)->name('app.article.store');
    Route::get('/article/{article}/edit', ArticleEditController::class)->name('app.article.edit');
    Route::put('/article/{article}/update', ArticleUpdateController::class)->name('app.article.update');
});

Route::get('/', ArticleIndexController::class)->name('app.home');
Route::get('/article/{article}', ArticleShowController::class)->name('app.article.detail');

