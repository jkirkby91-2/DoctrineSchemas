<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Rating
 *
 * @package Jkirkby91\DoctrineSchemas
 * @author James Kirkby <jkirkby91@gmail.com>
 *
 * @ORM\HasLifeCycleCallBacks
 * @ORM\Entity(repositoryClass="App\Repositories\RatingRepository")
 * @ORM\Table(name="rating", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 */
class Rating extends \App\Entities\Thing
{

    /**
     * @ORM\ManyToOne(targetEntity="\App\Entities\AggregateRating", fetch="EAGER", inversedBy="ratings", cascade={"persist"})
     */
    protected $aggregateRating;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="\ApiArchitect\Compass\Entities\User", fetch="EAGER", cascade={"persist"})
     */
    protected $author;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=true, unique=false)
     */
    protected $bestRating;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=false, unique=false)
     */
    protected $ratingValue;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=true, unique=false)
     */
    protected $worstRating;

    /**
     * Rating constructor.
     *
     * @param $author
     * @param $ratingValue
     * @param $name
     * @param $aggregateRating
     * @param int $bestRating
     * @param int $worstRating
     */
    public function __construct($author, $ratingValue, $name, $aggregateRating, $bestRating = 5, $worstRating = 1)
    {
        $this->author = $author;
        $this->ratingValue = $ratingValue;
        $this->name = $name;
        $this->bestRating = $bestRating;
        $this->worstRating = $worstRating;
        $this->nodeType = 'Rating';
        $this->aggregateRating = $aggregateRating;
    }

    /**
     * @return mixed
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param mixed $aggregateRating
     * @return Rating
     */
    public function setAggregateRating($aggregateRating)
    {
        $this->aggregateRating = $aggregateRating;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     * @return Rating
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return int
     */
    public function getBestRating()
    {
        return $this->bestRating;
    }

    /**
     * @param int $bestRating
     * @return Rating
     */
    public function setBestRating($bestRating)
    {
        $this->bestRating = $bestRating;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    /**
     * @param mixed $ratingValue
     * @return Rating
     */
    public function setRatingValue($ratingValue)
    {
        $this->ratingValue = $ratingValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorstRating()
    {
        return $this->worstRating;
    }

    /**
     * @param int $worstRating
     * @return Rating
     */
    public function setWorstRating($worstRating)
    {
        $this->worstRating = $worstRating;
        return $this;
    }

}