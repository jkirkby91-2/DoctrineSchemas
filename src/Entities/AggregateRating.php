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
    protected $itemReviewed;

    protected $ratingCount;

    protected $reviewCount;

    /**
     * AggregateRating constructor.
     * @param $itemReviewed
     */
    public function __construct($itemReviewed)
    {
        $this->itemReviewed = $itemReviewed;
    }

    /**
     * @return mixed
     */
    public function getItemReviewed()
    {
        return $this->itemReviewed;
    }

    /**
     * @param mixed $itemReviewed
     * @return AggregateRating
     */
    public function setItemReviewed($itemReviewed)
    {
        $this->itemReviewed = $itemReviewed;
        return $this;
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