<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingHistoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [PageController::class, 'index']);

Route::get('/books', [BookController::class, 'showAllBooks']);
Route::post('/books', [BookController::class, 'borrowBook']);

Route::get('/members', [MemberController::class, 'showAllMembers']);
Route::get('/members/{id}', [MemberController::class, 'showProfile']);
Route::get('/members/{id}/history', [MemberController::class, 'showHistory']);

Route::get('/authors', [AuthorController::class, 'showAllAuthors']);
Route::get('/authors/{id}', [AuthorController::class, 'showProfile']);

Route::get('/borrowing-history', [BorrowingHistoryController::class, 'showAllHistory']);

Route::get('/unreturned-books', [BorrowingHistoryController::class, 'unreturnedBook']);

