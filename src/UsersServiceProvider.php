<?php

namespace Jazer\Users;

use Illuminate\Support\ServiceProvider;

class UsersServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('usersconfig.php')
        ], 'usersconfig-config');
        
        $this->loadRoutesFrom( __DIR__ . '/../routes/api.php');
    }
}
