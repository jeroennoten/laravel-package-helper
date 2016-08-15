<?php

use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\PublicAssets;

class PublicAssetsTest extends TestCase
{
    public function testPublishPublicAssets()
    {
        $provider = $this->app->getProvider(PublicAssetsServiceProvider::class);

        $paths = [__DIR__ . '/stubs/package/public' => public_path("vendor/ac-me")];

        $this->assertEquals($paths, $provider->pathsToPublish(PublicAssetsServiceProvider::class));
        $this->assertEquals($paths, $provider->pathsToPublish(PublicAssetsServiceProvider::class, 'ac-me-public'));
    }

    protected function getPackageProviders($app)
    {
        return [PublicAssetsServiceProvider::class];
    }
}

class PublicAssetsServiceProvider extends TestServiceProvider
{
    use PublicAssets;

    public function boot()
    {
        $this->publishPublicAssets();
    }
}