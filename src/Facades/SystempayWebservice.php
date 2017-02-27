<?php

namespace Restoore\SystempayWebservice\Facades;


use Illuminate\Support\Facades\Facade;

class SystempayWebservice extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'systempayWebservice'; }
}