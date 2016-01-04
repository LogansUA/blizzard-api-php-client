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
    protected function fillObject(array $data)
    {
        if (!empty($data)) {
            $this->setPets($this->createPets($data['pets']));
        }
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
        $masterPets = [];

        foreach ($pets as $pet) {
            $masterPet = (new Pet())
                ->setCanBattle($pet['canBattle'])
                ->setCreatureId($pet['creatureId'])
                ->setName($pet['name'])
                ->setFamily($pet['family'])
                ->setIcon($pet['icon'])
                ->setQualityId($pet['qualityId'])
                ->setStats($this->createStats($pet['stats']))
                ->setStrongAgainst($pet['strongAgainst'])
                ->setTypeId($pet['typeId'])
                ->setWeakAgainst($pet['weakAgainst']);

            $masterPets[] = $masterPet;
        }

        return $masterPets;
    }

    /**
     * Create stats
     *
     * @param array $stats Creature stats
     *
     * @return PetStats[]
     */
    private function createStats(array $stats)
    {
        return (new PetStats())
            ->setSpeciesId($stats['speciesId'])
            ->setBreedId($stats['breedId'])
            ->setPetQualityId($stats['petQualityId'])
            ->setLevel($stats['level'])
            ->setHealth($stats['health'])
            ->setPower($stats['power'])
            ->setSpeed($stats['speed']);
    }
}
