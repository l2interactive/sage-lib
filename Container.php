<?php

namespace Roots\Sage;

use Illuminate\Container\Container as BaseContainer;

class Container extends BaseContainer
{
    /**
     * @param $callback
     * @return void
     */
    public function terminating($callback)
    {
        $callback();
    }
}
