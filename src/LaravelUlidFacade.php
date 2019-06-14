<?php

namespace Nedmas\LaravelUlid;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nedmas\LaravelUlid\Skeleton\SkeletonClass
 */
class LaravelUlidFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-ulid';
    }
}
