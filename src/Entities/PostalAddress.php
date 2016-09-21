<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class PostalAddress
 *
 * @package Jkirkby91\DoctrineSchemas
 * @ORM\Entity
 * @ORM\Table(name="postaladdress", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\PostalAddressRepository")
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class PostalAddress extends \Jkirkby91\DoctrineSchemas\Entities\Thing
{

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="comment", cascade={"persist"})
     */
    protected $addressCountry;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $addressLocality;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $addressRegion;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $postOfficeBoxNumber;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $postalCode;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $streetAddress;

    /**
     * PostalAddress constructor.
     * @param $addressCountry
     * @param $addressLocality
     * @param $addressRegion
     * @param $postalCode
     * @param $streetAddress
     */
    public function __construct($addressCountry, $addressLocality, $addressRegion, $postalCode, $streetAddress)
    {
        $this->addressCountry = $addressCountry;
        $this->addressLocality = $addressLocality;
        $this->addressRegion = $addressRegion;
        $this->postalCode = $postalCode;
        $this->streetAddress = $streetAddress;
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
     * @return PostalAddress
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressLocality()
    {
        return $this->addressLocality;
    }

    /**
     * @param mixed $addressLocality
     * @return PostalAddress
     */
    public function setAddressLocality($addressLocality)
    {
        $this->addressLocality = $addressLocality;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddressRegion()
    {
        return $this->addressRegion;
    }

    /**
     * @param mixed $addressRegion
     * @return PostalAddress
     */
    public function setAddressRegion($addressRegion)
    {
        $this->addressRegion = $addressRegion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostOfficeBoxNumber()
    {
        return $this->postOfficeBoxNumber;
    }

    /**
     * @param mixed $postOfficeBoxNumber
     * @return PostalAddress
     */
    public function setPostOfficeBoxNumber($postOfficeBoxNumber)
    {
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     * @return PostalAddress
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * @param mixed $streetAddress
     * @return PostalAddress
     */
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
        return $this;
    }
}