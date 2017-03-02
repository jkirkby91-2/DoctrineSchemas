<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Country
 * @package Jkirkby91\DoctrineSchemas
 * @ORM\Entity
 * @ORM\Table(name="country")
 */
class Country extends \Jkirkby91\DoctrineSchemas\Entities\Place
{

    /**
     * Country constructor.
     */
    public function __construct($name)
    {
//        parent::__construct($address=null,$name);
    }
}