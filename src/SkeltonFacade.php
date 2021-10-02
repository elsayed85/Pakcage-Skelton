<?php

namespace Elsayed85\Skelton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elsayed85\Skelton\Skelton
 */
class SkeltonFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skelton';
    }
}
