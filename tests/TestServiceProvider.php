<?php


use Illuminate\Support\ServiceProvider;

abstract class TestServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    protected function name()
    {
        return 'ac_me';
    }

    protected function path()
    {
        return __DIR__ . '/stubs/package';
    }

    protected function getContainer()
    {
        return $this->app;
    }
}