<?php
namespace Library\V1\Rest\Athor;

class AthorResourceFactory
{
    public function __invoke($services)
    {
        $em = $services->get('doctrine.entitymanager.orm_default');
        return new AthorResource($em);
    }
}
