<?php

return [
    'baseUrl' => 'https://jigsaw-docs-template.tighten.co',
    'production' => true,
    'staging' => false,

    // DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),
];
