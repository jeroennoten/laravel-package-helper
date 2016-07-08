<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Migrations
{
    private function publishMigrations()
    {
        $migrationsPath = "$this->path/database/migrations";

        $this->publishes([
            $migrationsPath => base_path("database/migrations"),
        ], 'migrations');
    }
}