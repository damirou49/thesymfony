<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\UserInterface;


/**
 * Page
 *
 * @ORM\Table(name="flight")
 * @ORM\Entity()
 */

class Flight{

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
     * @ORM\ManyToOne(targetEntity="App\Entity\Airport")
     * @Assert\NotBlank()
     */
    private $airportFrom;
     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Airport")
     * @ORM\JoinColumn(nullable=true)
     * @Assert\NotBlank()
     */
    private $airportTo;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Assert\NotBlank()
    
     */
    protected $dateFrom;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @ORM\JoinColumn(nullable=true)
     * @Assert\NotBlank()
    */
    protected $dateTo;
    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     * @Assert\NotBlank()
     * @Assert\NotBlank()
     */
    private $duration;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     * @Assert\NotBlank()

     */
    private $price;







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
    public function getAirportFrom()
    {
        return $this->airportFrom;
    }

    /**
     * @param mixed $airportFrom
     *
     * @return self
     */
    public function setAirportFrom($airportFrom)
    {
        $this->airportFrom = $airportFrom;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAirportTo()
    {
        return $this->airportTo;
    }

    /**
     * @param mixed $airportTo
     *
     * @return self
     */
    public function setAirportTo($airportTo)
    {
        $this->airportTo = $airportTo;

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
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}