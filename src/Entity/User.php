<?php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity()
 */
class User extends BaseUser
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
   protected $id;
    
    /**
     * @Assert\NotBlank()
     * @Assert\Email(
     *     checkMX = false
     * )
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     
     */
    protected $firstname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
    
     */
    protected $lastname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $grade;

    /**
     */
    protected $plainPassword;

    /**
     * @Assert\NotBlank()
     */
    protected $username;
     /**
     * @ORM\Column(type="string", length=255, nullable=true)

     * @ORM\OneToMany(targetEntity="App\Entity\Reservation", mappedBy="user")
     */
    protected $reservations;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $phone;




    


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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param mixed $grade
     *
     * @return self
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     *
     * @return self
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * @param mixed $reservations
     *
     * @return self
     */
    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }
}