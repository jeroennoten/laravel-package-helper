<?php

use Illuminate\View\Factory;
use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\BladeDirective;

class BladeDirectiveTest extends TestCase
{
    public function testbladeDirective()
    {
        $rendered = $this->renderView('test');

        $this->assertEquals('hello, default', $rendered);
    }

    public function testWithParameters()
    {
        $rendered = $this->renderView('params');

        $this->assertEquals('hello, Jeroen', $rendered);
    }

    protected function getPackageProviders($app)
    {
        return [BladeDirectiveServiceProvider::class];
    }

    private function renderView($view)
    {
        /** @var Factory $viewFactory */
        $viewFactory = $this->app->make(Factory::class);

        $viewFactory->addLocation(__DIR__ . '/stubs');

        return $viewFactory->make($view)->render();
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

class DirectiveStub
{
    private $injected;

    public function __construct(Injected $injected)
    {
        $this->injected = $injected;
    }

    public function test($a = 'default')
    {
        return $this->injected->message . $a;
    }
}

class Injected
{
    public $message = 'hello, ';
}