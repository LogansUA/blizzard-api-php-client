<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * PetSpecies class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class PetSpecies extends AbstractModel
{
    /**
     * @var int $speciesId Species ID
     */
    private $speciesId;

    /**
     * @var int $petTypeId Pet type ID
     */
    private $petTypeId;

    /**
     * @var int $creatureId Creature ID
     */
    private $creatureId;

    /**
     * @var string $name Name
     */
    private $name;

    /**
     * @var bool $canBattle Is can battle
     */
    private $canBattle;

    /**
     * @var string $icon Icon
     */
    private $icon;

    /**
     * @var string $description Description
     */
    private $description;

    /**
     * @var string $source Source
     */
    private $source;

    /**
     * @var PetAbility[] $abilities Abilities
     */
    private $abilities;

    /**
     * Get species ID
     *
     * @return int Species ID
     */
    public function getSpeciesId()
    {
        return $this->speciesId;
    }

    /**
     * Set species ID
     *
     * @param int $speciesId species ID
     *
     * @return $this
     */
    public function setSpeciesId($speciesId)
    {
        $this->speciesId = $speciesId;

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
     * Get can battle
     *
     * @return bool Can battle
     */
    public function isCanBattle()
    {
        return $this->canBattle;
    }

    /**
     * Set can battle
     *
     * @param boolean $canBattle Can battle
     *
     * @return $this
     */
    public function setCanBattle($canBattle)
    {
        $this->canBattle = $canBattle;

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
     * Get description
     *
     * @return string Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get source
     *
     * @return string Source
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set source
     *
     * @param string $source Source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get abilities
     *
     * @return PetAbility[] Abilities
     */
    public function getAbilities()
    {
        return $this->abilities;
    }

    /**
     * Set abilities
     *
     * @param PetAbility[] $abilities Abilities
     *
     * @return $this
     */
    public function setAbilities($abilities)
    {
        $this->abilities = $abilities;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function fillObject(array $data)
    {
        $this->setSpeciesId($data['speciesId'])
             ->setPetTypeId($data['petTypeId'])
             ->setCreatureId($data['creatureId'])
             ->setName($data['name'])
             ->setCanBattle($data['canBattle'])
             ->setIcon($data['icon'])
             ->setDescription($data['description'])
             ->setSource($data['source'])
             ->setAbilities($this->createAbilities($data['abilities']));

        return $this;
    }

    /**
     * Create abilities
     *
     * @param array $abilities Pet abilities
     *
     * @return PetAbility[]
     */
    private function createAbilities($abilities)
    {
        $result = [];

        foreach ($abilities as $ability) {
            $petAbility = (new PetAbility())->fillObject($ability);

            $result[] = $petAbility;
        }

        return $result;
    }
}
