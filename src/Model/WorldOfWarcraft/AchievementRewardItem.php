<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Class AchievementRewardItem
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class AchievementRewardItem
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
     * @var int $quality Quality
     */
    private $quality;

    /**
     * @var int $itemLevel Item level
     */
    private $itemLevel;

    /**
     * @var array $tooltipParams Tooltip params
     */
    private $tooltipParams;

    /**
     * @var array $stats Stats
     */
    private $stats;

    /**
     * @var int $armor Armor
     */
    private $armor;

    /**
     * @var string $context Context
     */
    private $context;

    /**
     * @var array $bonusList Bonus list
     */
    private $bonusList;

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
     * Get quality
     *
     * @return int Quality
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set quality
     *
     * @param int $quality Quality
     *
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get item level
     *
     * @return int Item level
     */
    public function getItemLevel()
    {
        return $this->itemLevel;
    }

    /**
     * Set item level
     *
     * @param int $itemLevel Item level
     *
     * @return $this
     */
    public function setItemLevel($itemLevel)
    {
        $this->itemLevel = $itemLevel;

        return $this;
    }

    /**
     * Get tooltip params
     *
     * @return array Tooltip params
     */
    public function getTooltipParams()
    {
        return $this->tooltipParams;
    }

    /**
     * Set tooltip params
     *
     * @param array $tooltipParams Tooltip params
     *
     * @return $this
     */
    public function setTooltipParams(array $tooltipParams)
    {
        $this->tooltipParams = $tooltipParams;

        return $this;
    }

    /**
     * Get stats
     *
     * @return array Stats
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Set stats
     *
     * @param array $stats Stats
     *
     * @return $this
     */
    public function setStats(array $stats)
    {
        $this->stats = $stats;

        return $this;
    }

    /**
     * Get armor
     *
     * @return int Armor
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * Set armor
     *
     * @param int $armor Armor
     *
     * @return $this
     */
    public function setArmor($armor)
    {
        $this->armor = $armor;

        return $this;
    }

    /**
     * Get context
     *
     * @return string Context
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set context
     *
     * @param string $context Context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get bonus list
     *
     * @return array Bonus list
     */
    public function getBonusList()
    {
        return $this->bonusList;
    }

    /**
     * Set bonus list
     *
     * @param array $bonusList Bonus list
     *
     * @return $this
     */
    public function setBonusList($bonusList)
    {
        $this->bonusList = $bonusList;

        return $this;
    }
}
