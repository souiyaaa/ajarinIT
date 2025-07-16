<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(
            Url::create('/')
                ->setLastModificationDate(now())
                ->setPriority(1.0)
        );

    return $sitemap->toResponse(request());
});
