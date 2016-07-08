<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


trait Translations
{
    private function loadTranslations()
    {
        $translationsPath = "$this->path/resources/lang";

        $this->loadTranslationsFrom($translationsPath, $this->name);

        $this->publishes([
            $translationsPath => base_path("resources/lang/vendor/$this->name"),
        ], 'translations');
    }
}