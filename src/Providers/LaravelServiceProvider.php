<?php
namespace Mrlaozhou\Yc\Providers;

use Mrlaozhou\Yc\Exceptions\ExtensionNotFoundException;
use Mrlaozhou\Yc\ServiceProvider;

class LaravelServiceProvider extends ServiceProvider
{
    public function boot(){}

    /**
     * @throws \Mrlaozhou\Yc\Exceptions\ExtensionNotFoundException
     */
    public function register()
    {
        //  检测是否安装Yaconf扩展
        if( ! extension_loaded('yaconf') ) {
            throw new ExtensionNotFoundException('未发现扩展Yaconf');
        }
    }
}