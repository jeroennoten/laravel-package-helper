<?php

use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Slug;

class SlugTest extends TestCase
{
    public function testSlug()
    {
        /** @var SlugServiceProvider $provider */
        $provider = $this->app->getProvider(SlugServiceProvider::class);

        $this->assertEquals('ac-me', $provider->slug());
    }

    protected function getPackageProviders($app)
    {
        return [SlugServiceProvider::class];
    }
}

class SlugServiceProvider extends TestServiceProvider
{
    use Slug;
}