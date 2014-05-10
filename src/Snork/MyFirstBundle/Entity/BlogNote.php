<?php
/**
 * Created by PhpStorm.
 * User: akalie
 * Date: 5/10/14
 * Time: 6:10 PM
 */

namespace Snork\MyFirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Заметка
 * Class BlogNote
 * @package Snork\MyFirstBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="blog_notes")
 */
class BlogNote {

    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $blogNoteId;

    /**дата создания записи
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

     /** id автора заметки
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $authorId;

    /** заголовок статьи
     * @var string
     * @ORM\Column(type="string", length=150)
     */
    protected $title;

    /** содержимое статьи
     * @var string
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * Get blogNoteId
     *
     * @return integer 
     */
    public function getBlogNoteId()
    {
        return $this->blogNoteId;
    }

    /**
     * Set authorId
     *
     * @param integer $authorId
     * @return BlogNote
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return integer 
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return BlogNote
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdAt
     *
     * @param /DateTime createdAt
     * @return BlogNote
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param $title
     * @return string
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

}
