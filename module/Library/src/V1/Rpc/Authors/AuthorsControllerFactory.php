<?php
namespace Library\V1\Rpc\Authors;

class AuthorsControllerFactory
{
    public function __invoke($controllers)
    {
        return new AuthorsController();
    }
}
