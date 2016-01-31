<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Class BossList
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class BossList extends AbstractModel
{
    /**
     * @var Boss[] $bosses Bosses
     */
    private $bosses;

    /**
     * Get bosses
     *
     * @return Boss[] Bosses
     */
    public function getBosses()
    {
        return $this->bosses;
    }

    /**
     * Set bosses
     *
     * @param Boss[] $bosses Bosses
     *
     * @return $this
     */
    public function setBosses($bosses)
    {
        $this->bosses = $bosses;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setBosses($this->createBosses($data['bosses']));

        return $this;
    }

    /**
     * Create bosses
     *
     * @param array $bosses Bosses
     *
     * @return Boss[]
     */
    private function createBosses(array $bosses)
    {
        $result = [];

        foreach ($bosses as $boss) {
            $createdBoss = (new Boss())->fillObject($boss);

            $result[] = $createdBoss;
        }

        return $result;
    }
}
