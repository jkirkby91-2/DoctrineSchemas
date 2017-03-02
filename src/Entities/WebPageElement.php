<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class WebPageElement
 *
 * @package Jkirkby91\DoctrineSchemas
 *
 * @ORM\Entity
 * @ORM\Table(name="webpageelement", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\WebPageElementRepository")
 *
 * @package app\Http\Controllers
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class WebPageElement extends \Jkirkby91\DoctrineSchemas\Entities\CreativeWork
{
    /**
     * WebPageElement constructor.
     *
     * @param $author
     * @param null $text
     */
    public function __construct($author,$text)
    {
        parent::__construct($author,$text);
        $this->setNodeType('WebPageElement');
    }
}