<?php


use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Translations;

class TranslationsTest extends TestCase
{
    public function testPublishing()
    {
        $provider = $this->app->getProvider(TranslationsServiceProvider::class);

        $paths = [__DIR__ . '/stubs/package/resources/lang' => resource_path('lang/vendor/ac_me')];

        $this->assertEquals($paths, $provider->pathsToPublish(TranslationsServiceProvider::class));
        $this->assertEquals($paths, $provider->pathsToPublish(TranslationsServiceProvider::class, 'ac-me-translations'));
    }

    public function testLoading()
    {
        $this->assertEquals(trans('ac_me::test.hi'), 'Hello dude!');
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