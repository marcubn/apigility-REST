<?php
namespace Library\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="authors")
 */
class Author
{

    /**
     * @ORM\Id
     * @ORM\Column(name="id")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(name="name")
     */
    protected $name;

    /**
     * @ORM\OneToMany(targetEntity="Library\Entity\Books", mappedBy="author")
     */
    protected $books;


    /**
     * Constructor.
    */
    public function __construct()
    {
        $this->books = new ArrayCollection();
    }


    // Returns ID of this comment.
    public function getId()
    {
        return $this->id;
    }

    // Sets ID of this comment.
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBooks()
    {
        return $this->books->toArray();
    }

    /**
     * @param mixed $book
     */
    public function setBooks($book)
    {
        $this->books[] = $book;
    }
}
