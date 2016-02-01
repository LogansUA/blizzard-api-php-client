<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Realm;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class Realms
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Realms extends AbstractModel
{
    /**
     * @var Realm[] $realms Realms
     */
    private $realms;

    /**
     * Get realms
     *
     * @return Realm[] Realms
     */
    public function getRealms()
    {
        return $this->realms;
    }

    /**
     * Set realms
     *
     * @param Realm[] $realms Realms
     *
     * @return $this
     */
    public function setRealms($realms)
    {
        $this->realms = $realms;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setRealms($this->createRealms($data['realms']));

        return $this;
    }

    /**
     * Create realms
     *
     * @param array $realms Realms
     *
     * @return Realm[]
     */
    private function createRealms(array $realms)
    {
        $result = [];

        foreach ($realms as $realm) {
            $createdRealm = (new Realm())->fillObject($realm);

            $result[] = $createdRealm;
        }

        return $result;
    }
}
