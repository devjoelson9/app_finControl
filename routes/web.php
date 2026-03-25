<?php

use App\Livewire\User\UserCreate;
use App\Livewire\User\UserIndex;
use App\Livewire\WhatsappMessage;
use App\Livewire\WhatsappPdf;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->name('users.')->group(function(){
    Route::get('/', UserIndex::class)->name('index');
    Route::get('/create', UserCreate::class)->name('create');
});
Route::get('/message', WhatsappMessage::class)->name('message');
Route::get('/messagePdf', WhatsappPdf::class)->name('messagePdf');

