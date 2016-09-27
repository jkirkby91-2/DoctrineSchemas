<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Place
 *
 * @package app\Entities
 * @ORM\Entity
 * @ORM\Table(name="place")
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\PlaceRepository")
 * @author James Kirkby <jkirkby91@gmail.com>
 * @ORM\MappedSuperclass
 */
class Place extends \Jkirkby91\DoctrineSchemas\Entities\Thing
{

    /**
     * @var ArrayCollection
     * @ORM\OneToOne(targetEntity="PostalAddress",cascade={"persist"})
     * @ORM\JoinColumn(name="address", referencedColumnName="id")
     */
    protected $address;

    /**
     * @var ArrayCollection
     * @ORM\OneToOne(targetEntity="AggregateRating", mappedBy="place", cascade={"persist"})
     */
    protected $aggregateRating;

    /**
     * @ORM\ManyToOne(targetEntity="GeoCoordinates", inversedBy="Place")
     * @ORM\JoinColumn(name="place_id", referencedColumnName="id")
     */
    protected $GeoCoordinates;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $hasMap;

    /**
     * @var ArrayCollection
     * @ORM\OneToOne(targetEntity="ImageObject", mappedBy="place", cascade={"persist"})
     */
    protected $logo;

    /**
     * @var ArrayCollection
     * @ORM\OneToOne(targetEntity="openingHoursSpecification", mappedBy="place", cascade={"persist"})
     */
    protected $openingHoursSpecification;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $photo;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="review", mappedBy="place", cascade={"persist"})
     */
    protected $review;

    /**
     * @var ArrayCollection
     * @ORM\OneToOne(targetEntity="specialOpeningHoursSpecification", mappedBy="place", cascade={"persist"})
     */
    protected $specialOpeningHoursSpecification;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $telephone;

    /**
     * BarberShop constructor.
     *
     * @param $name
     * @param $address
     */
    public function __construct($name,$address)
    {
        $this->setNodeType('Place');
//        $this->address = new ArrayCollection();
//        $this->GeoCoordinates = new ArrayCollection();
        $this->setName($name);
    }

    /**
     * @return mixed
     */
    public function getHasMap()
    {
        return $this->hasMap;
    }

    /**
     * @param mixed $hasMap
     * @return Place
     */
    public function setHasMap($hasMap)
    {
        $this->hasMap = $hasMap;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     * @return Place
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpeningHoursSpecification()
    {
        return $this->openingHoursSpecification;
    }

    /**
     * @param mixed $openingHoursSpecification
     * @return Place
     */
    public function setOpeningHoursSpecification($openingHoursSpecification)
    {
        $this->openingHoursSpecification = $openingHoursSpecification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     * @return Place
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param mixed $review
     * @return Place
     */
    public function setReview($review)
    {
        $this->review = $review;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpecialOpeningHoursSpecification()
    {
        return $this->specialOpeningHoursSpecification;
    }

    /**
     * @param mixed $specialOpeningHoursSpecification
     * @return Place
     */
    public function setSpecialOpeningHoursSpecification($specialOpeningHoursSpecification)
    {
        $this->specialOpeningHoursSpecification = $specialOpeningHoursSpecification;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     * @return Place
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGeoCoordinates()
    {
        return $this->GeoCoordinates;
    }

    /**
     * @param mixed $GeoCoordinates
     * @return Place
     */
    public function setGeoCoordinates(GeoCoordinates $GeoCoordinates)
    {
        $this->GeoCoordinates = $GeoCoordinates;
        return $this;
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
     * @return Place
     */
    public function setAddress(PostalAddress $address)
    {
        $this->address = $address;
        return $this;
    }


}