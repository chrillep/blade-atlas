<?php

namespace Arrgh11\WireBook\Concerns;

interface HasWirebookTooling
{
    // require a Blade view
    public static function view(): string;

    // require an Alpine component
    public static function component(): string;
}
