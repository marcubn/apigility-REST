<?php
namespace Library\V1\Rest\Boks;

class BoksResourceFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        return new BoksResource($em);
    }
}
