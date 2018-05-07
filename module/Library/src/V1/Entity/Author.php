<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="authors")
 */
class Comment
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
     * @ORM\OneToMany(targetEntity="\Application\Entity\Book", mappedBy="author")
     * @ORM\JoinColumn(name="id", referencedColumnName="author_id")
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
        return $this->books;
    }

    /**
     * @param mixed $book
     */
    public function setBooks($book)
    {
        $this->books[] = $book;
    }


    
    
}