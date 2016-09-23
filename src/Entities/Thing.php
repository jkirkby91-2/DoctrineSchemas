<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;
use Jkirkby91\LumenDoctrineComponent\Entities\LumenDoctrineEntity;

/**
 * Class Thing
 *
 * @package ApiArchitect\Entities
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks()
 */
abstract class Thing extends LumenDoctrineEntity implements \Jkirkby91\Boilers\SchemaBoilers\SchemaContract
{

    /**
     * @ORM\Column(type="json", length=45, nullable=true)
     */
    protected $name;

    /**
     * @param $nodeType
     */
    public function __construct($nodeType)
    {
        parent::__construct($nodeType);
    }

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
        $this->name = json_encode($name);
        return $this;
    }
}