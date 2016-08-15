<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Migrations
{
    use Tag;

    public function publishMigrations()
    {
        $this->publishes([
            "{$this->path()}/database/migrations" => database_path('migrations'),
        ], $this->tag('migrations'));
    }

    protected abstract function publishes(array $paths, $group = null);

    protected abstract function path();
}