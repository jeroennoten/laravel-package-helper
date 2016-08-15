<?php


use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Config;

class ConfigTest extends TestCase
{
    public function testPublishing()
    {
        $provider = $this->app->getProvider(ConfigServiceProvider::class);

        $paths = [__DIR__ . '/stubs/package/config/ac_me.php' => config_path('ac_me.php')];

        $this->assertEquals($paths, $provider->pathsToPublish(ConfigServiceProvider::class));
        $this->assertEquals($paths, $provider->pathsToPublish(ConfigServiceProvider::class, 'ac-me-config'));
    }

    public function testMerging()
    {
        $this->assertEquals('Hello!', config('ac_me.hi'));
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