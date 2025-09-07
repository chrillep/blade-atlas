<?php

namespace Arrgh11\WireBook;

use Arrgh11\WireBook\Commands\Stories;
use Arrgh11\WireBook\Commands\Tools;
use Arrgh11\WireBook\Livewire\Application;
use Arrgh11\WireBook\Livewire\Tests;
use Arrgh11\WireBook\Tools\Viewport;
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

    public function packageBooted()
    {
        Livewire::component('wirebook-app', Application::class);
        Livewire::component('wirebook-test-story', Tests\Button::class);

        \Arrgh11\WireBook\Facades\WireBook::registerTool(Viewport::class);


        \Arrgh11\WireBook\Facades\WireBook::discoverStories();

    }
}
