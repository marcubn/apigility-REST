<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="authors")
 */
class Author
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")
     */
    protected $id;

    /**
     * @ORM\Column(name="title")
     */
    protected $title;

    /**
     * @ORM\ManyToOne(targetEntity="\Application\Entity\Author", inversedBy="book")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    protected $author;

    // Returns ID of this post.
    public function getId()
    {
        return $this->id;
    }

    // Sets ID of this post.
    public function setId($id)
    {
        $this->id = $id;
    }

    // Returns title.
    public function getTitle()
    {
        return $this->title;
    }

    // Sets title.
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        $author->addBook($this);
    }




}