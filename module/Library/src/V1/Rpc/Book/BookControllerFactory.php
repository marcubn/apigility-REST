<?php
namespace Library\V1\Rpc\Book;

use Zend\ServiceManager\ServiceLocatorInterface;

class BookControllerFactory
{
    public function __invoke(ServiceLocatorInterface $serviceLocator) {
        $controllerPluginManager = $serviceLocator;
        $serviceManager = $controllerPluginManager->get('ServiceManager');
        $em = $serviceManager->get('doctrine.entitymanager.orm_default');
        return new BookController($em);
    }

    /*
    public function __invoke($controllers)
    {
        return new BookController();
    }
    */
}
