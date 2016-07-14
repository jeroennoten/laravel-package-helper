<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Migrations
{
    private function publishMigrations()
    {
        $this->publishes([
            "$this->path/database/migrations" => base_path("database/migrations"),
        ], 'migrations');
    }
}