<?php


use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Views;

class ViewsTest extends TestCase
{
    public function testPublishing()
    {
        $this->viewsTest(ViewsServiceProvider::class);
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