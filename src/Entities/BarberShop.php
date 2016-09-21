<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class BarberShop
 * @package Jkirkby91\DoctrineSchemas
 * @package Jkirkby91\DoctrineSchemas
 * @ORM\Entity
 * @ORM\Table(name="barbershop", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\BarberShopRepository")
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class BarberShop extends LocalBusiness
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
        $this->setNodeType('BarberShop');
    }
}