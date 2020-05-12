<?php

namespace Thecodebunny\StreamingEngine;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thecodebunny\StreamingEngine\Skeleton\SkeletonClass
 */
class StreamingEngineFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'streaming-engine';
    }
}
