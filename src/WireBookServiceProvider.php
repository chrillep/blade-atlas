<?php

declare(strict_types=1);

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
            ->hasRoute('web')
            ->hasMigration('create_livewire_storybook_table')
            ->hasCommands([
                Stories\NewStoryCommand::class,
                Tools\NewToolCommand::class,
            ]);
    }

    public function register(): void
    {
        parent::register();

        // Register the WireBook singleton
        $this->app->singleton(WireBook::class, function () {
            return new WireBook;
        });
    }

    public function bootingPackage(): void
    {
        // Register the Route macro so routes/web.php can simply call Route::wirebook();
        Route::macro('wirebook', function (): void {
            if (! config('wirebook.enabled', app()->isLocal())) {
                return;
            }
            Route::middleware('web')
                ->prefix('wirebook')
                ->name('wirebook.')
                ->group(function (): void {
                    Route::get('/', function () {
                        return redirect()->route('wirebook.dashboard');
                    })->name('root');

                    Route::get('/dashboard', function () {
                        return view('wirebook::application.index');
                    })->name('dashboard');

                    Route::get('/stories/{story}', [StoryController::class, 'index'])
                        ->name('story');
                });
        });
    }

    public function packageBooted(): void
    {
        Livewire::component('wirebook-app', Application::class);
        Livewire::component('wirebook-test-story', Tests\Button::class);

        \Arrgh11\WireBook\Facades\WireBook::registerTool(Viewport::class);
        \Arrgh11\WireBook\Facades\WireBook::discoverStories();
    }
}
