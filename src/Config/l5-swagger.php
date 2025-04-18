<?php
return [
    'algolia' => [
        'api' => [
            'title' => 'Algolia API Documentation',
        ],

        'routes' => [
            /*
                * Route for accessing api documentation interface
            */
            'api'             => 'api/algolia/documentation',
            'docs'            => storage_path('api-docs/algolia'),
            'oauth2_callback' => 'api/algolia/oauth2-callback',
        ],
        'paths' => [
            /*
                * Edit to include full URL in ui for assets
            */
            'use_absolute_path' => env('L5_SWAGGER_USE_ABSOLUTE_PATH', true),

            /*
                * File name of the generated json documentation file
            */
            'docs_json' => 'api-algolia-docs.json',

            /*
                * File name of the generated YAML documentation file
            */
            'docs_yaml' => 'api-algolia-docs.yaml',

            /*
            * Set this to `json` or `yaml` to determine which documentation file to use in UI
            */
            'format_to_use_for_docs' => env('L5_FORMAT_TO_USE_FOR_DOCS', 'json'),

            /*
                * Absolute paths to directory containing the swagger annotations are stored.
            */
            'annotations' => [
                base_path('vendor/nexa-merchant/algolia/src/Docs/V1/Algolia'),

            ],

        ],
    ]
];