<?php

	namespace Jkirkby91\DoctrineSchemas\Entities {

		use Doctrine\ORM\Mapping as ORM;
		use \Jkirkby91\Boilers\SchemaBoilers\SchemaContract;
		use Jkirkby91\LumenDoctrineComponent\Entities\LumenDoctrineEntity;

		/**
		 * Class Thing
		 *
		 * @package ApiArchitect\Entities
		 * @author James Kirkby <jkirkby91@gmail.com>
		 *
		 * @ORM\MappedSuperclass
		 */
		abstract class Thing extends LumenDoctrineEntity implements SchemaContract
		{
			/**
			 * @ORM\Column(type="string", length=299, nullable=false)
			 */
			public $name;

			/**
			 * @param $name
			 */
			public function __Construct($name)
			{
				$this->setName($name);
			}

			/**
			 * getName()
			 * @return string
			 */
			public function getName() : string
			{
				return $this->name;
			}

			/**
			 * setName()
			 * @param $name
			 *
			 * @return \Jkirkby91\DoctrineSchemas\Entities\Thing
			 */
			public function setName($name) : Thing
			{
				$this->name = $name;
				return $this;
			}
		}
	}