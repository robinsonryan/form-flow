<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Database Configuration
    |--------------------------------------------------------------------------
    |
    | Configure database-specific options for the form-flow package.
    |
    */
    'database' => [
        /*
        |--------------------------------------------------------------------------
        | Native UUID Support
        |--------------------------------------------------------------------------
        |
        | When enabled, uses PostgreSQL 18+ native gen_random_uuid() for primary
        | key generation. When disabled, Laravel generates UUIDs in PHP.
        |
        */
        'native_uuids' => env('FORM_FLOW_NATIVE_UUIDS', false),

        /*
        |--------------------------------------------------------------------------
        | Database Connection
        |--------------------------------------------------------------------------
        |
        | The database connection to use for form-flow tables. Set to null to
        | use the application's default connection.
        |
        */
        'connection' => env('FORM_FLOW_CONNECTION'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Table Names
    |--------------------------------------------------------------------------
    |
    | Configure custom table names if needed to avoid conflicts.
    |
    */
    'tables' => [
        'flows' => 'flows',
        'flow_steps' => 'flow_steps',
        'flow_slots' => 'flow_slots',
        'form_templates' => 'form_templates',
        'form_template_steps' => 'form_template_steps',
        'flow_responses' => 'flow_responses',
    ],
];
