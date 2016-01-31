<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Item;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class WeaponInfo
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class WeaponInfo extends AbstractModel
{
    /**
     * @var Damage $damage Damage
     */
    private $damage;

    /**
     * @var int $weaponSpeed Weapon speed
     */
    private $weaponSpeed;

    /**
     * @var int $dps DPS
     */
    private $dps;

    /**
     * Get damage
     *
     * @return Damage Damage
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set damage
     *
     * @param Damage $damage Damage
     *
     * @return $this
     */
    public function setDamage(Damage $damage)
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * Get weapon speed
     *
     * @return int Weapon speed
     */
    public function getWeaponSpeed()
    {
        return $this->weaponSpeed;
    }

    /**
     * Set weapon speed
     *
     * @param int $weaponSpeed Weapon speed
     *
     * @return $this
     */
    public function setWeaponSpeed($weaponSpeed)
    {
        $this->weaponSpeed = $weaponSpeed;

        return $this;
    }

    /**
     * Get DPS
     *
     * @return int DPS
     */
    public function getDps()
    {
        return $this->dps;
    }

    /**
     * Set DPS
     *
     * @param int $dps DPS
     *
     * @return $this
     */
    public function setDps($dps)
    {
        $this->dps = $dps;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setDamage((new Damage())->fillObject($data['damage']))
             ->setWeaponSpeed($data['weaponSpeed'])
             ->setDps($data['dps']);

        return $this;
    }
}
