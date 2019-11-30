<?php

namespace Bazavlukd\VueSpaTemplate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bazavlukd\VueSpaTemplate\Skeleton\SkeletonClass
 */
class VueSpaTemplateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vue-spa-template';
    }
}
