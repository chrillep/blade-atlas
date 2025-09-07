<?php

declare(strict_types=1);

namespace Arrgh11\WireBook\Tests;

use Arrgh11\WireBook\WireBookServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Arrgh11\\WireBook\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            WireBookServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
        config()->set('wirebook.enabled', true);
        config()->set('wirebook.discover.paths', []);

        /*
        $migration = include __DIR__.'/../database/migrations/create_livewire-storybook_table.php.stub';
        $migration->up();
        */
    }
}
