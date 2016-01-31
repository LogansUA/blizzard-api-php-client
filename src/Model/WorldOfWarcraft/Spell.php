<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Class Spell
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Spell extends AbstractModel
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
     * @var string $icon Icon
     */
    private $icon;

    /**
     * @var string $description Description
     */
    private $description;

    /**
     * @var string $range Range
     */
    private $range;

    /**
     * @var string $powerCost Power cost
     */
    private $powerCost;

    /**
     * @var string $castTime Cast time
     */
    private $castTime;

    /**
     * @var string $cooldown Cooldown
     */
    private $cooldown;

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
     * Get description
     *
     * @return string Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get range
     *
     * @return string Range
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Set range
     *
     * @param string $range Range
     *
     * @return $this
     */
    public function setRange($range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * Get power cost
     *
     * @return string Power cost
     */
    public function getPowerCost()
    {
        return $this->powerCost;
    }

    /**
     * Set power cost
     *
     * @param string $powerCost Power cost
     *
     * @return $this
     */
    public function setPowerCost($powerCost)
    {
        $this->powerCost = $powerCost;

        return $this;
    }

    /**
     * Get cast time
     *
     * @return string Cast time
     */
    public function getCastTime()
    {
        return $this->castTime;
    }

    /**
     * Set cast time
     *
     * @param string $castTime Cast time
     *
     * @return $this
     */
    public function setCastTime($castTime)
    {
        $this->castTime = $castTime;

        return $this;
    }

    /**
     * Get cooldown
     *
     * @return string Cooldown
     */
    public function getCooldown()
    {
        return $this->cooldown;
    }

    /**
     * Set cooldown
     *
     * @param string $cooldown Cooldown
     *
     * @return $this
     */
    public function setCooldown($cooldown)
    {
        $this->cooldown = $cooldown;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setName($data['name'])
             ->setIcon($data['icon'])
             ->setDescription($data['description'])
             ->setCastTime($data['castTime']);

        if (isset($data['range']) && !empty($data['range'])) {
            $this->setRange($data['range']);
        }

        if (isset($data['powerCost']) && !empty($data['powerCost'])) {
            $this->setPowerCost($data['powerCost']);
        }

        if (isset($data['cooldown']) && !empty($data['cooldown'])) {
            $this->setCooldown($data['cooldown']);
        }

        return $this;
    }
}
