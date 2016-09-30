<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class AggregateRating
 * @package Jkirkby91\DoctrineSchemas
 * @ORM\Entity
 * @ORM\Table(name="aggregaterating", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\AggregateRatingRepository")
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class AggregateRating extends \Jkirkby91\DoctrineSchemas\Entities\Thing
{

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $ratingCount;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $reviewCount;

    /**
     * AggregateRating constructor.
     *
     * @param int $ratingCount
     * @param int $reviewCount
     */
    public function __construct($ratingCount=0,$reviewCount=0)
    {
        $this->ratingCount = $ratingCount;
        $this->reviewCount = $reviewCount;
    }

    /**
     * @return mixed
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * @param mixed $ratingCount
     * @return AggregateRating
     */
    public function setRatingCount($ratingCount)
    {
        $this->ratingCount = $ratingCount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * @param mixed $reviewCount
     * @return AggregateRating
     */
    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
        return $this;
    }
}