<?php

namespace brownpl\laravellimesurveyapi\Facades;

use Illuminate\Support\Facades\Facade;

class LimeSurveyAPI extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    { 
    	return \brownpl\laravellimesurveyapi\LimesurveyApi::class;
    }
}
