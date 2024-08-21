<?php

use Illuminate\Support\Facades\Route;

Route::prefix('wirebook')->name('wirebook.')->group(function () {
    Route::get('/dashboard', function () {
        return view('wirebook::application.index');
    })->name('dashboard');

    //    Route::get('/stories/{story}', function (string $story) {
    //
    ////        dd($story);
    //
    //        if ($story == 'test-story') {
    //            return view('wirebook::livewire.story');
    //        }
    //
    //        return view('wirebook::application.story', ['story' => $story]);
    //
    //    })->name('story');

    Route::get('/stories/{story}', \Arrgh11\WireBook\Livewire\Tests\Button::class)->name('story');

});
