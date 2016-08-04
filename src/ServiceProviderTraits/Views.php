<?php

namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

trait Views {

    private function loadViews()
    {
        $viewsPath = "{$this->path()}/resources/views";

        $this->loadViewsFrom($viewsPath, $this->name());

        $this->publishes([
            $viewsPath => base_path("resources/views/vendor/{$this->name()}"),
        ], 'views');
    }

    protected abstract function publishes(array $paths, $group = null);

    protected abstract function loadViewsFrom($path, $namespace);

    protected abstract function path();

    protected abstract function name();
}