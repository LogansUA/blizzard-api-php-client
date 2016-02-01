<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Realm;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class Realm
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Realm extends AbstractModel
{
    /**
     * @var string $type Type
     */
    private $type;

    /**
     * @var string $population Population
     */
    private $population;

    /**
     * @var bool $queue Queue
     */
    private $queue;

    /**
     * @var WorldPVPZone $wintergrasp Wintergrasp
     */
    private $wintergrasp;

    /**
     * @var WorldPVPZone $tolBarad Tol Barad
     */
    private $tolBarad;

    /**
     * @var bool $status Status
     */
    private $status;

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
     * @var array $connectedRealms Connected realms
     */
    private $connectedRealms;

    /**
     * Get type
     *
     * @return string Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param string $type Type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get population
     *
     * @return string Population
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Set population
     *
     * @param string $population Population
     *
     * @return $this
     */
    public function setPopulation($population)
    {
        $this->population = $population;

        return $this;
    }

    /**
     * Get queue
     *
     * @return bool Queue
     */
    public function isQueue()
    {
        return $this->queue;
    }

    /**
     * Set queue
     *
     * @param bool $queue Queue
     *
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * Get wintergrasp
     *
     * @return WorldPVPZone Wintergrasp
     */
    public function getWintergrasp()
    {
        return $this->wintergrasp;
    }

    /**
     * Set wintergrasp
     *
     * @param WorldPVPZone $wintergrasp Wintergrasp
     *
     * @return $this
     */
    public function setWintergrasp(WorldPVPZone $wintergrasp)
    {
        $this->wintergrasp = $wintergrasp;

        return $this;
    }

    /**
     * Get Tol Barad
     *
     * @return WorldPVPZone Tol Barad
     */
    public function getTolBarad()
    {
        return $this->tolBarad;
    }

    /**
     * Set Tol Barad
     *
     * @param WorldPVPZone $tolBarad Tol Barad
     *
     * @return $this
     */
    public function setTolBarad(WorldPVPZone $tolBarad)
    {
        $this->tolBarad = $tolBarad;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool Status
     */
    public function isStatus()
    {
        return $this->status;
    }

    /**
     * Set status
     *
     * @param bool $status Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
    public function setConnectedRealms($connectedRealms)
    {
        $this->connectedRealms = $connectedRealms;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setType($data['type'])
             ->setPopulation($data['population'])
             ->setQueue($data['queue'])
             ->setWintergrasp((new WorldPVPZone())->fillObject($data['wintergrasp']))
             ->setTolBarad((new WorldPVPZone())->fillObject($data['tol-barad']))
             ->setStatus($data['status'])
             ->setName($data['name'])
             ->setSlug($data['slug'])
             ->setBattlegroup($data['battlegroup'])
             ->setLocale($data['locale'])
             ->setTimezone($data['timezone'])
             ->setConnectedRealms($data['connected_realms']);

        return $this;
    }
}
