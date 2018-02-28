<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Page
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity()
 */

class Reservation
{

	/**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
   protected $id;
   /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     * @Assert\NotBlank()

     */
    private $number;

     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     
     */
    protected $name;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy=reservations)
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Flight")
     * @ORM\JoinColumn(nullable=true)
     */
    private $flight;
    /**
     * @ORM\Column(type="datetime", nullable=true)
    
     */
    protected $dateFrom;

    /**
     * @ORM\Column(type="datetime", nullable=true)
    
     */
    protected $dateTo;
    /**
     * @ORM\Column(type="datetime", nullable=true)
    
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @ORM\OneToMany(targetEntity="App\Entity\Passenger", mappedBy="reservation")
     */
    protected $passengers;

  







    

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
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * @param mixed $flight
     *
     * @return self
     */
    public function setFlight($flight)
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * @param mixed $dateFrom
     *
     * @return self
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * @param mixed $dateTo
     *
     * @return self
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

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
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * @param mixed $passengers
     *
     * @return self
     */
    public function setPassengers($passengers)
    {
        $this->passengers = $passengers;

        return $this;
    }
}