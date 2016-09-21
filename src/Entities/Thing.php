<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Thing
 *
 * @package ApiArchitect\Entities
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks()
 */
abstract class Thing extends \Jkirkby91\DoctrineNodeEntity\DoctrineNodeEntity implements \Jkirkby91\Boilers\SchemaBoilers\SchemaContract
{
    /**
     * Thing constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}