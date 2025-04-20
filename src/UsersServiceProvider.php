<?php

namespace Jazer\Users;

use Illuminate\Support\ServiceProvider;

class UsersServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/database.php', 'people'  
        );
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('usersconfig.php')
        ], 'usersconfig-config');
        
        $this->loadRoutesFrom( __DIR__ . '/../routes/api.php');

        config(['database.connections.conn_users' => config('people.database_connection')]);
    }
}
