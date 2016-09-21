<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ImageObject
 * @package Jkirkby91\DoctrineSchemas
 * @ORM\Entity
 * @ORM\Table(name="imageobject", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\ImageObjectRepository")
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class ImageObject extends MediaObject
{
    /**
     * ImageObject constructor.
     *
     * @param $height
     * @param null $width
     */
    public function __construct($height,$width)
    {
        parent::__construct($height,$width);
        $this->setNodeType('Image');
    }
}