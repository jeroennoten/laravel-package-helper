<?php

use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Assets;

class AssetsTest extends TestCase
{
    public function testPublishAssets()
    {
        $provider = $this->app->getProvider(AssetsServiceProvider::class);

        $paths = [__DIR__ . '/stubs/package/resources/assets' => public_path("vendor/ac-me")];

        $this->assertEquals($paths, $provider->pathsToPublish(AssetsServiceProvider::class));
        $this->assertEquals($paths, $provider->pathsToPublish(AssetsServiceProvider::class, 'ac-me-assets'));
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