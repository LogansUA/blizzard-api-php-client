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
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setMounts($this->createMounts($data['mounts']));

        return $this;
    }

    /**
     * Create mounts
     *
     * @param array $mounts List of existing mounts
     *
     * @return Mount[]
     */
    private function createMounts(array $mounts)
    {
        $result = [];

        foreach ($mounts as $mount) {
            $existingMount = (new Mount())->fillObject($mount);

            $result[] = $existingMount;
        }

        return $result;
    }
}
