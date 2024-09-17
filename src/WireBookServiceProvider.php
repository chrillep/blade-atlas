<?php

namespace Arrgh11\WireBook;

use Arrgh11\WireBook\Commands\Stories;
use Arrgh11\WireBook\Commands\Tools;
use Arrgh11\WireBook\Controllers\StoryController;
use Arrgh11\WireBook\Livewire\Application;
use Arrgh11\WireBook\Livewire\Tests;
use Arrgh11\WireBook\Tools\Viewport;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WireBookServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('wirebook')
            ->hasConfigFile()
            ->hasViews()
//            ->hasRoute('web')
            ->hasMigration('create_livewire_storybook_table')
            ->hasCommands([
                Stories\NewStoryCommand::class,
                Tools\NewToolCommand::class,
            ]);
    }

    public function packageBooted()
    {
        Livewire::component('wirebook-app', Application::class);
        Livewire::component('wirebook-test-story', Tests\Button::class);

        Route::macro('wirebook', function () {
            Route::prefix('wirebook')->name('wirebook.')->group(function () {
                Route::get('/dashboard', function () {
                    return view('wirebook::application.index');
                })->name('dashboard');

                Route::get('/stories/{story}', [StoryController::class, 'index'])->name('story');

            });
        });

        \Arrgh11\WireBook\Facades\WireBook::registerTool(Viewport::class);

        //        \Arrgh11\WireBook\Facades\WireBook::discoverTools();

        \Arrgh11\WireBook\Facades\WireBook::discoverStories();

    }
}
