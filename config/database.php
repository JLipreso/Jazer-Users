<?php

return [
    'database_connection' => [
        'driver'        => 'mysql',
        'host'          => env('CONN_USERS_IP', config('usersconfig.conn_users_ip')),
        'port'          => env('CONN_USERS_PT', config('usersconfig.conn_users_pt')),
        'database'      => env('CONN_USERS_DB', config('usersconfig.conn_users_db')),
        'username'      => env('CONN_USERS_UN', config('usersconfig.conn_users_un')),
        'password'      => env('CONN_USERS_PW', config('usersconfig.conn_users_pw')),
        'charset'       => 'utf8mb4',
        'collation'     => 'utf8mb4_unicode_ci',
        'prefix'        => ''
    ],
];