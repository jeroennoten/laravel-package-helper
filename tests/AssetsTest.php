<?php

use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Assets;

class AssetsTest extends TestCase
{
    public function testPublishAssets()
    {
        $this->assetsTest(AssetsServiceProvider::class);
    }

    protected function getPackageProviders($app)
    {
        return [AssetsServiceProvider::class];
    }
}

class AssetsServiceProvider extends TestServiceProvider
{
    use Assets;

    public function boot()
    {
        $this->publishAssets();
    }
}