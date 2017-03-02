<?php

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Event\LifecycleEventArgs;

/**
 * Class GeoCoordinates
 *
 * @package Jkirkby91\DoctrineSchemas
 * @author James Kirkby <jkirkby91@gmail.com>
 *
 * @ORM\MappedSuperclass
 * @ORM\Entity
 * @ORM\Table(name="geo_co_ordinates")
 * @ORM\Entity(repositoryClass="App\Repositories\GeoCoordinatesRepository")
 * @ORM\HasLifeCycleCallBacks
 */
class GeoCoordinates extends \App\Entities\Thing
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
     * BarberShop constructor.
     *
     * @param $longitude
     * @param $latitude
     */
    public function __construct($latitude,$longitude)
    {
        $this->setName($latitude .','. $longitude);
        $this->setNodeType('GeoLocation');
        $this->setLatitude($latitude);
        $this->setLongitude($longitude);
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
     * @param $latitude
     * @return $this
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