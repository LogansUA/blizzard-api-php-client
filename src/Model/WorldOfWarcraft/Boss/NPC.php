<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Boss;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class NPC
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class NPC extends AbstractModel
{
    /**
     * @var int $id ID
     */
    private $id;

    /**
     * @var string $name Name
     */
    private $name;

    /**
     * @var string $urlSlug Url slug
     */
    private $urlSlug;

    /**
     * Get ID
     *
     * @return int ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ID
     *
     * @param int $id ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get name
     *
     * @return string Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get url slug
     *
     * @return string Url slug
     */
    public function getUrlSlug()
    {
        return $this->urlSlug;
    }

    /**
     * Set url slug
     *
     * @param string $urlSlug Url Slug
     *
     * @return $this
     */
    public function setUrlSlug($urlSlug)
    {
        $this->urlSlug = $urlSlug;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setId($data['id'])
             ->setName($data['name'])
             ->setUrlSlug($data['urlSlug']);

        return $this;
    }
}
