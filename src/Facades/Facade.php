<?php

namespace WellServicesGroup\DataTableConstants\Facades;

use Illuminate\Support\Facades\Facade as BaseFacade;
use WellServicesGroup\DataTableConstants\DataTableConstants;

class Facade extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DataTableConstants::class;
    }
}