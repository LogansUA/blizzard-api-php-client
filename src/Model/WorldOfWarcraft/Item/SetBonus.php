<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Item;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class SetBonus
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class SetBonus extends AbstractModel
{
    /**
     * @var string $description Description
     */
    private $description;

    /**
     * @var int $threshold Threshold
     */
    private $threshold;

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
     * Get threshold
     *
     * @return int Threshold
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * Set threshold
     *
     * @param int $threshold Threshold
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        $this->threshold = $threshold;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setDescription($data['description'])
             ->setThreshold($data['threshold']);

        return $this;
    }
}
