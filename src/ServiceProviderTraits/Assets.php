<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Assets
{
    private function publishAssets()
    {
        $this->publishes([
            "{$this->path()}/resources/assets" => public_path("vendor/{$this->name()}"),
        ], 'assets');
    }

    protected abstract function publishes(array $paths, $group = null);

    protected abstract function path(): string;

    protected abstract function name(): string;
}