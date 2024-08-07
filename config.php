<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'staging' => true,
    'siteName' => 'TI Components',
    'siteDescription' => 'Bootstrap based components library, powering touraisrael.es',

    'collections' => [
        'atoms' => [
            'path' => '/docs/atoms',
        ],
        'molecules'
    ],

    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
    'navigation' => require_once ('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
];
