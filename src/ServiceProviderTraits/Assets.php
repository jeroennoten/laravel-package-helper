<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Assets
{
    private function publishAssets()
    {
        $this->publishes([
            "$this->path/resources/assets" => public_path('vendor'),
        ], 'assets');
    }

    protected abstract function publishes(array $paths, $group = null);
}