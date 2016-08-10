<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


use Illuminate\Support\Str;

trait Slug
{
    use Name;

    protected function slug() {
        return Str::slug($this->name());
    }
}