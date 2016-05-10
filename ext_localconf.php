<?php

/**
 * Configures a simple plugin
 */
\CedricZiel\Simplebase\Framework\Utility\ExtensionUtility::configurePlugin(
    'CedricZiel.'. $_EXTKEY,
    'simplebase_news',
    ['News' => 'index'],
    [],
    \CedricZiel\Simplebase\Framework\Utility\ExtensionUtility::PLUGIN_TYPE_PLUGIN,
    [
        CedricZiel\SimplebaseNews\SimplebaseNewsExtension::class,
    ]
);
