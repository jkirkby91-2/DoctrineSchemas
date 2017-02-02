<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Class Person
 *
 * @package app\Entities
 * @Gedmo\Loggable
 * @ORM\Entity(repositoryClass="ApiArchitect\Compass\Repositories\PersonRepository")
 * @ORM\Table(name="person")
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class Person extends \Jkirkby91\DoctrineSchemas\Entities\Thing
{

    /**
     * @var
     * @ORM\Column(type="string",unique=false, nullable=true)
     */
    protected $birthDate;

    /**
     * @var
     * @ORM\Column(type="string",unique=false, nullable=true)
     */
    protected $birthPlace;

    /**
     * @var
     */
    protected $follows;

    /**
     * @var
     * @ORM\Column(type="boolean",unique=false, nullable=true)
     */
    protected $gender;

    /**
     * @var
     * @ORM\Column(type="string",unique=false, nullable=true)
     */
    protected $givenName;

    /**
     * @var
     */
    protected $homeLocation;

    /**
     * @var
     * @ORM\Column(type="string",unique=false, nullable=true)
     */
    protected $jobTitle;

    /**
     * @var
     */
    protected $knows;

    /**
     * @var
     */
    protected $nationality;

    /**
     * @var
     */
    protected $owns;

    /**
     * @var
     */
    protected $workLocation;

    /**
     * @var
     */
    protected $worksFor;

    /**
     * Person constructor.
     * @param $email
     * @param $nodeType
     */
    public function __construct($email,$nodeType)
    {
        $this->email = $email;
        parent::__construct($nodeType);
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     * @return Person
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * @param mixed $birthPlace
     * @return Person
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;
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
     * @return Person
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFollows()
    {
        return $this->follows;
    }

    /**
     * @param mixed $follows
     * @return Person
     */
    public function setFollows($follows)
    {
        $this->follows = $follows;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     * @return Person
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param mixed $givenName
     * @return Person
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHomeLocation()
    {
        return $this->homeLocation;
    }

    /**
     * @param mixed $homeLocation
     * @return Person
     */
    public function setHomeLocation($homeLocation)
    {
        $this->homeLocation = $homeLocation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param mixed $jobTitle
     * @return Person
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKnows()
    {
        return $this->knows;
    }

    /**
     * @param mixed $knows
     * @return Person
     */
    public function setKnows($knows)
    {
        $this->knows = $knows;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param mixed $nationality
     * @return Person
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOwns()
    {
        return $this->owns;
    }

    /**
     * @param mixed $owns
     * @return Person
     */
    public function setOwns($owns)
    {
        $this->owns = $owns;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorkLocation()
    {
        return $this->workLocation;
    }

    /**
     * @param mixed $workLocation
     * @return Person
     */
    public function setWorkLocation($workLocation)
    {
        $this->workLocation = $workLocation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorksFor()
    {
        return $this->worksFor;
    }

    /**
     * @param mixed $worksFor
     * @return Person
     */
    public function setWorksFor($worksFor)
    {
        $this->worksFor = $worksFor;
        return $this;
    }

}