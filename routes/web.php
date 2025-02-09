<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

//GET

Route::get('/', [ArticleController::class, 'home'])->name('home');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');

//POST

Route::post('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::post('/article/destroy/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');

