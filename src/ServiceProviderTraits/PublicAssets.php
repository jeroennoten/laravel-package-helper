<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait PublicAssets
{
    private function publishPublicAssets()
    {
        $this->publishes([
            "{$this->path()}/public" => public_path("vendor/{$this->name()}"),
        ], 'public');
    }

    protected abstract function publishes(array $paths, $group = null);

    protected abstract function path();

    protected abstract function name();
}