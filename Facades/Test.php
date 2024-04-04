<?php

namespace Mehadi\TestingPa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Akash\LaravelUniqueSlug\UniqueSlug
 */
class Test extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'test';
    }
}