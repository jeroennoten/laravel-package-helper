<?php

namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

trait Config
{
    use Publishes, Path, Name, Tag;

    public function publishConfig()
    {
        $configPath = "{$this->path()}/config/{$this->name()}.php";

        $this->publishes([
            $configPath => config_path("{$this->name()}.php"),
        ], $this->tag('config'));

        $this->mergeConfigFrom($configPath, $this->name());
    }

    protected abstract function mergeConfigFrom($path, $key);
}