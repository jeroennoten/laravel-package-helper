<?php


use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Config;

class ConfigTest extends TestCase
{
    public function testPublishing()
    {
        $this->configTest(ConfigServiceProvider::class);
    }

    protected function getPackageProviders($app)
    {
        return [ConfigServiceProvider::class];
    }
}

class ConfigServiceProvider extends TestServiceProvider
{
    use Config;

    public function boot()
    {
        $this->publishConfig();
    }
}