<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;
use Jkirkby91\DoctrineSchemas\Entities\Article;

/**
 * Class Article
 *
 * @package Jkirkby91\DoctrineSchemas
 *
 * @ORM\MappedSuperclass
 * @author James Kirkby <jkirkby91@gmail.com>
 */
abstract class BlogPosting extends Article
{
	/**
	 * Class Constructor
	 * @param    $articleBody   
	 * @param    $wordCount   
	 */
	public function __construct($articleBody, $wordCount)
	{
		parent::__construct($articleBody, $wordCount);
	}

}