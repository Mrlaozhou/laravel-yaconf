<?php
namespace Mrlaozhou\Yc;

use Mrlaozhou\Extend\ServiceProvider as ExtendServiceProvider;

class ServiceProvider extends ExtendServiceProvider
{
    /**
     * @throws \throwable
     */
    public function register()
    {
        $this->is_extension_loaded('yaconf');
    }
}