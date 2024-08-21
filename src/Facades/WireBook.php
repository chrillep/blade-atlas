<?php

namespace Arrgh11\WireBook\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Arrgh11\WireBook\WireBook
 */
class WireBook extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Arrgh11\WireBook\WireBook::class;
    }
}
