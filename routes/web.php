<?php

use Illuminate\Support\Facades\Route;

Route::prefix('wirebook')->name('wirebook.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('wirebook.dashboard');
    })->name('root');

    Route::get('/dashboard', function () {
        return view('wirebook::application.index');
    })->name('dashboard');

    Route::get('/stories/{story}', \Arrgh11\WireBook\Livewire\Tests\Button::class)->name('story');

});
