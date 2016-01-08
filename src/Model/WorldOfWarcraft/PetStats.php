<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * PetStats class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class PetStats extends AbstractModel
{
    /**
     * @var int $speciesId Species ID
     */
    private $speciesId;

    /**
     * @var int $breedId Breed ID
     */
    private $breedId;

    /**
     * @var int $petQualityId Pet quality ID
     */
    private $petQualityId;

    /**
     * @var int $level Level
     */
    private $level;

    /**
     * @var int $health Health
     */
    private $health;

    /**
     * @var int $power Power
     */
    private $power;

    /**
     * @var int $speed Speed
     */
    private $speed;

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
     * @param int $speciesId Species ID
     *
     * @return $this
     */
    public function setSpeciesId($speciesId)
    {
        $this->speciesId = $speciesId;

        return $this;
    }

    /**
     * Get breed ID
     *
     * @return int Breed ID
     */
    public function getBreedId()
    {
        return $this->breedId;
    }

    /**
     * Set breed ID
     *
     * @param int $breedId Breed ID
     *
     * @return $this
     */
    public function setBreedId($breedId)
    {
        $this->breedId = $breedId;

        return $this;
    }

    /**
     * Get pet quality ID
     *
     * @return int Pet quality ID
     */
    public function getPetQualityId()
    {
        return $this->petQualityId;
    }

    /**
     * Set pet quality ID
     *
     * @param int $petQualityId Pet quality ID
     *
     * @return $this
     */
    public function setPetQualityId($petQualityId)
    {
        $this->petQualityId = $petQualityId;

        return $this;
    }

    /**
     * Get level
     *
     * @return int Level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set level
     *
     * @param int $level Level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get health
     *
     * @return int Health
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set health
     *
     * @param int $health Health
     *
     * @return $this
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get power
     *
     * @return int Power
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set power
     *
     * @param int $power Power
     *
     * @return $this
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get speed
     *
     * @return int Speed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set speed
     *
     * @param int $speed Speed
     *
     * @return $this
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function fillObject(array $data)
    {
        $this->setSpeciesId($data['speciesId'])
             ->setBreedId($data['breedId'])
             ->setPetQualityId($data['petQualityId'])
             ->setLevel($data['level'])
             ->setHealth($data['health'])
             ->setPower($data['power'])
             ->setSpeed($data['speed']);

        return $this;
    }
}
