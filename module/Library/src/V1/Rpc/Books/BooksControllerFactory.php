<?php
namespace Library\V1\Rpc\Books;

use Zend\ServiceManager\ServiceLocatorInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Library\V1\Rpc\Books\BooksController;

class BooksControllerFactory
{

    public function __invoke(ServiceLocatorInterface $serviceLocator) {
        $controllerPluginManager = $serviceLocator;
        $serviceManager = $controllerPluginManager->get('ServiceManager');
        $em = $serviceManager->get('Doctrine\ORM\EntityManager');
        return new BooksController($em);
    }

    /*
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {

        //var_dump($requestedName);exit;
        $mapper = new BooksController();
        $mapper->setEntityManager($container->get('doctrine.entitymanager.orm_default'));
        return $mapper;
    }

    public function __invoke($controllers)
    {

        return new BooksController();
    }*/
}
