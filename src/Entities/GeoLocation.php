<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class GeoLocation
 * @package Jkirkby91\DoctrineSchemas
 * @ORM\MappedSuperclass
 * @ORM\Entity
 * @ORM\Table(name="geolocation")
 * @ORM\HasLifecycleCallbacks
 */
class GeoLocation extends \Jkirkby91\DoctrineSchemas\Entities\Place
{

    protected $addressCountry;

    protected $elavation;

    /**
     * @ORM\Column(type="string", length=45, nullable=false)
     */
    protected $longitude;

    /**
     * @ORM\Column(type="string", length=45, nullable=false)
     */
    protected $latitude;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $postcode;

    /**
     * BarberShop constructor.
     *
     * @param $longitude
     * @param $latitude
     * @param $name
     * @param $address
     */
    public function __construct($longitude, $latitude,$name,$address)
    {
        $this->setNodeType('GeoLocation');
        $this->setLongitude($longitude);
        $this->setLatitude($latitude);
        $this->setName($name);
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
     * @return GeoLocation
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getElavation()
    {
        return $this->elavation;
    }

    /**
     * @param mixed $elavation
     * @return GeoLocation
     */
    public function setElavation($elavation)
    {
        $this->elavation = $elavation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     * @return GeoLocation
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     * @return GeoLocation
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     * @return GeoLocation
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }
}