<?php

namespace BlogLaravel\Blog\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use BlogLaravel\Blog\BlogServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        // Set up factory names if needed
        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'BlogLaravel\\Blog\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );

        // Ensure database migrations are run for testing environment
        $this->runMigrations();
    }

    protected function getPackageProviders($app)
    {
        return [
            BlogServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // Set up testing database configuration
        $app['config']->set('database.default', 'testing');

        $app['config']->set('database.connections.testing', [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => 'blog', 
            'username' => env('DB_USERNAME', 'root'), 
            'password' => 'ramos',
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ]);
    }

    /**
     * Run migrations for the testing environment.
     *
     * @return void
     */
    private function runMigrations()
    {
        // Run migrations for the testing database connection
        $this->artisan('migrate', ['--database' => 'testing'])->run();
    }
}
