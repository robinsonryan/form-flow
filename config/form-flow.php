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
        | Primary Keys
        |--------------------------------------------------------------------------
        |
        | There is no switch here. Every table declares its `id` column with a
        | native PostgreSQL 18 `uuidv7()` default, so the database assigns every
        | primary key on insert and Laravel never generates one. This package
        | therefore requires PostgreSQL 18 or newer.
        |
        */

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
