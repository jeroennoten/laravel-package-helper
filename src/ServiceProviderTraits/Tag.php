<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Tag
{
    use Slug;

    public function tag($category) {
        return "{$this->slug()}-$category";
    }
}