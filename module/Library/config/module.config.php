<?php
return [
    'controllers' => [
        'factories' => [
            'Library\\V1\\Rpc\\Books\\BooksController' => 'Library\\V1\\Rpc\\Books\\BooksControllerFactory',
        ],
    ],
    'router' => [
        'routes' => [
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
            'library.rest.books' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/books[/:books_id]',
                    'defaults' => [
                        'controller' => 'Library\\V1\\Rest\\Books\\Controller',
                    ],
                ],
            ],
            'library.rest.author' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/author[/:author_id]',
                    'defaults' => [
                        'controller' => 'Library\\V1\\Rest\\Author\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            3 => 'library.rest.boks',
            4 => 'library.rest.athor',
            0 => 'library.rest.books',
            5 => 'library.rest.author',
        ],
    ],
    'zf-rpc' => [],
    'zf-content-negotiation' => [
        'controllers' => [
            'Library\\V1\\Rest\\Boks\\Controller' => 'HalJson',
            'Library\\V1\\Rest\\Athor\\Controller' => 'HalJson',
            'Library\\V1\\Rest\\Books\\Controller' => 'HalJson',
            'Library\\V1\\Rest\\Author\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
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
            'Library\\V1\\Rest\\Books\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Library\\V1\\Rest\\Author\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Library\\V1\\Rest\\Boks\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/json',
            ],
            'Library\\V1\\Rest\\Athor\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/json',
            ],
            'Library\\V1\\Rest\\Books\\Controller' => [
                0 => 'application/vnd.library.v1+json',
                1 => 'application/json',
            ],
            'Library\\V1\\Rest\\Author\\Controller' => [
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
    'zf-content-validation' => [],
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
            'Library\\V1\\Rest\\Book\\BookResource' => 'Library\\V1\\Rest\\Book\\BookResourceFactory',
            \Library\V1\Rest\Boks\BoksResource::class => \Library\V1\Rest\Boks\BoksResourceFactory::class,
            \Library\V1\Rest\Athor\AthorResource::class => \Library\V1\Rest\Athor\AthorResourceFactory::class,
            \Library\V1\Rest\Books\BooksResource::class => \Library\V1\Rest\Books\BooksResourceFactory::class,
            \Library\V1\Rest\Author\AuthorResource::class => \Library\V1\Rest\Author\AuthorResourceFactory::class,
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
        'Library\\V1\\Rest\\Books\\Controller' => [
            'listener' => \Library\V1\Rest\Books\BooksResource::class,
            'route_name' => 'library.rest.books',
            'route_identifier_name' => 'books_id',
            'collection_name' => 'books',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Library\V1\Rest\Books\BooksEntity::class,
            'collection_class' => \Library\V1\Rest\Books\BooksCollection::class,
            'service_name' => 'Books',
        ],
        'Library\\V1\\Rest\\Author\\Controller' => [
            'listener' => \Library\V1\Rest\Author\AuthorResource::class,
            'route_name' => 'library.rest.author',
            'route_identifier_name' => 'author_id',
            'collection_name' => 'author',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Library\V1\Rest\Author\AuthorEntity::class,
            'collection_class' => \Library\V1\Rest\Author\AuthorCollection::class,
            'service_name' => 'Author',
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
            \Library\V1\Rest\Books\BooksEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'library.rest.books',
                'route_identifier_name' => 'books_id',
                'hydrator' => \DoctrineModule\Stdlib\Hydrator\DoctrineObject::class,
            ],
            \Library\V1\Rest\Books\BooksCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'library.rest.books',
                'route_identifier_name' => 'books_id',
                'is_collection' => true,
            ],
            \Library\V1\Rest\Author\AuthorEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'library.rest.author',
                'route_identifier_name' => 'author_id',
                'hydrator' => \DoctrineModule\Stdlib\Hydrator\DoctrineObject::class,
            ],
            \Library\V1\Rest\Author\AuthorCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'library.rest.author',
                'route_identifier_name' => 'author_id',
                'is_collection' => true,
            ],
        ],
    ],
];
