<?php
namespace Library\V1\Rpc\Books;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use ZF\ContentNegotiation\ViewModel;
use Doctrine\ORM\EntityManager;

class BooksController extends AbstractActionController
{
    protected $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    /**
     * @var EntityManager
    */
    //protected $em;

    public function getEntityManager()
    {
        if (null === $this->em) {
            $this->em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }
        return $this->em;
    }

    public function booksAction()
    {
        var_dump($this->em);exit;
        $serviceLocator = $this->getApplication()->getServiceLocator();
        $objectManager = $serviceLocator->get('doctrine.entitymanager.orm_default');
        var_dump($objectManager);exit;

        $repo = $this->em->getRepository('Entity\Book');


        $categorias = $repo->findAll();
        return new ViewModel(['categories'=>$categorias]);


        var_dump($this->getEntityManager());
        /**
        var_dump($this->em);exit;
        $serviceLocator = $this->getApplication()->getServiceLocator();
        $objectManager = $serviceLocator->get('doctrine.entitymanager.orm_default');
        var_dump($objectManager);exit;
        //$entityManager = $container->get('doctrine.entitymanager.orm_default');
        //$repository = $entityManager->getRepository(Post::class);
        var_dump($repository);exit;*/
        return new ViewModel([
            'test' => time()
        ]);
    }
}
