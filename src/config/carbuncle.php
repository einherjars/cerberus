<?php
/**
 * carbuncle.php
 * Modified from https://github.com/rydurham/Sentinel
 * by anonymous on 13/01/16 1:55.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Authentication Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the authentication driver that will be utilized.
    | This drivers manages the retrieval and authentication of the users
    | attempting to get access to protected areas of your application.
    |
    | Supported: "eloquent" (more coming soon).
    |
    */

    'driver'                  => 'eloquent',
    /*
    |--------------------------------------------------------------------------
    | Default Hasher
    |--------------------------------------------------------------------------
    |
    | This option allows you to specify the default hasher used by Carbuncle
    |
    | Supported: "native", "bcrypt", "sha256", "whirlpool"
    |
    */

    'hasher'                  => 'native',
    /*
    |--------------------------------------------------------------------------
    | Cookie
    |--------------------------------------------------------------------------
    |
    | Configuration specific to the cookie component of Carbuncle.
    |
    */

    'cookie'                  => [

        /*
        |--------------------------------------------------------------------------
        | Default Cookie Key
        |--------------------------------------------------------------------------
        |
        | This option allows you to specify the default cookie key used by Carbuncle.
        |
        | Supported: string
        |
        */

        'key' => 'einherjars_carbuncle',

    ],
    /*
    |--------------------------------------------------------------------------
    | Groups
    |--------------------------------------------------------------------------
    |
    | Configuration specific to the group management component of Carbuncle.
    |
    */

    'groups'                  => [

        /*
        |--------------------------------------------------------------------------
        | Model
        |--------------------------------------------------------------------------
        |
        | When using the "eloquent" driver, we need to know which
        | Eloquent models should be used throughout Carbuncle.
        |
        */

        'model' => 'Onderdelen\Seneschal\Models\Group',

    ],
    /*
    |--------------------------------------------------------------------------
    | Users
    |--------------------------------------------------------------------------
    |
    | Configuration specific to the user management component of Carbuncle.
    |
    */

    'users'                   => [

        /*
        |--------------------------------------------------------------------------
        | Model
        |--------------------------------------------------------------------------
        |
        | When using the "eloquent" driver, we need to know which
        | Eloquent models should be used throughout Carbuncle.
        |
        */

        'model'           => 'Onderdelen\Seneschal\Models\User',
        /*
        |--------------------------------------------------------------------------
        | Login Attribute
        |--------------------------------------------------------------------------
        |
        | If you're using the "eloquent" driver and extending the base Eloquent
        | model, we allow you to globally override the login attribute without
        | even subclassing the model, simply by specifying the attribute below.
        |
        */

        'login_attribute' => 'email',

    ],
    /*
    |--------------------------------------------------------------------------
    | User Groups Pivot Table
    |--------------------------------------------------------------------------
    |
    | When using the "eloquent" driver, you can specify the table name
    | for the user groups pivot table.
    |
    | Default: users_groups
    |
    */

    'user_groups_pivot_table' => 'users_groups',
    /*
    |--------------------------------------------------------------------------
    | Throttling
    |--------------------------------------------------------------------------
    |
    | Throttling is an optional security feature for authentication, which
    | enables limiting of login attempts and the suspension & banning of users.
    |
    */

    'throttling'              => [

        /*
        |--------------------------------------------------------------------------
        | Throttling
        |--------------------------------------------------------------------------
        |
        | Enable throttling or not. Throttling is where users are only allowed a
        | certain number of login attempts before they are suspended. Suspension
        | must be removed before a new login attempt is allowed.
        |
        */

        'enabled'         => true,
        /*
        |--------------------------------------------------------------------------
        | Model
        |--------------------------------------------------------------------------
        |
        | When using the "eloquent" driver, we need to know which
        | Eloquent models should be used throughout Carbuncle.
        |
        */

        'model'           => 'Einherjars\Carbuncle\Throttling\Eloquent\Throttle',
        /*
        |--------------------------------------------------------------------------
        | Attempts Limit
        |--------------------------------------------------------------------------
        |
        | When using the "eloquent" driver and extending the base Eloquent model,
        | you have the option to globally set the login attempts.
        |
        | Supported: int
        |
        */

        'attempt_limit'   => 5,
        /*
        |--------------------------------------------------------------------------
        | Suspension Time
        |--------------------------------------------------------------------------
        |
        | When using the "eloquent" driver and extending the base Eloquent model,
        | you have the option to globally set the suspension time, in minutes.
        |
        | Supported: int
        |
        */

        'suspension_time' => 15,

    ],

];