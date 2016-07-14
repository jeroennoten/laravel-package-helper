<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Assets
{
    private function publishAssets()
    {
        $this->publishes([
            "$this->path/resources/assets" => base_path("resources/assets"),
        ], 'assets');
    }
}