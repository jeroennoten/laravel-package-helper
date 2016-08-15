<?php


use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Translations;

class TranslationsTest extends TestCase
{
    public function testPublishing()
    {
        $this->translationsTest(TranslationsServiceProvider::class);
    }

    protected function getPackageProviders($app)
    {
        return [TranslationsServiceProvider::class];
    }
}

class TranslationsServiceProvider extends TestServiceProvider
{
    use Translations;

    public function boot()
    {
        $this->loadTranslations();
    }
}