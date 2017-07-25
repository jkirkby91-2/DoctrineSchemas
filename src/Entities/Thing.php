<?php

	namespace Jkirkby91\DoctrineSchemas\Entities;

	use Doctrine\ORM\Mapping as ORM;
	use Jkirkby91\LumenDoctrineComponent\Entities\LumenDoctrineEntity;

	/**
	 * Class Thing
	 *
	 * @package ApiArchitect\Entities
	 * @author James Kirkby <jkirkby91@gmail.com>
	 *
	 * @ORM\MappedSuperclass
	 */
	abstract class Thing extends LumenDoctrineEntity implements \Jkirkby91\Boilers\SchemaBoilers\SchemaContract
	{
		/**
		 * @ORM\Column(type="string", length=299, nullable=false)
		 */
		public $name;

		/**
		 * @param $name
		 */
		public function __construct($name)
		{
			$this->setName($name);
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
			$this->name = $name;
			return $this;
		}
	}