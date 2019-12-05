<?php

namespace Maknz\Slack\Laravel;

/**
 * @method static \Maknz\Slack\Message to($channel)
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'maknz.slack';
    }
}
