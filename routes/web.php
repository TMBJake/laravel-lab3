<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

// Route to list all posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route to view a single post with comments
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

// Route to submit a new comment on a post
Route::post('/posts/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
