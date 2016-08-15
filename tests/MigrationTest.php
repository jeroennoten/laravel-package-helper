<?php


use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Migrations;

class MigrationTest extends TestCase
{
    public function testPublishing()
    {
        $provider = $this->app->getProvider(MigrationServiceProvider::class);

        $paths = [__DIR__ . '/stubs/package/database/migrations' => database_path('migrations')];

        $this->assertEquals($paths, $provider->pathsToPublish(MigrationServiceProvider::class));
        $this->assertEquals($paths, $provider->pathsToPublish(MigrationServiceProvider::class, 'ac-me-migrations'));
    }

    protected function getPackageProviders($app)
    {
        return [MigrationServiceProvider::class];
    }
}

class MigrationServiceProvider extends TestServiceProvider
{
    use Migrations;

    public function boot()
    {
        $this->publishMigrations();
    }
}