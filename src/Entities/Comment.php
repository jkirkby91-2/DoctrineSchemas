<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Comment
 *
 * @package Jkirkby91\DoctrineSchemas
 * @ORM\Entity
 * @ORM\Table(name="comment", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\CommentRepository")
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class Comment extends \Jkirkby91\DoctrineSchemas\CreativeWork
{
    /**
     * @ORM\Column(type="integer", nullable=true, unique=false)
     */
    protected $downvoteCount;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="comment", cascade={"persist"})
     */
    protected $childComment;

    /**
     * @ORM\Column(type="integer", nullable=true, unique=false)
     */
    protected $upvoteCount;

    /**
     * Comment constructor.
     *
     * @param $author
     * @param null $text
     */
    public function __construct($author,$text)
    {
        $name = null;
        parent::__construct($author,$text,$name);
        $this->downvoteCount = 0;
        $this->upvoteCount = 0;
        $this->childComment = new ArrayCollection;
    }

    /**
     * @return int
     */
    public function getDownvoteCount()
    {
        return $this->downvoteCount;
    }

    /**
     * @param int $downvoteCount
     * @return Comment
     */
    public function setDownvoteCount($downvoteCount)
    {
        $this->downvoteCount = $downvoteCount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChildComment()
    {
        return $this->childComment;
    }

    /**
     * @param mixed $parentItem
     * @return Comment
     */
    public function setChildComment($parentItem)
    {
        $this->childComment = $parentItem;
        return $this;
    }

    /**
     * @return int
     */
    public function getUpvoteCount()
    {
        return $this->upvoteCount;
    }

    /**
     * @param int $upvoteCount
     * @return Comment
     */
    public function setUpvoteCount($upvoteCount)
    {
        $this->upvoteCount = $upvoteCount;
        return $this;
    }
}