<?php

namespace Victoire\Widget\SocialPageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\CoreBundle\Annotations as VIC;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetSocialPage.
 *
 * @ORM\Table("vic_widget_socialpage")
 * @ORM\Entity
 */
class WidgetSocialPage extends Widget
{
    /**
     * @var string
     * @VIC\ReceiverProperty("textable")
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    protected $name;

    /**
     * @var string
     * @VIC\ReceiverProperty("urlable")
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    protected $url;

    /**
     * @var int
     *
     * @ORM\Column(name="width", type="integer", nullable=true)
     */
    protected $width;

    /**
     * @var int
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    protected $height;

    /**
     * @var bool
     *
     * @ORM\Column(name="adapt", type="boolean", nullable=true)
     */
    protected $adapt;

    /**
     * @var bool
     *
     * @ORM\Column(name="friends", type="boolean", nullable=true)
     */
    protected $friends;

    /**
     * @var bool
     *
     * @ORM\Column(name="small", type="boolean", nullable=true)
     */
    protected $small;

    /**
     * @var bool
     *
     * @ORM\Column(name="cover", type="boolean", nullable=true)
     */
    protected $cover;

    /**
     * @var bool
     *
     * @ORM\Column(name="posts", type="boolean", nullable=true)
     */
    protected $posts;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     * //TODO Check the generated value and make it more consistent.
     *
     * @return string
     */
    public function __toString()
    {
        return 'SocialPage #'.$this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set url.
     *
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set width.
     *
     * @param string $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width.
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height.
     *
     * @param string $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height.
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set adapt.
     *
     * @param string $adapt
     *
     * @return $this
     */
    public function setAdapt($adapt)
    {
        $this->adapt = $adapt;

        return $this;
    }

    /**
     * Get adapt.
     *
     * @return string
     */
    public function getAdapt()
    {
        return $this->adapt;
    }

    /**
     * Set friends.
     *
     * @param string $friends
     *
     * @return $this
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;

        return $this;
    }

    /**
     * Get friends.
     *
     * @return string
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * Set small.
     *
     * @param string $small
     *
     * @return $this
     */
    public function setSmall($small)
    {
        $this->small = $small;

        return $this;
    }

    /**
     * Get small.
     *
     * @return string
     */
    public function getSmall()
    {
        return $this->small;
    }

    /**
     * Set cover.
     *
     * @param string $cover
     *
     * @return $this
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover.
     *
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set posts.
     *
     * @param string $posts
     *
     * @return $this
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;

        return $this;
    }

    /**
     * Get posts.
     *
     * @return string
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
