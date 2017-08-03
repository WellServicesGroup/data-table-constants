<?php

namespace WellServicesGroup\DataTableConstants\Facades;

use Illuminate\Support\Facades\Facade;

class DataTableConstants extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \WellServicesGroup\DataTableConstants\DataTableConstants::class;
    }
}
