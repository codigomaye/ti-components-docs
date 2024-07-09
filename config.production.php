<?php

return [
    'baseUrl' => 'https://codigomaye.github.io/ti-components-docs',
    'production' => true,
    'staging' => false,

    'collections' => [
        'atoms' => [
            'path' => '/docs/atoms',
        ],
        'molecules'
    ],

    // DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),
];
