<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

class HairSalon extends LocalBusiness
{
    /**
     * HairSalon constructor.
     *
     * @param $openingHours
     * @param $address
     * @param $telephone
     * @param $name
     */
    public function __construct($openingHours,$address,$telephone,$name)
    {
        parent::__construct($openingHours,$address,$telephone,$name);
    }
}