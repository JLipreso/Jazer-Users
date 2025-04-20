<?php

return [
    /** Project Configurations */
    'project_refid'                 => env('PROJECT_REFID', ''),


    /** Database Connection Configurations */
    'conn_users_ip'                 => env('CONN_USERS_IP', env('DB_HOST')),
    'conn_users_pt'                 => env('CONN_USERS_PT', env('DB_PORT')),
    'conn_users_db'                 => env('CONN_USERS_DB', env('DB_DATABASE')),
    'conn_users_un'                 => env('CONN_USERS_UN', env('DB_USERNAME')),
    'conn_users_pw'                 => env('CONN_USERS_PW', env('DB_PASSWORD')),

    /** Query parameters */
    'fetch_paginate_max'            => env('FETCH_PAGINATE_MAX', 25),
];
