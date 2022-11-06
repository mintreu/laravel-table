<?php

namespace Mintreu\LaravelTable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mintreu\LaravelTable\Commands\LaravelTableCommand;

class LaravelTableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-table')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-table_table')
            ->hasCommand(LaravelTableCommand::class);
    }
}
