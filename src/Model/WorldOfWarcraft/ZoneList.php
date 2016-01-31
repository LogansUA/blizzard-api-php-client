<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Class ZoneList
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class ZoneList extends AbstractModel
{
    /**
     * @var Zone[] $zones Zones
     */
    private $zones;

    /**
     * Get zones
     *
     * @return Zone[] Zones
     */
    public function getZones()
    {
        return $this->zones;
    }

    /**
     * Set zones
     *
     * @param Zone[] $zones Zones
     *
     * @return $this
     */
    public function setZones($zones)
    {
        $this->zones = $zones;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setZones($this->createZones($data['zones']));

        return $this;
    }

    /**
     * Create zones
     *
     * @param array $zones Zones
     *
     * @return Zone[]
     */
    private function createZones(array $zones)
    {
        $result = [];

        foreach ($zones as $zone) {
            $createdZone = (new Zone())->fillObject($zone);

            $result[] = $createdZone;
        }

        return $result;
    }
}
