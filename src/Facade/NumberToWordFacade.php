<?php

namespace bushart\numbertowords\Facade;
use Illuminate\Support\Facades\Facade;


class NumberToWordFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'numberToWords';
    }
}