<?php

namespace Osimek1\ArticlesBundle\Model;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Abstract class of base article
 *
 * @author Grzegorz Osimowicz <osimek1@gmail.com>
 */
abstract class BaseArticle implements ArticleInterface
{
	/**
	 * @var string
	 */
	protected $title;
	
	/**
	 * @var string
	 * @ORM\Column(type="string", length=255)
	 * @Assert\MaxLength(255)
	 */
	protected $shortDesc;
	
	/**
	 * @var string
	 * @ORM\Column(type="text")
	 */
	protected $articleContent;	
	
	/**
	 * @var string
	 * @ORM\Column(type="string", length=255)
	 */
	protected $slug;
	
	/**
     * {@inheritDoc}
     */
	public function getTitle()
	{
		$this->title;
	}
	
	/**
     * {@inheritDoc}
     */
	public function setTitle($title)
	{
		$this->title = $title;
		
		return $this;
	}
	
	/**
     * {@inheritDoc}
     */
	public function getShortDesc()
	{
		$this->shortDesc;
	}
	
	/**
     * {@inheritDoc}
     */
	public function setShortDesc($shortDesc)
	{
		$this->shortDesc = $shortDesc;
		
		return $this;
	}
	
	/**
     * {@inheritDoc}
     */
	public function getArticleContent()
	{
		$this->articleContent;
	}
	
	/**
     * {@inheritDoc}
     */
	public function setArticleContent($articleContent)
	{
		$this->articleContent = $articleContent;
		
		return $this;
	}	
	
	public function getSlug()
	{
		return $this->slug;
	}
}