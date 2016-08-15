<?php

use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Tag;

class TagTest extends TestCase
{
    public function testTag()
    {
        /** @var TagServiceProvider $provider */
        $provider = $this->app->getProvider(TagServiceProvider::class);

        $this->assertEquals('ac-me-hi', $provider->tag('hi'));
    }

    protected function getPackageProviders($app)
    {
        return [TagServiceProvider::class];
    }
}

class TagServiceProvider extends TestServiceProvider
{
    use Tag;
}