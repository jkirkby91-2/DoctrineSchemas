<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class NailSalon
 * @package Jkirkby91\DoctrineSchemas
 * @package Jkirkby91\DoctrineSchemas
 * @ORM\Entity
 * @ORM\Table(name="nailsalon", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\NailSalonRepository")
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class NailSalon extends LocalBusiness
{
    /**
     * NailSalon constructor.
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