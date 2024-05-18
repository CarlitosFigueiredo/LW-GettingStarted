<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\HelloWorld;
use App\Livewire\ShowPosts;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/HelloWorld', HelloWorld::class);


Route::get('/posts', ShowPosts::class);
Route::get('/posts/create', CreatePost::class);
