<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Translations
{
    private function loadTranslations()
    {
        $translationsPath = "{$this->path()}/resources/lang";

        $this->loadTranslationsFrom($translationsPath, $this->name());

        $this->publishes([
            $translationsPath => resource_path("lang/vendor/{$this->name()}"),
        ], 'translations');
    }

    protected abstract function publishes(array $paths, $group = null);

    protected abstract function loadTranslationsFrom($path, $namespace);

    protected abstract function path(): string;

    protected abstract function name(): string;
}