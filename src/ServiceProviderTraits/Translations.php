<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Translations
{
    use Tag, Publishes, Path;

    protected function loadTranslations()
    {
        $translationsPath = "{$this->path()}/resources/lang";

        $this->loadTranslationsFrom($translationsPath, $this->name());

        $this->publishes([
            $translationsPath => resource_path("lang/vendor/{$this->name()}"),
        ], $this->tag('translations'));
    }

    protected abstract function loadTranslationsFrom($path, $namespace);
}
