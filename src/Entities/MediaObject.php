<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class MediaObject
 *
 * @package Jkirkby91\DoctrineSchemas
 * @ORM\MappedSuperclass
 */
class MediaObject extends \Jkirkby91\DoctrineSchemas\Entities\CreativeWork
{

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $contentUrl;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $embedUrl;

    /**
     * @ORM\Column(type="integer", length=45, nullable=true)
     */
    protected $height;

    /**
     * @ORM\Column(type="integer", length=45, nullable=true)
     */
    protected $width;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $playerType;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Country", mappedBy="place", cascade={"persist"})
     */
    protected $regionsAllowed;

    /**
     * MediaObject constructor.
     * @param $contentUrl
     * @param $embedUrl
     */
    public function __construct($contentUrl, $embedUrl)
    {
        $this->contentUrl = $contentUrl;
        $this->embedUrl = $embedUrl;
    }

    /**
     * @return mixed
     */
    public function getContentUrl()
    {
        return $this->contentUrl;
    }

    /**
     * @param mixed $contentUrl
     * @return MediaObject
     */
    public function setContentUrl($contentUrl)
    {
        $this->contentUrl = $contentUrl;
        return $this;
    }

    /**
     * @return null
     */
    public function getEmbedUrl()
    {
        return $this->embedUrl;
    }

    /**
     * @param null $embedUrl
     * @return MediaObject
     */
    public function setEmbedUrl($embedUrl)
    {
        $this->embedUrl = $embedUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     * @return MediaObject
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     * @return MediaObject
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlayerType()
    {
        return $this->playerType;
    }

    /**
     * @param mixed $playerType
     * @return MediaObject
     */
    public function setPlayerType($playerType)
    {
        $this->playerType = $playerType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegionsAllowed()
    {
        return $this->regionsAllowed;
    }

    /**
     * @param mixed $regionsAllowed
     * @return MediaObject
     */
    public function setRegionsAllowed($regionsAllowed)
    {
        $this->regionsAllowed = $regionsAllowed;
        return $this;
    }
}