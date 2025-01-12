<?php

namespace BlogLaravel\Blog;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use BlogLaravel\Blog\Commands\BlogCommand;

class BlogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-blog')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_blogs')
            // ->hasMigration('create_blog_table')
            ->hasCommand(BlogCommand::class);
    }
}
