<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Item;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class BonusStats
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class BonusStat extends AbstractModel
{
    /**
     * @var int $stat Stat
     */
    private $stat;

    /**
     * @var int $amount Amount
     */
    private $amount;

    /**
     * Get stat
     *
     * @return int Stat
     */
    public function getStat()
    {
        return $this->stat;
    }

    /**
     * Set stat
     *
     * @param int $stat Stat
     *
     * @return $this
     */
    public function setStat($stat)
    {
        $this->stat = $stat;

        return $this;
    }

    /**
     * Get amount
     *
     * @return int Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set amount
     *
     * @param int $amount Amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setStat($data['stat'])
             ->setAmount($data['amount']);

        return $this;
    }
}
