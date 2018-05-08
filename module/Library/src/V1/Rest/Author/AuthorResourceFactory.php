<?php
namespace Library\V1\Rest\Author;

class AuthorResourceFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        return new AuthorResource($em);
    }
}
