<?php

namespace VendorName\Skelton;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use VendorName\Skelton\Commands\SkeltonCommand;

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
            ->name('Skelton')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_Skelton_table')
            ->hasCommand(SkeltonCommand::class);
    }
}
