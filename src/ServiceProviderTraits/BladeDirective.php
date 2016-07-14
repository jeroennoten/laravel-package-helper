<?php namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

use Blade;

trait BladeDirective
{
    public function bladeDirective($name, $class, $method)
    {
        Blade::directive($name, function ($expression) use ($class, $method) {
            $expression = $expression ?? '()';
            return "<?=app({$class})->$method$expression;?>";
        });
    }
}