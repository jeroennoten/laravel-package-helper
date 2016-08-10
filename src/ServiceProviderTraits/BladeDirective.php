<?php namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

trait BladeDirective
{
    use Blade;

    protected function bladeDirective($name, $class, $method)
    {
        Blade::directive($name, function ($expression) use ($class, $method) {
            $expression = isset($expression) ? $expression : '()';
            return "<?=app({$class}::class)->$method$expression;?>";
        });
    }
}