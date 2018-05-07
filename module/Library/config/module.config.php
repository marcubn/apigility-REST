<?php
return [
    'controllers' => [
        'factories' => [
            'Library\\V1\\Rpc\\Books\\BooksController' => Library\V1\Rpc\Books\BooksControllerFactory::class,
            'Library\\V1\\Rpc\\Authors\\Controller' => \Library\V1\Rpc\Authors\AuthorsControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'library.rpc.books' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/book',
                    'defaults' => [
                        'controller' => 'Library\\V1\\Rpc\\Books\\BooksController',
                        'action' => 'books',
                    ],
                ],
            ],
            'library.rpc.authors' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/author/:id',
                    'defaults' => [
                        'controller' => 'Library\\V1\\Rpc\\Authors\\Controller',
                        'action' => 'authors',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'library.rpc.books',
            1 => 'library.rpc.authors',
        ],
    ],
    'zf-rpc' => [
        'Library\\V1\\Rpc\\Books\\Controller' => [
            'service_name' => 'Books',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'library.rpc.books',
        ],
        'Library\\V1\\Rpc\\Authors\\Controller' => [
            'service_name' => 'Authors',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'library.rpc.authors',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Library\\V1\\Rpc\\Books\\Controller' => 'Json',
            'Library\\V1\\Rpc\\Authors\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'Library\\V1\\Rpc\\Books\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'Library\\V1\\Rpc\\Authors\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'Library\\V1\\Rpc\\Books\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/json',
            ],
            'Library\\V1\\Rpc\\Authors\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'doctrine' => [
        'driver' => [
            __NAMESPACE__ . '_driver' => [
                'class' => Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
                /*'paths' => [
                    0 => __DIR__ . '/../src//Entity',
                ],*/
            ],
            'orm_default' => [
                'drivers' => [
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ],
            ],
        ],
    ],
    'zf-content-validation' => [
        'Library\\V1\\Rpc\\Books\\Controller' => [
            'input_filter' => 'Library\\V1\\Rpc\\Books\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Library\\V1\\Rpc\\Books\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'test',
            ],
        ],
    ],
];
