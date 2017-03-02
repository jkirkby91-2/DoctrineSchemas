<?php

namespace Jkirkby91\DoctrineSchemas\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Jkirkby91\DoctrineSchemas\Entities\CreativeWork;

/**
 * Class Article
 *
 * @package Jkirkby91\DoctrineSchemas
 *
 * @ORM\MappedSuperclass
 * @author James Kirkby <jkirkby91@gmail.com>
 */
abstract class Article extends CreativeWork
{

    /**
     * @ORM\Column(type="string", nullable=true, unique=false)
     */
    protected $articleBody;

    /**
     * @ORM\Column(type="string", nullable=true, unique=false)
     */
    protected $wordCount;    

	/**
	 * Class Constructor
	 * @param    $articleBody   
	 * @param    $wordCount   
	 */
	public function __construct($articleBody, $wordCount, $author, $name)
	{
        parent::__construct($author,$name);        
		$this->articleBody = $articleBody;
		$this->wordCount = $wordCount;
	}

    /**
     * Gets the value of articleBody.
     *
     * @return mixed
     */
    public function getArticleBody()
    {
        return $this->articleBody;
    }

    /**
     * Sets the value of articleBody.
     *
     * @param mixed $articleBody the article body
     *
     * @return self
     */
    protected function setArticleBody($articleBody)
    {
        $this->articleBody = $articleBody;

        return $this;
    }

    /**
     * Gets the value of wordCount.
     *
     * @return mixed
     */
    public function getWordCount()
    {
        return $this->wordCount;
    }

    /**
     * Sets the value of wordCount.
     *
     * @param mixed $wordCount the word count
     *
     * @return self
     */
    protected function setWordCount($wordCount)
    {
        $this->wordCount = $wordCount;

        return $this;
    }
}