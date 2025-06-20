<?php

declare(strict_types=1);

namespace Lelectrolux\ContentUrlChecker;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class ServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-content-url-checker')
            ->hasConfigFile()
            ->hasMigration('create_content_urls_tables');
    }
}
