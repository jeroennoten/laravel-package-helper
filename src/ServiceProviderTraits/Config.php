<?php

namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

trait Config {

    private function publishConfig()
    {
        $configPath = "{$this->path()}/config/{$this->name()}.php";

        $this->publishes([
            $configPath => config_path("{$this->name()}.php"),
        ], 'config');

        $this->mergeConfigFrom($configPath, $this->name());
    }

    protected abstract function publishes(array $paths, $group = null);

    protected abstract function mergeConfigFrom($path, $key);

    protected abstract function path();

    protected abstract function name();
}