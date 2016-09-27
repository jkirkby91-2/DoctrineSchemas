<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class GeoCoordinates
 * @package Jkirkby91\DoctrineSchemas
 * @ORM\MappedSuperclass
 * @ORM\Entity
 * @ORM\Table(name="geolocation")
 */
class GeoCoordinates extends \Jkirkby91\LumenDoctrineComponent\Entities\LumenDoctrineEntity
{

    /**
     * @ORM\Column(type="string", length=45, nullable=false)
     */
    protected $longitude;

    /**
     * @ORM\Column(type="string", length=45, nullable=false)
     */
    protected $latitude;

    /**
     * @ORM\OneToMany(targetEntity="Place", mappedBy="geocoordinates")
     */
    protected $place;

    /**
     * BarberShop constructor.
     *
     * @param $longitude
     * @param $latitude
     * @param $address
     */
    public function __construct($longitude, $latitude)
    {
        $this->setNodeType('GeoLocation');
        $this->setLongitude($longitude);
        $this->setLatitude($latitude);
//        $this->place = new ArrayCollection();
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