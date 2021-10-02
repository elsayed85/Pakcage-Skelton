<?php

namespace Elsayed85\Skelton;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Elsayed85\Skelton\Commands\SkeltonCommand;

class SkeltonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('skelton')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_skelton_table')
            ->hasCommand(SkeltonCommand::class);
    }
}
