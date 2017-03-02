<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Event\LifecycleEventArgs;

/**
 * Class OpeningHoursSpecification
 *
 * @package Jkirkby91\DoctrineSchemas
 * @author James Kirkby <jkirkby91@gmail.com>
 *
 * @ORM\Entity
 * @ORM\HasLifeCycleCallbacks
 * @ORM\Table(name="opening_hours_specification")
 * @ORM\Entity(repositoryClass="App\Repositories\OpeningHoursRepository")
 */
class OpeningHoursSpecification extends \App\Entities\Thing
{

    /**
     * @ORM\Column(type="datetime", nullable=false, unique=false)
     */
    protected $opens;

    /**
     * @ORM\Column(type="datetime", nullable=false, unique=false)
     */
    protected $closes;

    /**
     * @ORM\Column(type="string", nullable=false, unique=false)
     */
    protected $daysOfWeek;

    /**
     * @ORM\Column(type="string", nullable=false, unique=false)
     */
    protected $timezone;

    /**
     * OpeningHoursSpecification constructor.
     *
     * @param $name
     * @param \DateTime $opens
     * @param \DateTime $closes
     * @param $daysOfWeek
     * @param string $timezone
     */
    public function __construct($name,\DateTime $opens, \DateTime $closes, $daysOfWeek, $timezone = 'GMT')
    {
        $this->name = $name;
        $this->opens = $opens;
        $this->closes = $closes;
        $this->timezone = $timezone;
        $this->daysOfWeek = $daysOfWeek;
        $this->nodeType = 'Opening Hours';
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
     * @return mixed
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param mixed $timezone
     * @return OpeningHoursSpecification
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

}