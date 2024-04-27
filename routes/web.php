<?php

use App\Livewire\Counter;
use App\Livewire\HelloWorld;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', HelloWorld::class);

Route::Get('/counter', Counter::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');