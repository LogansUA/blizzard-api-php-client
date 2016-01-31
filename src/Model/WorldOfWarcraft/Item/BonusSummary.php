<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Item;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class BonusSummary
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class BonusSummary extends AbstractModel
{
    /**
     * @var array $defaultBonusLists Default bonus lists
     */
    private $defaultBonusLists;

    /**
     * @var array $chanceBonusLists Chance bonus lists
     */
    private $chanceBonusLists;

    /**
     * @var array $bonusChances Bonus chances
     */
    private $bonusChances;

    /**
     * Get default bonus lists
     *
     * @return array Default bonus lists
     */
    public function getDefaultBonusLists()
    {
        return $this->defaultBonusLists;
    }

    /**
     * Set default bonus lists
     *
     * @param array $defaultBonusLists Default bonus lists
     *
     * @return $this
     */
    public function setDefaultBonusLists($defaultBonusLists)
    {
        $this->defaultBonusLists = $defaultBonusLists;

        return $this;
    }

    /**
     * Get chance bonus lists
     *
     * @return array Chance bonus lists
     */
    public function getChanceBonusLists()
    {
        return $this->chanceBonusLists;
    }

    /**
     * Set chance bonus lists
     *
     * @param array $chanceBonusLists Chance bonus lists
     *
     * @return $this
     */
    public function setChanceBonusLists($chanceBonusLists)
    {
        $this->chanceBonusLists = $chanceBonusLists;

        return $this;
    }

    /**
     * Get bonus chances
     *
     * @return array Bonus chances
     */
    public function getBonusChances()
    {
        return $this->bonusChances;
    }

    /**
     * Set bonus chances
     *
     * @param array $bonusChances Bonus chances
     *
     * @return $this
     */
    public function setBonusChances($bonusChances)
    {
        $this->bonusChances = $bonusChances;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setDefaultBonusLists($data['defaultBonusLists'])
             ->setChanceBonusLists($data['chanceBonusLists'])
             ->setBonusChances($data['bonusChances']);

        return $this;
    }
}
