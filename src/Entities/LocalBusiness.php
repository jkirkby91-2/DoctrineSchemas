<?php

namespace App\Entities;

use App\Entities\Thing;
use Doctrine\ORM\Mapping as ORM;
use ApiArchitect\Compass\Entities\User;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Class LocalBusiness
 *
 * @package Jkirkby91\DoctrineSchemas
 * @author James Kirkby <jkirkby91@gmail.com>
 *
 * @ORM\MappedSuperclass
 */
class LocalBusiness extends Thing
{

	/**
	 * @ORM\OneToOne(targetEntity="\ApiArchitect\Compass\Entities\User",cascade={"persist"}, fetch="EAGER")
	 * @ORM\JoinColumn(name="founder", referencedColumnName="id", nullable=false)
	 */
	protected $founder;

	/**
	 * @ORM\OneToOne(targetEntity="\App\Entities\PostalAddress",cascade={"persist"})
	 * @ORM\JoinColumn(name="address", referencedColumnName="id", nullable=false)
	 */
	protected $address;

	/**
	 * @ORM\OneToOne(targetEntity="\App\Entities\AggregateRating", fetch="EAGER", cascade={"persist"})
	 * @ORM\JoinColumn(name="aggregate_rating_id", referencedColumnName="id")
	 */
	protected $aggregateRating;

	/**
	 * @ORM\ManyToOne(targetEntity="\App\Entities\GeoCoordinates", inversedBy="LocalBusiness", fetch="EAGER", cascade={"persist"})
	 * @ORM\JoinColumn(name="geo_coordinated_id", referencedColumnName="id")
	 */
	protected $GeoCoordinates;

	/**
	 * @ORM\Column(type="string", length=45, nullable=true)
	 */
	protected $telephone;

	/**
	 * @ORM\Column(type="json_array", length=45, nullable=true)
	 */
	protected $paymentAccepted;

	/**
	 * @var ArrayCollection
	 * @ORM\ManyToMany(targetEntity="OpeningHoursSpecification", cascade={"all"}, fetch="EAGER")
	 * @ORM\JoinTable(name="business_open_hours",
	 *      joinColumns={@ORM\JoinColumn(name="local_business_id", referencedColumnName="id")},
	 *      inverseJoinColumns={@ORM\JoinColumn(name="opening_hours_id", referencedColumnName="id", unique=true)})
	 */
	protected $openingHoursSpecification;

	/**
	 * @ORM\Column(type="string", length=45, nullable=true)
	 */
	private $searchIndex;

	/**
	 * @ORM\Column(type="string", length=45, nullable=true)
	 */
	private $url;

	/**
	 * LocalBusiness constructor.
	 *
	 * @param $address
	 */
	public function __construct(PostalAddress $address)
	{
		$this->address = $address;
		$this->openingHoursSpecification = new ArrayCollection();
	}

	/**
	 * @return ArrayCollection
	 */
	public function getFounder() {
		return $this->founder;
	}

	/**
	 * @param $founder
	 * @return $this
	 */
	public function setFounder(User $founder) {
		$this->founder = $founder;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @param $address
	 * @return $this
	 */
	public function setAddress(PostalAddress $address) {
		$this->address = $address;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
	}

	/**
	 * @param $aggregateRating
	 * @return $this
	 */
	public function setAggregateRating(AggregateRating $aggregateRating) {
		$this->aggregateRating = $aggregateRating;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGeoCoordinates() {
		return $this->GeoCoordinates;
	}

	/**
	 * @param mixed $GeoCoordinates
	 * @return LocalBusiness
	 */
	public function setGeoCoordinates(GeoCoordinates $GeoCoordinates) {
		$this->GeoCoordinates = $GeoCoordinates;
		return $this;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getOpeningHoursSpecification() {
		return $this->openingHoursSpecification;
	}

	/**
	 * @param OpeningHoursSpecification $openingHoursSpecification
	 * @return $this
	 */
	public function addOpeningHoursSpecification(OpeningHoursSpecification $openingHoursSpecification) {
		if (!$this->openingHoursSpecification->contains($openingHoursSpecification)) {
			$this->openingHoursSpecification->add($openingHoursSpecification);
		}
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * @param mixed $telephone
	 * @return BarberShop
	 */
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPaymentAccepted() {
		return $this->paymentAccepted;
	}

	/**
	 * @param mixed $paymentAccepted
	 * @return BarberShop
	 */
	public function setPaymentAccepted($paymentAccepted) {
		$this->paymentAccepted = $paymentAccepted;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSearchIndex() {
		return $this->searchIndex;
	}

	/**
	 * @param mixed $searchIndex
	 * @return LocalBusiness
	 */
	public function setSearchIndex($searchIndex) {
		$this->searchIndex = $searchIndex;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * @param mixed $url
	 */
	public function setUrl($url) {
		$this->url = $url;
	}

}
