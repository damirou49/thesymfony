<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Page
 *
 * @ORM\Table(name="passenger")
 * @ORM\Entity()
 */

class Passenger 
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
    protected $civility;
    /**
     * @ORM\Column(type="datetime", nullable=true)
      * @Assert\NotBlank()
    
     */
    protected $birthdate;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
      * @Assert\NotBlank()
     
     */
    protected $firstName;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
      * @Assert\NotBlank()
     
     */
    protected $lastName;
     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Reservation")
      * @Assert\NotBlank()
     * @ORM\JoinColumn(nullable=true)
     */
    private $reservation;









    

    

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
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * @param mixed $civility
     *
     * @return self
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param mixed $birthdate
     *
     * @return self
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * @param mixed $reservation
     *
     * @return self
     */
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;

        return $this;
    }
}