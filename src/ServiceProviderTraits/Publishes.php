<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Publishes
{
    protected abstract function publishes(array $paths, $group = null);
}