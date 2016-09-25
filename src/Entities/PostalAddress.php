<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Address
 *
 * @package App\Entities
 * @author James Kirkby <jkirkby91@gmail.com>
 *
 * @ORM\Entity
 * @ORM\Table(name="postaladdress")
 * @ORM\HasLifecycleCallbacks()
 */
class PostalAddress extends \Jkirkby91\DoctrineSchemas\Entities\Thing
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var
     * @ORM\Column(type="string")
     */
    protected $addressLine1;

    /**
     * @var
     * @ORM\Column(type="string")
     */
    protected $addressLine2;

    /**
     * @var
     * @ORM\Column(type="string")
     */
    protected $addressCity;

    /**
     * @var
     * @ORM\Column(type="string")
     */
    protected $addressState;

    /**
     * @var
     * @ORM\Column(type="string")
     */
    protected $addressCountry;

    /**
     * @var
     * @ORM\Column(type="string")
     */
    protected $addressZip;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="Place", inversedBy="postaladdress")
     */
    protected $place;

    /**
     * PostalAddress constructor.
     * @param $addressLine1
     * @param $addressLine2
     * @param $addressCity
     * @param $addressState
     * @param $addressCountry
     * @param $addressZip
     */
    public function __construct($addressLine1, $addressLine2, $addressCity, $addressState, $addressCountry, $addressZip, $name)
    {
        $this->addressLine1 = $addressLine1;
        $this->addressLine2 = $addressLine2;
        $this->addressCity = $addressCity;
        $this->addressState = $addressState;
        $this->addressCountry = $addressCountry;
        $this->addressZip = $addressZip;
        parent::__construct($name);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * @param mixed $addressLine1
     * @return $this
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * @param mixed $addressLine2
     * @return $this
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressCity()
    {
        return $this->addressCity;
    }

    /**
     * @param mixed $addressCity
     * @return $this
     */
    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressState()
    {
        return $this->addressState;
    }

    /**
     * @param mixed $addressState
     * @return $this
     */
    public function setAddressState($addressState)
    {
        $this->addressState = $addressState;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * @param mixed $addressCountry
     * @return $this
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressZip()
    {
        return $this->addressZip;
    }

    /**
     * @param mixed $addressZip
     * @return $this
     */
    public function setAddressZip($addressZip)
    {
        $this->addressZip = $addressZip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $place
     * @return PostalAddress
     */
    public function setPlace($place)
    {
        $this->place = $place;
        return $this;
    }

}