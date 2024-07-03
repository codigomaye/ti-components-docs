<?php

return [
    'baseUrl' => '',
    'production' => true,
    'staging' => false,

    // DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),
];
