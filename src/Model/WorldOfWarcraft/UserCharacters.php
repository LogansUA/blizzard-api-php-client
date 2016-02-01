<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

use BlizzardApi\Model\WorldOfWarcraft\ChallengeMode\Character;

/**
 * Class UserCharacters
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class UserCharacters extends AbstractModel
{
    /**
     * @var Character[] $characters User characters
     */
    private $characters;

    /**
     * Get characters
     *
     * @return Character[] Characters
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * Set characters
     *
     * @param Character[] $characters Characters
     *
     * @return $this
     */
    public function setCharacters($characters)
    {
        $this->characters = $characters;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setCharacters($this->createCharacters($data['characters']));

        return $this;
    }

    /**
     * Create characters
     *
     * @param array $characters Characters
     *
     * @return Character[]
     */
    private function createCharacters(array $characters)
    {
        $result = [];

        foreach ($characters as $character) {
            $createdCharacter = (new Character())->fillObject($character);

            $result[] = $createdCharacter;
        }

        return $result;
    }
}
