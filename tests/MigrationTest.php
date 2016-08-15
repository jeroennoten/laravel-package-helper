<?php


use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Migrations;

class MigrationTest extends TestCase
{
    public function testPublishing()
    {
        $this->migrationsTest(MigrationServiceProvider::class);
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