<?php

namespace Wovosoft\BdHrmProfile\Facades;

use Illuminate\Support\Facades\Facade;

class BdHrmProfile extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'bd-hrm-profile';
    }
}
