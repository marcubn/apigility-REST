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
        $repo = $this->em->getRepository(Book::class);
        var_dump($repo);exit;
    }
}
