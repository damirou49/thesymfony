<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\UserInterface;


/**
 * Page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity()
 */



class Page
{
	/**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
   protected $id;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     
     */
    protected $name;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     
     */
    protected $text;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     
     */
    protected $slug;

    /**
     * @ORM\Column(type="datetime", nullable=true)
    
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
    
     */
    protected $udaptedAt;


    

   
   

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUdaptedAt()
    {
        return $this->udaptedAt;
    }

    /**
     * @param mixed $udaptedAt
     *
     * @return self
     */
    public function setUdaptedAt($udaptedAt)
    {
        $this->udaptedAt = $udaptedAt;

        return $this;
    }
}