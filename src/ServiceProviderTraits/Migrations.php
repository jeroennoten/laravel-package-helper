<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Migrations
{
    protected function publishMigrations()
    {
        $this->publishes([
            "{$this->path()}/database/migrations" => database_path('migrations'),
        ], 'migrations');
    }

    protected abstract function publishes(array $paths, $group = null);

    protected abstract function path();
}