<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class OpeningHoursSpecification
 * @package Jkirkby91\DoctrineSchemas
 */
class OpeningHoursSpecification extends \Jkirkby91\DoctrineSchemas\Entities\Thing
{
    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    protected $closes;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    protected $daysOfWeek;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    protected $opens;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $validFrom;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $validThrough;

    /**
     * OpeningHoursSpecification constructor.
     *
     * @param $name
     * @param \DateTime $closes
     * @param \DateTime $daysOfWeek
     * @param \DateTime $opens
     * @param \DateTime $validFrom
     * @param \DateTime $validThrough
     */
    public function __construct($name,\DateTime $closes, \DateTime $daysOfWeek, \DateTime $opens, \DateTime $validFrom, \DateTime $validThrough)
    {
        parent::__construct($name);
        $this->closes = $closes;
        $this->daysOfWeek = $daysOfWeek;
        $this->opens = $opens;
        $this->validFrom = $validFrom;
        $this->validThrough = $validThrough;
    }

    /**
     * @return \DateTime
     */
    public function getCloses()
    {
        return $this->closes;
    }

    /**
     * @param \DateTime $closes
     * @return OpeningHoursSpecification
     */
    public function setCloses($closes)
    {
        $this->closes = $closes;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDaysOfWeek()
    {
        return $this->daysOfWeek;
    }

    /**
     * @param \DateTime $daysOfWeek
     * @return OpeningHoursSpecification
     */
    public function setDaysOfWeek($daysOfWeek)
    {
        $this->daysOfWeek = $daysOfWeek;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * @param \DateTime $opens
     * @return OpeningHoursSpecification
     */
    public function setOpens($opens)
    {
        $this->opens = $opens;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param \DateTime $validFrom
     * @return OpeningHoursSpecification
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param \DateTime $validThrough
     * @return OpeningHoursSpecification
     */
    public function setValidThrough($validThrough)
    {
        $this->validThrough = $validThrough;
        return $this;
    }
}