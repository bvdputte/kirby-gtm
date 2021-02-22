<?php
/**
 * Kirby Google Tag Manager
 */

// For composer
@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('bvdputte/gtm', [
    'options' => [
        "propId" => ""
    ],
    'snippets' => [
        'google-tag-manager' => __DIR__ . '/snippets/gtm.php',
        'google-tag-manager-noscript' => __DIR__ . '/snippets/gtm-noscript.php'
    ]
]);
