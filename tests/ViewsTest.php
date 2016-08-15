<?php


use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Views;

class ViewsTest extends TestCase
{
    public function testPublishing()
    {
        $provider = $this->app->getProvider(ViewsServiceProvider::class);

        $paths = [__DIR__ . '/stubs/package/resources/views' => resource_path('views/vendor/ac_me')];

        $this->assertEquals($paths, $provider->pathsToPublish(ViewsServiceProvider::class));
        $this->assertEquals($paths, $provider->pathsToPublish(ViewsServiceProvider::class, 'ac-me-views'));
    }

    public function testLoading()
    {
        $this->assertEquals(view('ac_me::test')->render(), 'Yes!');
    }

    protected function getPackageProviders($app)
    {
        return [ViewsServiceProvider::class];
    }
}

class ViewsServiceProvider extends TestServiceProvider
{
    use Views;

    public function boot()
    {
        $this->loadViews();
    }
}