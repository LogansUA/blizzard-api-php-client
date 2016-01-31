<?php

namespace BlizzardApi\Model\WorldOfWarcraft\ChallengeMode;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class Challenge
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Challenge extends AbstractModel
{
    /**
     * @var Realm $realm Realm
     */
    public $realm;

    /**
     * @var Map $map Map
     */
    public $map;

    /**
     * @var Group[] $groups Groups
     */
    public $groups;

    /**
     * Get realm
     *
     * @return Realm Realm
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * Set realm
     *
     * @param Realm $realm Realm
     *
     * @return $this
     */
    public function setRealm(Realm $realm)
    {
        $this->realm = $realm;

        return $this;
    }

    /**
     * Get map
     *
     * @return Map Map
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set map
     *
     * @param Map $map Map
     *
     * @return $this
     */
    public function setMap(Map $map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get groups
     *
     * @return Group[] Groups
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Set groups
     *
     * @param Group[] $groups Groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setRealm((new Realm())->fillObject($data['realm']))
             ->setMap((new Map())->fillObject($data['map']))
             ->setGroups($this->createGroups($data['groups']));

        return $this;
    }

    /**
     * Create groups
     *
     * @param array $groups Groups
     *
     * @return Group[]
     */
    private function createGroups(array $groups)
    {
        $result = [];

        foreach ($groups as $group) {
            $newGroup = (new Group())->fillObject($group);

            $result[] = $newGroup;
        }

        return $result;
    }
}
