<?php
return [
    'controllers' => [
        'factories' => [
            \Library\V1\Rpc\Books\BooksController::class => \Library\V1\Rpc\Books\BooksControllerFactory::class,
            'Library\\V1\\Rpc\\Authors\\Controller' => \Library\V1\Rpc\Authors\AuthorsControllerFactory::class,
            'Library\\V1\\Rpc\\Book\\Controller' => \Library\V1\Rpc\Book\BookControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'library.rpc.books' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/book',
                    'defaults' => [
                        'controller' => \Library\V1\Rpc\Books\BooksController::class,
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
            'library.rpc.book' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/book/:id',
                    'defaults' => [
                        'controller' => 'Library\\V1\\Rpc\\Book\\Controller',
                        'action' => 'book',
                        'id' => 'id',
                    ],
                ],
            ],
            'library.rest.boks' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/boks[/:boks_id]',
                    'defaults' => [
                        'controller' => 'Library\\V1\\Rest\\Boks\\Controller',
                    ],
                ],
            ],
            'library.rest.athor' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/athor[/:athor_id]',
                    'defaults' => [
                        'controller' => 'Library\\V1\\Rest\\Athor\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'library.rpc.books',
            1 => 'library.rpc.authors',
            2 => 'library.rpc.book',
            3 => 'library.rest.boks',
            4 => 'library.rest.athor',
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
        'Library\\V1\\Rpc\\Book\\Controller' => [
            'service_name' => 'Book',
            'http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'route_name' => 'library.rpc.book',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Library\\V1\\Rpc\\Books\\Controller' => 'Json',
            'Library\\V1\\Rpc\\Authors\\Controller' => 'Json',
            'Library\\V1\\Rpc\\Book\\Controller' => 'Json',
            'Library\\V1\\Rest\\Boks\\Controller' => 'HalJson',
            'Library\\V1\\Rest\\Athor\\Controller' => 'HalJson',
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
            'Library\\V1\\Rpc\\Book\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'Library\\V1\\Rest\\Boks\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Library\\V1\\Rest\\Athor\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
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
            'Library\\V1\\Rpc\\Book\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/json',
            ],
            'Library\\V1\\Rest\\Boks\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/json',
            ],
            'Library\\V1\\Rest\\Athor\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'doctrine' => [
        'driver' => [
            'Library_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    0 => './module/Library/Entity',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Library' => 'Library_driver',
                ],
            ],
        ],
    ],
    'zf-content-validation' => [
        'Library\\V1\\Rpc\\Books\\Controller' => [
            'input_filter' => 'Library\\V1\\Rpc\\Books\\Validator',
        ],
        'Library\\V1\\Rpc\\Book\\Controller' => [
            'input_filter' => 'Library\\V1\\Rpc\\Book\\Validator',
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
        'Library\\V1\\Rpc\\Book\\Validator' => [],
    ],
    'service_manager' => [
        'factories' => [
            \Library\V1\Rest\Book\BookResource::class => \Library\V1\Rest\Book\BookResourceFactory::class,
            \Library\V1\Rest\Boks\BoksResource::class => \Library\V1\Rest\Boks\BoksResourceFactory::class,
            \Library\V1\Rest\Athor\AthorResource::class => \Library\V1\Rest\Athor\AthorResourceFactory::class,
        ],
    ],
    'zf-rest' => [
        'Library\\V1\\Rest\\Boks\\Controller' => [
            'listener' => \Library\V1\Rest\Boks\BoksResource::class,
            'route_name' => 'library.rest.boks',
            'route_identifier_name' => 'boks_id',
            'collection_name' => 'boks',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Library\V1\Rest\Boks\BoksEntity::class,
            'collection_class' => \Library\V1\Rest\Boks\BoksCollection::class,
            'service_name' => 'boks',
        ],
        'Library\\V1\\Rest\\Athor\\Controller' => [
            'listener' => \Library\V1\Rest\Athor\AthorResource::class,
            'route_name' => 'library.rest.athor',
            'route_identifier_name' => 'athor_id',
            'collection_name' => 'athor',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Library\V1\Rest\Athor\AthorEntity::class,
            'collection_class' => \Library\V1\Rest\Athor\AthorCollection::class,
            'service_name' => 'athor',
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Library\V1\Rest\Boks\BoksEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'library.rest.boks',
                'route_identifier_name' => 'boks_id',
                'hydrator' => \DoctrineModule\Stdlib\Hydrator\DoctrineObject::class,
            ],
            \Library\V1\Rest\Boks\BoksCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'library.rest.boks',
                'route_identifier_name' => 'boks_id',
                'is_collection' => true,
            ],
            \Library\V1\Rest\Athor\AthorEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'library.rest.athor',
                'route_identifier_name' => 'athor_id',
                'hydrator' => \DoctrineModule\Stdlib\Hydrator\DoctrineObject::class,
            ],
            \Library\V1\Rest\Athor\AthorCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'library.rest.athor',
                'route_identifier_name' => 'athor_id',
                'is_collection' => true,
            ],
        ],
    ],
];
