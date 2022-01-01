<?php

namespace App\Providers;

abstract class Provider{
    
    /**
     * boot method will be run in every pages.
     */
    
    abstract public function boot();

}