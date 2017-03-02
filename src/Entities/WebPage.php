<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class WebPage
 *
 * @package app\Entities
 * @ORM\Entity
 * @ORM\Table(name="webpage", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\WebPageRepository")
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class WebPage extends CreativeWork
{

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $breadcrumb;

    /**
     * @ORM\Column(type="datetime", length=45, nullable=true)
     */
    protected $lastReviewed;

    /**
     * @var @TODO link web page elemnt
     */
    protected $mainContentOfPage;

    /**
     * @var
     */
    protected $primaryImageOfPage;

    /**
     * @var
     */
    protected $relatedLink;

    /**
     * WebPage constructor.
     * @param $breadcrumb
     */
    public function __construct($breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
        $this->mainContentOfPage = New ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getBreadcrumb()
    {
        return $this->breadcrumb;
    }

    /**
     * @param mixed $breadcrumb
     * @return WebPage
     */
    public function setBreadcrumb($breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastReviewed()
    {
        return $this->lastReviewed;
    }

    /**
     * @param \DateTime $lastReviewed
     * @return WebPage
     */
    public function setLastReviewed($lastReviewed)
    {
        $this->lastReviewed = $lastReviewed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMainContentOfPage()
    {
        return $this->mainContentOfPage;
    }

    /**
     * @param mixed $mainContentOfPage
     * @return WebPage
     */
    public function setMainContentOfPage($mainContentOfPage)
    {
        $this->mainContentOfPage = $mainContentOfPage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrimaryImageOfPage()
    {
        return $this->primaryImageOfPage;
    }

    /**
     * @param mixed $primaryImageOfPage
     * @return WebPage
     */
    public function setPrimaryImageOfPage($primaryImageOfPage)
    {
        $this->primaryImageOfPage = $primaryImageOfPage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelatedLink()
    {
        return $this->relatedLink;
    }

    /**
     * @param mixed $relatedLink
     * @return WebPage
     */
    public function setRelatedLink($relatedLink)
    {
        $this->relatedLink = $relatedLink;
        return $this;
    }

}