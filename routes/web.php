<?php

use App\Livewire\Counter;
use App\Livewire\HelloWorld;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/HelloWorld', HelloWorld::class);
Route::get('/counter', Counter::class);
Route::get('/todos', Todos::class);
