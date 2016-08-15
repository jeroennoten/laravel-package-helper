<?php namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

trait BladeDirective
{
    use Blade;

    public function bladeDirective($name, $class, $method)
    {
       $this->getBlade()->directive($name, function ($expression) use ($class, $method) {
            $expression = isset($expression) ? $expression : '()';
            return "<?=app({$class}::class)->$method$expression;?>";
        });
    }
}