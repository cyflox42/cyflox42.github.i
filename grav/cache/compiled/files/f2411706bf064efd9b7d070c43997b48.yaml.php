<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/www/htdocs/cyflox/grav/system/config/site.yaml',
    'modified' => 1470170952,
    'data' => [
        'title' => 'Grav',
        'author' => [
            'name' => 'John Appleseed',
            'email' => 'john@email.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'My Grav Site'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
