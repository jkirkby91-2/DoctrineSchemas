<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class CreativeWork
 *
 * @package Jkirkby91\DoctrineSchemas
 *
 * @ORM\Entity
 * @ORM\Table(name="creativework", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\CreativeWorkRepository")
 *
 * @package app\Http\Controllers
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class CreativeWork Extends \Jkirkby91\DoctrineSchemas\Entities\Thing
{
    /**
     * @ORM\Column(type="text", nullable=true, unique=false)
     */
    protected $about;

    /**
     * @var ArrayCollection
     * @ORM\OneToOne(targetEntity="AggregateRating", mappedBy="creativework", cascade={"delete"})
     */
    protected $aggregateRating;

    /**
     * @var ArrayCollection
     * @ORM\OneToOne(targetEntity="Person", mappedBy="person", cascade={"persist"})
     */
    protected $author;

    /**
     * @ORM\Column(type="string", nullable=true, unique=false)
     */
    protected $award;

    /**
     * @ORM\Column(type="string", nullable=true, unique=false)
     */
    protected $comment;

    /**
     * @ORM\Column(type="integer", nullable=true, unique=false)
     */
    protected $commentCount;

    /**
     * @ORM\Column(type="text", nullable=true, unique=false)
     */
    protected $text;

    /**
     * @ORM\Column(type="string", nullable=true, unique=false)
     */
    protected $thumbnail;

    /**
     * @var ArrayCollection
     * @ORM\OneToOne(targetEntity="Person", mappedBy="person", cascade={"persist"})
     */
    protected $translator;

    /**
     * @ORM\Column(type="string", nullable=true, unique=false)
     */
    protected $version;

    /**
     * CreativeWork constructor.
     * @param $author
     * @param $text
     */
    public function __construct($author, $text=null,$name)
    {
        parent::__construct($name);
        $this->author = $author;
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param mixed $about
     * @return CreativeWork
     */
    public function setAbout($about)
    {
        $this->about = $about;
        return $this;
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
     * @return CreativeWork
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
     * @return CreativeWork
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * @param mixed $award
     * @return CreativeWork
     */
    public function setAward($award)
    {
        $this->award = $award;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     * @return CreativeWork
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * @param mixed $commentCount
     * @return CreativeWork
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
        return $this;
    }

    /**
     * @return null
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param null $text
     * @return CreativeWork
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param mixed $thumbnail
     * @return CreativeWork
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    /**
     * @param mixed $translator
     * @return CreativeWork
     */
    public function setTranslator($translator)
    {
        $this->translator = $translator;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     * @return CreativeWork
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }



}