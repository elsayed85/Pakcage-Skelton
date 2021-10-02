<?php

namespace VendorName\Skelton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skelton\Skelton
 */
class SkeltonFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skelton';
    }
}
