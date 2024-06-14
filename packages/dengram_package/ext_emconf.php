<?php

/**
 * Extension Manager/Repository config file for ext "dengram_package".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'dengram-package',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Dengram\\DengramPackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Anne',
    'author_email' => 'annie.ezc@gmail.com',
    'author_company' => 'Dengram',
    'version' => '1.0.0',
];
