<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Pet list class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class PetList extends AbstractModel
{
    /**
     * @var Pet[] $pets Pets list
     */
    private $pets;

    /**
     * Get pets
     *
     * @return Pet[] Pets
     */
    public function getPets()
    {
        return $this->pets;
    }

    /**
     * Set pets
     *
     * @param Pet[] $pets pets
     *
     * @return $this
     */
    public function setPets($pets)
    {
        $this->pets = $pets;

        return $this;
    }

    /**
     * Add pet
     *
     * @param Pet $pet Pet
     *
     * @return $this
     */
    public function addPet(Pet $pet)
    {
        $this->pets[] = $pet;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setPets($this->createPets($data['pets']));

        return $this;
    }

    /**
     * Create pets
     *
     * @param array $pets List of creatures
     *
     * @return Pet[]
     */
    private function createPets(array $pets)
    {
        $result = [];

        foreach ($pets as $pet) {
            $masterPet = (new Pet())->fillObject($pet);

            $result[] = $masterPet;
        }

        return $result;
    }
}
