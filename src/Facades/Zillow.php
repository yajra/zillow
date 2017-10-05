<?php

namespace Yajra\Zillow\Facades;

use Illuminate\Support\Facades\Facade;

class Zillow extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zillow';
    }
}
