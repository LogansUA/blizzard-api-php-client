<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Pet class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Pet extends AbstractModel
{
    /**
     * @var bool $canBattle Is creature can battle
     */
    private $canBattle;

    /**
     * @var int $creatureId Creature ID
     */
    private $creatureId;

    /**
     * @var string $name Name
     */
    private $name;

    /**
     * @var string $family Family
     */
    private $family;

    /**
     * @var string $icon Icon
     */
    private $icon;

    /**
     * @var int $qualityId Quality ID
     */
    private $qualityId;

    /**
     * @var array $stats Stats
     */
    private $stats;

    /**
     * @var array $strongAgainst Strong against
     */
    private $strongAgainst;

    /**
     * @var int $typeId Type ID
     */
    private $typeId;

    /**
     * @var array $weakAgainst Weak against
     */
    private $weakAgainst;

    /**
     * Get can battle
     *
     * @return bool Can battle
     */
    public function canBattle()
    {
        return $this->canBattle;
    }

    /**
     * Set can battle
     *
     * @param bool $canBattle Can battle
     *
     * @return $this
     */
    public function setCanBattle($canBattle)
    {
        $this->canBattle = $canBattle;

        return $this;
    }

    /**
     * Get creature ID
     *
     * @return int Creature ID
     */
    public function getCreatureId()
    {
        return $this->creatureId;
    }

    /**
     * Set creature ID
     *
     * @param int $creatureId Creature ID
     *
     * @return $this
     */
    public function setCreatureId($creatureId)
    {
        $this->creatureId = $creatureId;

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
     * Get family
     *
     * @return string Family
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set family
     *
     * @param string $family Family
     *
     * @return $this
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string Icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set icon
     *
     * @param string $icon Icon
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get quality ID
     *
     * @return int Quality ID
     */
    public function getQualityId()
    {
        return $this->qualityId;
    }

    /**
     * Set quality ID
     *
     * @param int $qualityId Quality ID
     *
     * @return $this
     */
    public function setQualityId($qualityId)
    {
        $this->qualityId = $qualityId;

        return $this;
    }

    /**
     * Get stats
     *
     * @return PetStats Stats
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Set stats
     *
     * @param PetStats $stats Stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->stats = $stats;

        return $this;
    }

    /**
     * Get strong against
     *
     * @return array Strong against
     */
    public function getStrongAgainst()
    {
        return $this->strongAgainst;
    }

    /**
     * Set strong against
     *
     * @param array $strongAgainst Strong against
     *
     * @return $this
     */
    public function setStrongAgainst($strongAgainst)
    {
        $this->strongAgainst = $strongAgainst;

        return $this;
    }

    /**
     * Get type ID
     *
     * @return int Type ID
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Set type ID
     *
     * @param int $typeId Type ID
     *
     * @return $this
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get weak against
     *
     * @return array Weak against
     */
    public function getWeakAgainst()
    {
        return $this->weakAgainst;
    }

    /**
     * Set weak against
     *
     * @param array $weakAgainst Weak against
     *
     * @return $this
     */
    public function setWeakAgainst($weakAgainst)
    {
        $this->weakAgainst = $weakAgainst;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function fillObject(array $data)
    {
        $this->setCanBattle($data['canBattle'])
             ->setCreatureId($data['creatureId'])
             ->setName($data['name'])
             ->setFamily($data['family'])
             ->setIcon($data['icon'])
             ->setQualityId($data['qualityId'])
             ->setStats((new PetStats())->fillObject($data['stats']))
             ->setStrongAgainst($data['strongAgainst'])
             ->setTypeId($data['typeId'])
             ->setWeakAgainst($data['weakAgainst']);

        return $this;
    }
}
