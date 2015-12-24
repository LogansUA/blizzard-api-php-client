<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Class AchievementCriteria
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class AchievementCriteria
{
    /**
     * @var int $id ID
     */
    private $id;

    /**
     * @var string $description Description
     */
    private $description;

    /**
     * @var int $orderIndex Order index
     */
    private $orderIndex;

    /**
     * @var int $max Max
     */
    private $max;

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
     * Get order index
     *
     * @return int Order index
     */
    public function getOrderIndex()
    {
        return $this->orderIndex;
    }

    /**
     * Set order index
     *
     * @param int $orderIndex Order index
     *
     * @return $this
     */
    public function setOrderIndex($orderIndex)
    {
        $this->orderIndex = $orderIndex;

        return $this;
    }

    /**
     * Get max
     *
     * @return int Max
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set max
     *
     * @param int $max Max
     *
     * @return $this
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }
}
