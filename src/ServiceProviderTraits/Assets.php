<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Assets
{
    use Slug, Path, Publishes, Tag {
        Slug::slug insteadof Tag;
    }

    public function publishAssets()
    {
        $this->publishes([
            "{$this->path()}/resources/assets" => public_path("vendor/{$this->slug()}"),
        ], $this->tag('assets'));
    }
}