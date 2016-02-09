<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Guild;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;
use BlizzardApi\Model\WorldOfWarcraft\ChallengeMode\Character;

/**
 * Members class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Members extends AbstractModel
{
    /**
     * @var Character $character Character
     */
    private $character;

    /**
     * @var int $rank rank
     */
    private $rank;

    /**
     * Get character
     *
     * @return Character Character
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Set character
     *
     * @param Character $character Character
     *
     * @return $this
     */
    public function setCharacter(Character $character)
    {
        $this->character = $character;

        return $this;
    }

    /**
     * Get rank
     *
     * @return int Rank
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set rank
     *
     * @param int $rank Rank
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setCharacter((new Character())->fillObject($data['character']))
             ->setRank($data['rank']);

        return $this;
    }
}
