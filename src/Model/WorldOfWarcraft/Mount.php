<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Mount class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Mount extends AbstractModel
{
    /**
     * @var string $name Name
     */
    private $name;

    /**
     * @var int $spellId Spell ID
     */
    private $spellId;

    /**
     * @var int $creatureId Creature ID
     */
    private $creatureId;

    /**
     * @var int $itemId Item ID
     */
    private $itemId;

    /**
     * @var int $qualityId Quality ID
     */
    private $qualityId;

    /**
     * @var string $icon Icon
     */
    private $icon;

    /**
     * @var bool $ground Is ground
     */
    private $ground;

    /**
     * @var bool $flying Is flying
     */
    private $flying;

    /**
     * @var bool $aquatic Is aquatic
     */
    private $aquatic;

    /**
     * @var bool $jumping Is jumping
     */
    private $jumping;

    /**
     * Get name
     *
     * @return string Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get spellId
     *
     * @return int SpellId
     */
    public function getSpellId()
    {
        return $this->spellId;
    }

    /**
     * Set spell ID
     *
     * @param int $spellId Spell ID
     *
     * @return $this
     */
    public function setSpellId($spellId)
    {
        $this->spellId = $spellId;

        return $this;
    }

    /**
     * Get creature ID
     *
     * @return int Creature ID
     */
    public function getCreatureId()
    {
        return $this->creatureId;
    }

    /**
     * Set creature ID
     *
     * @param int $creatureId Creature ID
     *
     * @return $this
     */
    public function setCreatureId($creatureId)
    {
        $this->creatureId = $creatureId;

        return $this;
    }

    /**
     * Get item ID
     *
     * @return int Item ID
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set item ID
     *
     * @param int $itemId Item ID
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get quality ID
     *
     * @return int Quality ID
     */
    public function getQualityId()
    {
        return $this->qualityId;
    }

    /**
     * Set quality ID
     *
     * @param int $qualityId Quality ID
     *
     * @return $this
     */
    public function setQualityId($qualityId)
    {
        $this->qualityId = $qualityId;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string Icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set icon
     *
     * @param string $icon Icon
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get is ground
     *
     * @return bool Is ground
     */
    public function isGround()
    {
        return $this->ground;
    }

    /**
     * Set is ground
     *
     * @param bool $ground is ground
     *
     * @return $this
     */
    public function setGround($ground)
    {
        $this->ground = $ground;

        return $this;
    }

    /**
     * Get is flying
     *
     * @return bool Is flying
     */
    public function isFlying()
    {
        return $this->flying;
    }

    /**
     * Set is flying
     *
     * @param bool $flying is flying
     *
     * @return $this
     */
    public function setFlying($flying)
    {
        $this->flying = $flying;

        return $this;
    }

    /**
     * Get is aquatic
     *
     * @return bool Is aquatic
     */
    public function isAquatic()
    {
        return $this->aquatic;
    }

    /**
     * Set is aquatic
     *
     * @param bool $aquatic Is aquatic
     *
     * @return $this
     */
    public function setAquatic($aquatic)
    {
        $this->aquatic = $aquatic;

        return $this;
    }

    /**
     * Get is jumping
     *
     * @return bool Is jumping
     */
    public function isJumping()
    {
        return $this->jumping;
    }

    /**
     * Set is jumping
     *
     * @param bool $jumping Is jumping
     *
     * @return $this
     */
    public function setJumping($jumping)
    {
        $this->jumping = $jumping;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function fillObject(array $data)
    {
        $this->setName($data['name'])
             ->setSpellId($data['spellId'])
             ->setCreatureId($data['creatureId'])
             ->setItemId($data['itemId'])
             ->setQualityId($data['qualityId'])
             ->setIcon($data['icon'])
             ->setGround($data['isGround'])
             ->setFlying($data['isFlying'])
             ->setAquatic($data['isAquatic'])
             ->setJumping($data['isJumping']);

        return $this;
    }
}
