<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Organization
 *
 * @package Jkirkby91\DoctrineSchemas
 * @ORM\Entity
 * @ORM\Table(name="organization", indexes={@ORM\Index(name="name_idx", columns={"name"})})
 * @ORM\Entity(repositoryClass="DoctrineSchemas\Repositories\OrganizationRepository")
 * @author James Kirkby <jkirkby91@gmail.com>
 */
class Organization extends \Jkirkby91\DoctrineSchemas\Entities\Place
{

    protected $address;

    protected $aggregateRating;

    protected $areaServed;

    protected $award;

    protected $brand;

    protected $email;

    protected $employee;

    protected $founder;

    protected $logo;

    protected $numberOfEmployees;

    protected $review;

    protected $telephone;

    /**
     * Organization constructor.
     * @param $address
     * @param $telephone
     */
    public function __construct($address,$telephone,$name)
    {
        parent::__construct($address,$name);
        $this->address = $address;
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return Organization
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param mixed $aggregateRating
     * @return Organization
     */
    public function setAggregateRating($aggregateRating)
    {
        $this->aggregateRating = $aggregateRating;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }

    /**
     * @param mixed $areaServed
     * @return Organization
     */
    public function setAreaServed($areaServed)
    {
        $this->areaServed = $areaServed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * @param mixed $award
     * @return Organization
     */
    public function setAward($award)
    {
        $this->award = $award;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     * @return Organization
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Organization
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * @param mixed $employee
     * @return Organization
     */
    public function setEmployee($employee)
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFounder()
    {
        return $this->founder;
    }

    /**
     * @param mixed $founder
     * @return Organization
     */
    public function setFounder($founder)
    {
        $this->founder = $founder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     * @return Organization
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberOfEmployees()
    {
        return $this->numberOfEmployees;
    }

    /**
     * @param mixed $numberOfEmployees
     * @return Organization
     */
    public function setNumberOfEmployees($numberOfEmployees)
    {
        $this->numberOfEmployees = $numberOfEmployees;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param mixed $review
     * @return Organization
     */
    public function setReview($review)
    {
        $this->review = $review;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     * @return Organization
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

}