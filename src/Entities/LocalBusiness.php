<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class LocalBusiness
 *
 * @package Jkirkby91\DoctrineSchemas
 * @ORM\Entity
 * @ORM\Table(name="localbusiness")
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\LocalBusinessRepository")
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class LocalBusiness extends \Jkirkby91\DoctrineSchemas\Entities\Place
{
    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $currenciesAccepted;

    /**
     * @var ArrayCollection
     * @ORM\OneToOne(targetEntity="OpeningHoursSpecification", mappedBy="localbusiness", cascade={"persist"})
     */
    protected $openingHours;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $paymentAccepted;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $priceRange;

    /**
     * LocalBusiness constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->setNodeType('LocalBusiness');
//        $this->setLongitude($longitude);
//        $this->setLatitude($latitude);
        $this->address = new ArrayCollection();
        $this->GeoCoordinates = new ArrayCollection();
        $this->setName($name);
    }

    /**
     * @return mixed
     */
    public function getCurrenciesAccepted()
    {
        return $this->currenciesAccepted;
    }

    /**
     * @param mixed $currenciesAccepted
     * @return LocalBusiness
     */
    public function setCurrenciesAccepted($currenciesAccepted)
    {
        $this->currenciesAccepted = $currenciesAccepted;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    /**
     * @param mixed $openingHours
     * @return LocalBusiness
     */
    public function setOpeningHours($openingHours)
    {
        $this->openingHours = $openingHours;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentAccepted()
    {
        return $this->paymentAccepted;
    }

    /**
     * @param mixed $paymentAccepted
     * @return LocalBusiness
     */
    public function setPaymentAccepted($paymentAccepted)
    {
        $this->paymentAccepted = $paymentAccepted;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceRange()
    {
        return $this->priceRange;
    }

    /**
     * @param mixed $priceRange
     * @return LocalBusiness
     */
    public function setPriceRange($priceRange)
    {
        $this->priceRange = $priceRange;
        return $this;
    }

}