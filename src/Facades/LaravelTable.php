<?php

namespace Mintreu\LaravelTable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mintreu\LaravelTable\LaravelTable
 */
class LaravelTable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mintreu\LaravelTable\LaravelTable::class;
    }
}
