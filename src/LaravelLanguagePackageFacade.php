<?php

namespace Mauricehofman\LaravelLanguagePackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mauricehofman\LaravelLanguagePackage\Skeleton\SkeletonClass
 */
class LaravelLanguagePackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-language-package';
    }
}
