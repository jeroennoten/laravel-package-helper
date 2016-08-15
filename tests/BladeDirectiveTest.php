<?php

use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\BladeDirective;

class BladeDirectiveTest extends TestCase
{
    public function testbladeDirective()
    {
        $this->bladeDirectiveTest();
    }

    protected function getPackageProviders($app)
    {
        return [BladeDirectiveServiceProvider::class];
    }
}

class BladeDirectiveServiceProvider extends TestServiceProvider
{
    use BladeDirective;

    public function boot()
    {
        $this->bladeDirective('hello', 'DirectiveStub', 'test');
    }
}