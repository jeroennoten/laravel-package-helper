<?php

namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

use Illuminate\Foundation\Application;

trait Migrations
{
    use Tag, Publishes, Path;

    public function publishMigrations()
    {
        $migrationsPath = "{$this->path()}/database/migrations";

        $this->publishes([
            $migrationsPath => database_path('migrations'),
        ], $this->tag('migrations'));

        if (version_compare(Application::VERSION, '5.3.0', '>=')) {
            $this->loadMigrationsFrom($migrationsPath);
        }
    }
}