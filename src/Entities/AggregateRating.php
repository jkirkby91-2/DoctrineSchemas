<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class AggregateRating
 *
 * @package Jkirkby91\DoctrineSchemas
 * @author James Kirkby <jkirkby91@gmail.com>
 *
 * @ORM\Entity
 * @ORM\HasLifeCycleCallBacks
 * @ORM\Entity(repositoryClass="App\Repositories\AggregateRatingRepository")
 * @ORM\Table(name="aggregate_rating", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 */
class AggregateRating extends \App\Entities\Thing
{

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="\App\Entities\Rating", fetch="EXTRA_LAZY", mappedBy="aggregateRating", cascade={"persist", "remove", "merge"}, orphanRemoval=true))
     */
    protected $ratings;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $ratingCount;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $ratingScore;

    /**
     * AggregateRating constructor.
     */
    public function __construct($name)
    {
        $this->setNodeType('AggregateRating');
        $this->ratings = new ArrayCollection();
        $this->ratingScore = 0;
        $this->ratingCount = 0;
        $this->setName($name.' Aggregate rating');
    }

    /**
     * @return mixed
     */
    public function getRatings()
    {
        return $this->ratings;
    }

    /**
     * @param Rating $rating
     * @return $this
     */
    public function addRating(Rating $rating)
    {
        $this->ratings->add($rating);
        $this->setRatingCount();
        $this->setRatingScore($rating->getRatingValue());
        return $this;
    }

    /**
     * @return int
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * @return $this
     */
    public function setRatingCount()
    {
        $this->ratingCount = bcadd($this->ratingCount,1);
        return $this;
    }

    /**
     * @return int
     */
    public function getRatingScore()
    {
        return $this->ratingScore;
    }

    /**
     * @param $score
     * @return $this
     */
    public function setRatingScore($score)
    {
        $this->ratingScore = bcadd($this->ratingScore,$score);
        return $this;
    }
}