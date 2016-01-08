<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * PetAbility class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class PetAbility extends AbstractModel
{
    /**
     * @var int $id ID
     */
    private $id;

    /**
     * @var string $name Name
     */
    private $name;

    /**
     * @var string $icon Icon
     */
    private $icon;

    /**
     * @var int $cooldown Cooldown
     */
    private $cooldown;

    /**
     * @var int $rounds Rounds
     */
    private $rounds;

    /**
     * @var int $petTypeId Pet type ID
     */
    private $petTypeId;

    /**
     * @var bool $isPassive Is passive
     */
    private $isPassive;

    /**
     * @var bool $hideHints Hide hints
     */
    private $hideHints;

    /**
     * @var int $slot Slot
     */
    private $slot;

    /**
     * @var int $order Order
     */
    private $order;

    /**
     * @var int $requiredLevel Required level
     */
    private $requiredLevel;

    /**
     * Get  ID
     *
     * @return int  ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set  ID
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
     * Get cooldown
     *
     * @return int Cooldown
     */
    public function getCooldown()
    {
        return $this->cooldown;
    }

    /**
     * Set cooldown
     *
     * @param int $cooldown Cooldown
     *
     * @return $this
     */
    public function setCooldown($cooldown)
    {
        $this->cooldown = $cooldown;

        return $this;
    }

    /**
     * Get rounds
     *
     * @return int Rounds
     */
    public function getRounds()
    {
        return $this->rounds;
    }

    /**
     * Set rounds
     *
     * @param int $rounds Rounds
     *
     * @return $this
     */
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }

    /**
     * Get pet type ID
     *
     * @return int Pet type ID
     */
    public function getPetTypeId()
    {
        return $this->petTypeId;
    }

    /**
     * Set pet type ID
     *
     * @param int $petTypeId Pet type ID
     *
     * @return $this
     */
    public function setPetTypeId($petTypeId)
    {
        $this->petTypeId = $petTypeId;

        return $this;
    }

    /**
     * Get is passive
     *
     * @return bool Is passive
     */
    public function isIsPassive()
    {
        return $this->isPassive;
    }

    /**
     * Set is passive
     *
     * @param bool $isPassive Is passive
     *
     * @return $this
     */
    public function setIsPassive($isPassive)
    {
        $this->isPassive = $isPassive;

        return $this;
    }

    /**
     * Get hide hints
     *
     * @return bool Hide hints
     */
    public function isHideHints()
    {
        return $this->hideHints;
    }

    /**
     * Set hide hints
     *
     * @param bool $hideHints Hide hints
     *
     * @return $this
     */
    public function setHideHints($hideHints)
    {
        $this->hideHints = $hideHints;

        return $this;
    }

    /**
     * Get slot
     *
     * @return int Slot
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Set slot
     *
     * @param int $slot Slot
     *
     * @return $this
     */
    public function setSlot($slot)
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * Get order
     *
     * @return int Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set order
     *
     * @param int $order Order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get required level
     *
     * @return int Required level
     */
    public function getRequiredLevel()
    {
        return $this->requiredLevel;
    }

    /**
     * Set required level
     *
     * @param int $requiredLevel Required level
     *
     * @return $this
     */
    public function setRequiredLevel($requiredLevel)
    {
        $this->requiredLevel = $requiredLevel;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function fillObject(array $data)
    {
        /** @todo Add normal data resolving */
        $this->setId($data['id'])
             ->setName($data['name'])
             ->setIcon($data['icon'])
             ->setCooldown($data['cooldown'])
             ->setRounds($data['rounds'])
             ->setPetTypeId($data['petTypeId'])
             ->setIsPassive($data['isPassive'])
             ->setHideHints($data['hideHints'])
             ->setSlot(isset($data['slot']) ? $data['slot'] : null)
             ->setOrder(isset($data['order']) ? $data['order'] : null)
             ->setRequiredLevel(isset($data['requiredLevel']) ? $data['requiredLevel'] : null);

        return $this;
    }
}
