<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * MountList class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class MountList extends AbstractModel
{
    /**
     * @var Mount[] $mounts List of all available mounts
     */
    private $mounts;

    /**
     * Get mounts
     *
     * @return Mount[] Mounts
     */
    public function getMounts()
    {
        return $this->mounts;
    }

    /**
     * Set mounts
     *
     * @param Mount[] $mounts Mounts
     *
     * @return $this
     */
    public function setMounts($mounts)
    {
        $this->mounts = $mounts;

        return $this;
    }

    /**
     * Add mount
     *
     * @param Mount $mount Mount
     *
     * @return $this
     */
    public function addMount(Mount $mount)
    {
        $this->mounts[] = $mount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    protected function fillObject(array $data)
    {
        if (!empty($data)) {
            $this->setMounts($this->createMounts($data['mounts']));
        }
    }

    /**
     * Create mounts
     *
     * @param array $mounts List of existing mounts
     *
     * @return array
     */
    private function createMounts(array $mounts)
    {
        $mountsList = [];

        foreach ($mounts as $mount) {
            $existingMount = (new Mount())
                ->setName($mount['name'])
                ->setSpellId($mount['spellId'])
                ->setCreatureId($mount['creatureId'])
                ->setItemId($mount['itemId'])
                ->setQualityId($mount['qualityId'])
                ->setIcon($mount['icon'])
                ->setGround($mount['isGround'])
                ->setFlying($mount['isFlying'])
                ->setAquatic($mount['isAquatic'])
                ->setJumping($mount['isJumping']);

            $mountsList[] = $existingMount;
        }

        return $mountsList;
    }
}
