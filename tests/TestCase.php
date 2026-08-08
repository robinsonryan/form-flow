<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase as Orchestra;
use RobinsonRyan\FormFlow\FormFlowServiceProvider;

abstract class TestCase extends Orchestra
{
    use RefreshDatabase;

    /**
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            FormFlowServiceProvider::class,
        ];
    }

    /**
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function defineEnvironment($app): void
    {
        // The package schema relies on PostgreSQL's native uuidv7() as a column
        // default, so the suite runs against a real Postgres database (the DDEV
        // `db` service) rather than SQLite.
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver' => 'pgsql',
            'host' => env('FORM_FLOW_TEST_DB_HOST', 'db'),
            'port' => (int) env('FORM_FLOW_TEST_DB_PORT', 5432),
            'database' => env('FORM_FLOW_TEST_DB_DATABASE', 'testing'),
            'username' => env('FORM_FLOW_TEST_DB_USERNAME', 'db'),
            'password' => env('FORM_FLOW_TEST_DB_PASSWORD', 'db'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ]);
    }

    protected function defineDatabaseMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
