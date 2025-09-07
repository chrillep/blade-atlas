<?php

declare(strict_types=1);

use Arrgh11\WireBook\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('wirebook')->name('wirebook.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('wirebook.dashboard');
    })->name('root');

    Route::get('/dashboard', function () {
        return view('wirebook::application.index');
    })->name('dashboard');

    Route::get('/stories/{story}', [StoryController::class, 'index'])->name('story');

});
