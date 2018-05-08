<?php
namespace Library\V1\Rpc\Book;

use Library\Entity\Book;
use Zend\Mvc\Controller\AbstractActionController;
use Doctrine\ORM\EntityManager;

class BookController extends AbstractActionController
{
    protected $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function bookAction()
    {
        $data   = $this->getRequest()->getContent();
        var_dump($data);exit;
        $projects = $this->getMapper()->findAll();
        var_dump($projects);exit;
        $ceva = $this->getEvent()->getRouteMatch()->getParam('dataset_id');
        $repo = $this->em->getRepository(Book::class);
        var_dump($repo);exit;
    }
}
