<?php

use App\Livewire\Counter;
use App\Livewire\HelloWorld;
use Illuminate\Support\Facades\Route;

Route::get('/', HelloWorld::class);

Route::Get('/counter', Counter::class);
