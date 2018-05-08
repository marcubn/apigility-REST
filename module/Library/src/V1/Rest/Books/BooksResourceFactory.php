<?php
namespace Library\V1\Rest\Books;

class BooksResourceFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        return new BooksResource($em);
    }
}
