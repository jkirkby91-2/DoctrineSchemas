<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class GeoLocation
 * @package Jkirkby91\DoctrineSchemas
 */
class GeoLocation extends \Jkirkby91\DoctrineSchemas\Entities\Thing
{

    protected $address;

    protected $addressCountry;

    protected $elavation;

    protected $longitude;

    protected $latitude;

    protected $postcode;

    /**
     * GeoLocation constructor.
     * @param $longitude
     * @param $latitude
     */
    public function __construct($longitude, $latitude,$name)
    {
        parent::__construct($name);
        $this->longitude = $longitude;
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return GeoLocation
     */
    public function setAddress($address)
    {
        $this->address = $address;
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