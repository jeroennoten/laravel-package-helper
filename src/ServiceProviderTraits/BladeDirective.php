<?php namespace JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

use Illuminate\Support\Str;

trait BladeDirective
{
    use Blade;

    public function bladeDirective($name, $class, $method)
    {
        $this->getBlade()->directive($name, function ($expression) use ($class, $method) {
            // for Laravel 5.2 and lower
            $expression = isset($expression) ? $expression : '()';
            if (Str::startsWith($expression, '(') && Str::endsWith($expression, ')')) {
                $expression = mb_substr($expression, 1, -1, 'UTF-8');
            }

            return "<?=app({$class}::class)->$method($expression);?>";
        });
    }
}