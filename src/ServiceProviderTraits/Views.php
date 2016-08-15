<?php

namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

trait Views
{
    use Tag, Path, Publishes, Name;

    public function loadViews()
    {
        $viewsPath = "{$this->path()}/resources/views";

        $this->loadViewsFrom($viewsPath, $this->name());

        $this->publishes([
            $viewsPath => base_path("resources/views/vendor/{$this->name()}"),
        ], $this->tag('views'));
    }

    protected abstract function loadViewsFrom($path, $namespace);
}