<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Assets
{
    use Slug, Path, Publishes, Tag;

    protected function publishAssets()
    {
        $this->publishes([
            "{$this->path()}/resources/assets" => public_path("vendor/{$this->slug()}"),
        ], $this->tag('assets'));
    }
}