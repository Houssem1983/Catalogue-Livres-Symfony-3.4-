<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="author")
 * @UniqueEntity(fields = {"name", "surname", "middleName"}, message="Un auteur avec ce nom existe déjà.")
 */
 
class Author {
	/**
	 * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
     * @ORM\Column(type="string", length=200)
     */
	private $name;
	
	/**
     * @ORM\Column(type="string", length=200)
     */
	private $surname;
	
	/**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
	private $middleName;
	
	/**
	 * Many Authors have Many Books. 
     * @ORM\ManyToMany(targetEntity="Book", mappedBy="authors")
     */	
	private $books;
	
	public function __construct() {
        $this->books = new ArrayCollection();
    }
	

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Author
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Author
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set middleName
     *
     * @param string $middleName
     *
     * @return Author
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * Get middleName
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Add book
     *
     * @param \AppBundle\Entity\Book $book
     *
     * @return Author
     */
    public function addBook(\AppBundle\Entity\Book $book)
    {
        $this->books[] = $book;

        return $this;
    }

    /**
     * Remove book
     *
     * @param \AppBundle\Entity\Book $book
     */
    public function removeBook(\AppBundle\Entity\Book $book)
    {
        $this->books->removeElement($book);
    }

    /**
     * Get books
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBooks()
    {
        return $this->books;
    }
	
	public function getFullName() 
	{
		$middleName = empty($this->middleName)?'':(mb_substr($this->middleName,0,1,'UTF-8').'. ');
		return $this->surname.' '.mb_substr($this->name,0,1,'UTF-8').'. '.$middleName;
	}
}
