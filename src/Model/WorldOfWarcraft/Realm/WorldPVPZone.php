<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Realm;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class WorldPVPZone
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class WorldPVPZone extends AbstractModel
{
    /**
     * @var int $area Area
     */
    private $area;

    /**
     * @var int $controllingFaction Controlling faction
     */
    private $controllingFaction;

    /**
     * @var int $status Status
     */
    private $status;

    /**
     * @var int $next Next
     */
    private $next;

    /**
     * Get area
     *
     * @return int Area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set area
     *
     * @param int $area Area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get controlling faction
     *
     * @return int Controlling faction
     */
    public function getControllingFaction()
    {
        return $this->controllingFaction;
    }

    /**
     * Set controlling faction
     *
     * @param int $controllingFaction Controlling faction
     *
     * @return $this
     */
    public function setControllingFaction($controllingFaction)
    {
        $this->controllingFaction = $controllingFaction;

        return $this;
    }

    /**
     * Get status
     *
     * @return int Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status
     *
     * @param int $status Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get next
     *
     * @return int Next
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * Set next
     *
     * @param int $next Next
     *
     * @return $this
     */
    public function setNext($next)
    {
        $this->next = $next;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setArea($data['area'])
             ->setControllingFaction($data['controlling-faction'])
             ->setStatus($data['status'])
             ->setNext($data['next']);

        return $this;
    }
}
