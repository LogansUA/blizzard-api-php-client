<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Class Realm
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Realm extends AbstractModel
{
    /**
     * @var string $name Name
     */
    private $name;

    /**
     * @var string $slug Slug
     */
    private $slug;

    /**
     * @var string $battlegroup Battlegroup
     */
    private $battlegroup;

    /**
     * @var string $locale Locale
     */
    private $locale;

    /**
     * @var string $timezone Timezone
     */
    private $timezone;

    /**
     * @var array $connectedRealms Connected realms slugs
     */
    private $connectedRealms;

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
     * Get slug
     *
     * @return string Slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set slug
     *
     * @param string $slug Slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get battlegroup
     *
     * @return string Battlegroup
     */
    public function getBattlegroup()
    {
        return $this->battlegroup;
    }

    /**
     * Set battlegroup
     *
     * @param string $battlegroup Battlegroup
     *
     * @return $this
     */
    public function setBattlegroup($battlegroup)
    {
        $this->battlegroup = $battlegroup;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string Locale
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set locale
     *
     * @param string $locale Locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string Timezone
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set timezone
     *
     * @param string $timezone Timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get connected realms
     *
     * @return array Connected realms
     */
    public function getConnectedRealms()
    {
        return $this->connectedRealms;
    }

    /**
     * Set connected realms
     *
     * @param array $connectedRealms Connected realms
     *
     * @return $this
     */
    public function setConnectedRealms(array $connectedRealms)
    {
        $this->connectedRealms = $connectedRealms;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function fillObject(array $data)
    {
        $this->setName($data['name'])
             ->setSlug($data['slug'])
             ->setBattlegroup($data['battlegroup'])
             ->setLocale($data['locale'])
             ->setTimezone($data['timezone'])
             ->setConnectedRealms($data['connected_realms']);

        return $this;
    }
}
