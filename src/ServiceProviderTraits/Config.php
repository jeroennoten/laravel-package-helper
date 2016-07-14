<?php

namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

trait Config {

    private function publishConfig()
    {
        $configPath = "$this->path/config/$this->name.php";

        $this->publishes([
            $configPath => config_path("$this->name.php"),
        ], $this->name);

        $this->mergeConfigFrom($configPath, $this->name);
    }

    protected abstract function publishes(array $paths, $group = null);

    protected abstract function mergeConfigFrom($path, $key);
}