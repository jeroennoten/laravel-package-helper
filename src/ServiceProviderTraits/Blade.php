<?php


namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;


use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Factory;

trait Blade
{
    use App;

    /**
     * @return BladeCompiler
     */
    protected function getBlade()
    {
        /** @var BladeCompiler $compiler */
        $compiler = $this->getBladeEngine()->getCompiler();
        return $compiler;
    }

    /**
     * @return CompilerEngine
     */
    private function getBladeEngine()
    {
        return $this->getViewFactory()->getEngineResolver()->resolve('blade');
    }

    /**
     * @return Factory
     */
    private function getViewFactory()
    {
        return $this->getContainer()->make(Factory::class);
    }
}