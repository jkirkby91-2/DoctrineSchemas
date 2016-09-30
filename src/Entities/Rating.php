<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Rating
 *
 * @package Jkirkby91\DoctrineSchemas
 * @ORM\Entity
 * @ORM\Table(name="rating", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="App\Repositories\RatingRepository")
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class Rating extends \Jkirkby91\DoctrineSchemas\Entities\Thing
{

    //@TODO link person
    protected $author;

    /**
     * @var int
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $bestRating;

    /**
     * @var int
     * @ORM\Column(type="datetime", nullable=false)
     */
    protected $ratingValue;

    /**
     * @var int
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $worstRating;

    /**
     * Rating constructor.
     * @param $author
     * @param $bestRating
     * @param $ratingValue
     * @param $worstRating
     */
    public function __construct($author, $bestRating = 5, $ratingValue, $worstRating = 1)
    {
        $this->author = $author;
        $this->bestRating = $bestRating;
        $this->ratingValue = $ratingValue;
        $this->worstRating = $worstRating;
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