<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Class Leaderboard
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Leaderboard extends AbstractModel
{
    /**
     * @var Challenge[] $challenges Challenges
     */
    private $challenges;

    /**
     * Get challenges
     *
     * @return Challenge[] Challenges
     */
    public function getChallenges()
    {
        return $this->challenges;
    }

    /**
     * Set challenges
     *
     * @param Challenge[] $challenges Challenges
     *
     * @return $this
     */
    public function setChallenges($challenges)
    {
        $this->challenges = $challenges;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setChallenges($this->createChallenges($data['challenge']));
    }

    /**
     * Create challenges
     *
     * @param array $challenges Challenges
     *
     * @return array
     */
    private function createChallenges(array $challenges)
    {
        $result = [];

        foreach ($challenges as $challenge) {
            $createdChallenge = (new Challenge())->fillObject($challenge);

            $result[] = $createdChallenge;
        }

        return $result;
    }
}
