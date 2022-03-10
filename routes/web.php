<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article\ArticleIndexController;
use App\Http\Controllers\Article\ArticleShowController;

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

Route::get('/', ArticleIndexController::class)->name('app.home');
Route::get('/articles/{article}', ArticleShowController::class)->name('app.article.detail');

