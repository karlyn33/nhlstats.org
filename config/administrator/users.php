<?php

/**
 * Teams model config.
 */

return [

    'title' => 'Users',

    'single' => 'user',

    'model' => 'Nhlstats\User',

    /*
     * The display columns
     */
    'columns' => [
        'id',
        'username' => [
            'title' => 'Username',
        ],
        'email' => [
            'title' => 'Email',
        ],
        'admin' => [
            'title' => 'Admin',
        ],
    ],

    /*
     * The filter set
     */
    'filters' => [
        'username' => [
            'title' => 'Username',
        ],
        'email' => [
            'title' => 'Email',
        ],
        'admin' => [
            'title' => 'Admin',
            'type'  => 'bool',
        ],
    ],

    /*
     * The editable fields
     */
    'edit_fields' => [
        'username' => [
            'title' => 'Username',
        ],
        'email' => [
            'title' => 'Email',
        ],
        'admin' => [
            'title' => 'Admin',
            'type'  => 'bool',
        ],
    ],

    'sort' => [
        'field'     => 'username',
        'direction' => 'asc',
    ],
];
