<?php

namespace BlizzardApi\Model\WorldOfWarcraft\ChallengeMode;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;
use BlizzardApi\Model\WorldOfWarcraft\Time;

/**
 * Class Map
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Map extends AbstractModel
{
    /**
     * @var int $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $slug
     */
    private $slug;

    /**
     * @var bool $hasChallengeMode
     */
    private $hasChallengeMode;

    /**
     * @var Time $bronzeTime Bronze Time
     */
    private $bronzeTime;

    /**
     * @var Time $silverTime Silver Time
     */
    private $silverTime;

    /**
     * @var Time $goldTime Golden Time
     */
    private $goldTime;

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
     * Has challenge mode
     *
     * @return bool Has challenge mode
     */
    public function hasChallengeMode()
    {
        return $this->hasChallengeMode;
    }

    /**
     * Set has challenge mode
     *
     * @param bool $hasChallengeMode Has challenge mode
     *
     * @return $this
     */
    public function setHasChallengeMode($hasChallengeMode)
    {
        $this->hasChallengeMode = $hasChallengeMode;

        return $this;
    }

    /**
     * Get bronze Time
     *
     * @return Time Bronze Time
     */
    public function getBronzeTime()
    {
        return $this->bronzeTime;
    }

    /**
     * Set bronze Time
     *
     * @param Time $bronzeTime Bronze Time
     *
     * @return $this
     */
    public function setBronzeTime(Time $bronzeTime)
    {
        $this->bronzeTime = $bronzeTime;

        return $this;
    }

    /**
     * Get silver Time
     *
     * @return Time Silver Time
     */
    public function getSilverTime()
    {
        return $this->silverTime;
    }

    /**
     * Set silver Time
     *
     * @param Time $silverTime Silver Time
     *
     * @return $this
     */
    public function setSilverTime(Time $silverTime)
    {
        $this->silverTime = $silverTime;

        return $this;
    }

    /**
     * Get gold Time
     *
     * @return Time Gold Time
     */
    public function getGoldTime()
    {
        return $this->goldTime;
    }

    /**
     * Set gold Time
     *
     * @param Time $goldTime Gold Time
     *
     * @return $this
     */
    public function setGoldTime(Time $goldTime)
    {
        $this->goldTime = $goldTime;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setId($data['id'])
             ->setName($data['name'])
             ->setSlug($data['slug'])
             ->setHasChallengeMode($data['hasChallengeMode'])
             ->setBronzeTime((new Time())->fillObject($data['bronzeCriteria']))
             ->setSilverTime((new Time())->fillObject($data['silverCriteria']))
             ->setGoldTime((new Time())->fillObject($data['goldCriteria']));

        return $this;
    }
}
