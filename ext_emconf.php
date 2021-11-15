<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Flexible News',
    'description' => 'Flexible news extension to use pages as news articles',
    'category' => 'fe',
    'version' => '2.0.0-dev',
    'state' => 'stable',
    'author' => 'ITplusX',
    'author_email' => 'mail@itplusx.de',
    'author_company' => 'ITplusX GmbH',
    'clearCacheOnLoad' => 1,
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'flexible_pages' => '1.0.0-2.1.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
