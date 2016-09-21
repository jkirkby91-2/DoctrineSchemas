<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Review
 *
 * @package Jkirkby91\DoctrineSchemas
 * @author James Kirkby <me@jameskirkby.com>
 *
 * @ORM\Entity
 * @ORM\Table(name="review", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\ReviewRepository")
 */
class Review extends \Jkirkby91\DoctrineSchemas\CreativeWork
{

    //@TODO link target review thing
    protected $itemReviewed;

    /**
     * @Gedmo\Blameable(on="create")
     * @ORM\Column(type="text", nullable=true)
     */
    protected $reviewBody;

    /**
     * @Gedmo\Blameable(on="create")
     * @ORM\Column(type="integer", nullable=false, unique=false)
     */
    protected $reviewRating;

    /**
     * Review constructor.
     * @param $itemReviewed
     * @param $reviewRating
     */
    public function __construct($itemReviewed, $reviewRating)
    {
        $this->itemReviewed = $itemReviewed;
        $this->reviewRating = $reviewRating;
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
     * @return Review
     */
    public function setItemReviewed($itemReviewed)
    {
        $this->itemReviewed = $itemReviewed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReviewBody()
    {
        return $this->reviewBody;
    }

    /**
     * @param mixed $reviewBody
     * @return Review
     */
    public function setReviewBody($reviewBody)
    {
        $this->reviewBody = $reviewBody;
        return $this;
    }

    /**
     * @return null
     */
    public function getReviewRating()
    {
        return $this->reviewRating;
    }

    /**
     * @param null $reviewRating
     * @return Review
     */
    public function setReviewRating($reviewRating)
    {
        $this->reviewRating = $reviewRating;
        return $this;
    }
}