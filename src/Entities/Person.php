<?php

namespace App\Entities;

use App\Entities\Thing;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Person
 *
 * @Gedmo\Loggable
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="App\Repositories\PersonRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"person" = "Person", "user" = "ApiArchitect\Compass\Entities\User"})
 * @ORM\HasLifeCycleCallBacks
 * @TODO SEE IF WE CAN EGAR LOAD THE DISCRIMINATED ENTITY
 * @package app\Entities
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class Person extends Thing
{

    /**
     * @var
     * @ORM\Column(type="string",unique=false, nullable=true)
     */
    protected $additionalName;

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
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Person", mappedBy="person", cascade={"persist"})
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
     * @TODO  needs to be many to many 
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Person", mappedBy="person", cascade={"persist"})
     */
    protected $knows;

    /**
     * @var
     */
    protected $nationality;

    /**
     * @var
     */
    protected $workLocation;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="LocalBusiness", mappedBy="localbusiness", cascade={"persist"})
     */
    protected $worksFor;

    /**
     * Person constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->setName($name);
        $this->setNodeType('Person');
        $this->knows = new ArrayCollection();
        $this->follows = new ArrayCollection();
        $this->worksFor = new ArrayCollection();
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