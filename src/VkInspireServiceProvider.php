<?php

namespace Vk\Inspire;

use Illuminate\Support\ServiceProvider;

class VkInspireServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/view', 'inspire');

        $this->mergeConfigFrom(
            __DIR__.'/config/vkinspire.php', 'vkinspire'
        );

        $this->publishes([
            __DIR__.'/config/vkinspire.php' => config_path('vkinspire.php')
        ]);
    }

    public function register()
    {
        
    }
}