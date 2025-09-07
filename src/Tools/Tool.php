<?php

namespace Arrgh11\WireBook\Tools;

use Arrgh11\WireBook\Concerns\HasWirebookTooling;

abstract class Tool implements HasWirebookTooling
{
    // Blade view
    protected static string $view = '';

    // Alpine component
    protected static string $component = '';

    public static function view(): string
    {
        return static::$view;
    }

    public static function component(): string
    {
        return static::$component;
    }
}
