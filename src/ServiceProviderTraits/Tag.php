<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Tag
{
    use Slug;

    protected function tag($category) {
        return "{$this->slug()}-$category";
    }
}