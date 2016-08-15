<?php


use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

class AllTest extends TestCase
{
    public function testAll()
    {
        $this->assetsTest(AllServiceProvider::class);
        $this->bladeDirectiveTest();
        $this->configTest(AllServiceProvider::class);
        $this->migrationsTest(AllServiceProvider::class);
        $this->publicAssetsTest(AllServiceProvider::class);
        $this->translationsTest(AllServiceProvider::class);
        $this->viewsTest(AllServiceProvider::class);
    }

    protected function getPackageProviders($app)
    {
        return [AllServiceProvider::class];
    }
}

class AllServiceProvider extends TestServiceProvider
{
    use ServiceProviderTraits;

    public function boot()
    {
        $this->publishAssets();
        $this->bladeDirective('hello', 'DirectiveStub', 'test');
        $this->publishConfig();
        $this->publishMigrations();
        $this->publishPublicAssets();
        $this->loadTranslations();
        $this->loadViews();
    }
}