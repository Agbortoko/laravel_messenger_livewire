<?php

use App\Livewire\Chat\Chat;
use App\Livewire\Chat\Index;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/chat', Index::class)
    ->middleware(['auth', 'verified'])
    ->name('chat.index');

Route::get('/chat/{query}', Chat::class)
    ->middleware(['auth', 'verified'])
    ->name('chat');

