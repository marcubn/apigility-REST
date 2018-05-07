<?php
namespace Library;

use ZF\Apigility\Provider\ApigilityProviderInterface;
use Zend\ServiceManager\ServiceManager;

class Module implements ApigilityProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return [
            'ZF\Apigility\Autoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src',
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'EntityManager' => function (ServiceManager $sm) {
                    //$instance = $sm->get('Doctrine\ORM\EntityManager');
                    //$instance->setServiceManager($sm);
                    // Do some other configuration
                    return $sm->get('doctrine.entitymanager.orm_default');

                    //return $instance;
                },
            ),
        );
    }
}
