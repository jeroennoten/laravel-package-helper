<?php

namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

trait Views {

    private function loadViews()
    {
        $viewsPath = "$this->path/resources/views";

        $this->loadViewsFrom($viewsPath, $this->name);

        $this->publishes([
            $viewsPath => base_path("resources/views/vendor/$this->name"),
        ], $this->name);
    }

}