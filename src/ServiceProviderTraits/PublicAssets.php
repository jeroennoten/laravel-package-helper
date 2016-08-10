<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait PublicAssets
{
    use Publishes, Slug, Path, Tag;

    protected function publishPublicAssets()
    {
        $this->publishes([
            "{$this->path()}/public" => public_path("vendor/{$this->slug()}"),
        ], $this->tag('public'));
    }
}