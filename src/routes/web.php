<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController; 
use App\Http\Controllers\BookController;
use App\Http\Controllers\SessionController;


Route::get('/', [AuthorController::class, 'index']);
Route::get('/find', [AuthorController::class, 'find']);
Route::post('/find', [AuthorController::class, 'search']);
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);
Route::get('/verror', [AuthorController::class, 'verror']);
Route::get('/relation', [AuthorController::class, 'relate']);
Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);

 Route::prefix('book')->group(function () {
     Route::get('/', [BookController::class, 'index']);
     Route::get('/add', [BookController::class, 'add']);
     Route::post('/add', [BookController::class, 'create']);
 });

