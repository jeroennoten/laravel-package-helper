<?php

namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

trait Views {

    private function loadViews()
    {
        $viewsPath = "{$this->path()}/resources/views";

        $this->loadViewsFrom($viewsPath, $this->name());

        $this->publishes([
            $viewsPath => base_path("resources/views/vendor/{$this->name()}"),
        ], $this->name());
    }

    protected abstract function publishes(array $paths, $group = null);

    protected abstract function loadViewsFrom($path, $namespace);

    protected abstract function path(): string;

    protected abstract function name(): string;
}