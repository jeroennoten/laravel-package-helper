<?php

use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\PublicAssets;

class PublicAssetsTest extends TestCase
{
    public function testPublishPublicAssets()
    {
        $this->publicAssetsTest(PublicAssetsServiceProvider::class);
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