<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Translations
{
    use Tag, Publishes, Path;

    public function loadTranslations()
    {
        $translationsPath = "{$this->path()}/resources/lang";

        $this->loadTranslationsFrom($translationsPath, $this->name());

        $this->publishes([
            $translationsPath => base_path("resources/lang/vendor/{$this->name()}"),
        ], $this->tag('translations'));
    }

    protected abstract function loadTranslationsFrom($path, $namespace);
}
