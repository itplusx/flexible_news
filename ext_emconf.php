<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Flexible News',
    'description' => 'Flexible news extension to use pages as news articles',
    'category' => 'fe',
    'version' => '2.0.0',
    'state' => 'stable',
    'author' => 'ITplusX',
    'author_email' => 'mail@itplusx.de',
    'author_company' => 'ITplusX GmbH',
    'clearCacheOnLoad' => 1,
    'constraints' => [
        'depends' => [
            'typo3' => '10.0.0-11.5.99',
            'flexible_pages' => '2.2.0-2.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
