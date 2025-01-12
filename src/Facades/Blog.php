<?php

namespace BlogLaravel\Blog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BlogLaravel\Blog\Blog
 */
class Blog extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \BlogLaravel\Blog\Blog::class;
    }
}
