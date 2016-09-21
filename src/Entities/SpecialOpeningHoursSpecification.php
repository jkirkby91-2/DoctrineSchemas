<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class OpeningHoursSpecification
 *
 * @package Jkirkby91\DoctrineSchemas
 * @author James Kirkby <me@jameskirkby.com>
 *
 * @ORM\Entity
 * @ORM\Table(name="specialopeninghoursspecification", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\SpecialOpeningHoursSpecificationRepository")
 */
class SpecialOpeningHoursSpecification extends \Jkirkby91\DoctrineSchemas\OpeningHoursSpecification
{
    /**
     * SpecialOpeningHoursSpecification constructor.
     *
     * @param $name
     * @param \DateTime $closes
     * @param \DateTime $daysOfWeek
     * @param \DateTime $opens
     * @param \DateTime $validFrom
     * @param \DateTime $validThrough
     */
    public function __construct($name,$closes,$daysOfWeek,$opens,$validFrom,$validThrough)
    {
        parent::__construct($name,$closes,$daysOfWeek,$opens,$validFrom,$validThrough);
    }
}