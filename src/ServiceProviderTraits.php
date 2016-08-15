<?php


namespace JeroenNoten\LaravelPackageHelper;


use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Assets;
use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\BladeDirective;
use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Config;
use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Migrations;
use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\PublicAssets;
use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Translations;
use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits\Views;

trait ServiceProviderTraits
{
    use Assets;
    use BladeDirective;
    use Config {
        Assets::tag insteadof Config;
        Assets::slug insteadof Config;
    }
    use Migrations {
        Assets::tag insteadof Migrations;
        Assets::slug insteadof Migrations;
    }
    use PublicAssets {
        Assets::slug insteadof PublicAssets;
        Assets::tag insteadof PublicAssets;
    }
    use Translations {
        Assets::tag insteadof Translations;
        Assets::slug insteadof Translations;
    }
    use Views {
        Assets::tag insteadof Views;
        Assets::slug insteadof Views;
    }
}