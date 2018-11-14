<?php

namespace Akill\Message;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__.'/config/message.php' => config_path().'/message.php',]);
    }

    public function register()
    {
        
    }
}