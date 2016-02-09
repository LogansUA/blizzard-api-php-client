<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Guild;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;
use BlizzardApi\Model\WorldOfWarcraft\ChallengeMode\Challenge;

/**
 * Guild class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Guild extends AbstractModel
{
    /**
     * @var \DateTime $lastModified Last modified
     */
    private $lastModified;

    /**
     * @var string $name Name
     */
    private $name;

    /**
     * @var string $realm Realm
     */
    private $realm;

    /**
     * @var string $battlegroup Battle group
     */
    private $battlegroup;

    /**
     * @var int $level Level
     */
    private $level;

    /**
     * @var int $side Side
     */
    private $side;

    /**
     * @var int $achievementPoints Achievement points
     */
    private $achievementPoints;

    /**
     * @var Emblem $emblem Emblem
     */
    private $emblem;

    /**
     * @var array $members Members
     */
    private $members;

    /**
     * @var Achievements $achievements Achievements
     */
    private $achievements;

    /**
     * @var array $news News
     */
    private $news;

    /**
     * @var array $challenge Challenge
     */
    private $challenge;

    /**
     * Get last modified
     *
     * @return \DateTime Last modified
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Set last modified
     *
     * @param \DateTime $lastModified Last modified
     *
     * @return $this
     */
    public function setLastModified(\DateTime $lastModified)
    {
        $this->lastModified = $lastModified;

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
     * Get realm
     *
     * @return string Realm
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * Set realm
     *
     * @param string $realm Realm
     *
     * @return $this
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;

        return $this;
    }

    /**
     * Get battlegroup
     *
     * @return string Battlegroup
     */
    public function getBattlegroup()
    {
        return $this->battlegroup;
    }

    /**
     * Set battlegroup
     *
     * @param string $battlegroup Battlegroup
     *
     * @return $this
     */
    public function setBattlegroup($battlegroup)
    {
        $this->battlegroup = $battlegroup;

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
     * Get side
     *
     * @return int Side
     */
    public function getSide()
    {
        return $this->side;
    }

    /**
     * Set side
     *
     * @param int $side Side
     *
     * @return $this
     */
    public function setSide($side)
    {
        $this->side = $side;

        return $this;
    }

    /**
     * Get achievement points
     *
     * @return int Achievement points
     */
    public function getAchievementPoints()
    {
        return $this->achievementPoints;
    }

    /**
     * Set achievement points
     *
     * @param int $achievementPoints Achievement points
     *
     * @return $this
     */
    public function setAchievementPoints($achievementPoints)
    {
        $this->achievementPoints = $achievementPoints;

        return $this;
    }

    /**
     * Get emblem
     *
     * @return Emblem Emblem
     */
    public function getEmblem()
    {
        return $this->emblem;
    }

    /**
     * Set emblem
     *
     * @param Emblem $emblem Emblem
     *
     * @return $this
     */
    public function setEmblem(Emblem $emblem)
    {
        $this->emblem = $emblem;

        return $this;
    }

    /**
     * Get members
     *
     * @return Members[] Members
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set members
     *
     * @param array $members Members
     *
     * @return $this
     */
    public function setMembers($members)
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Get achievements
     *
     * @return Achievements Achievements
     */
    public function getAchievements()
    {
        return $this->achievements;
    }

    /**
     * Set achievements
     *
     * @param Achievements $achievements Achievements
     *
     * @return $this
     */
    public function setAchievements(Achievements $achievements)
    {
        $this->achievements = $achievements;

        return $this;
    }

    /**
     * Get news
     *
     * @return News[] News
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Set news
     *
     * @param array $news News
     *
     * @return $this
     */
    public function setNews($news)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Get challenge
     *
     * @return Challenge[] Challenge
     */
    public function getChallenge()
    {
        return $this->challenge;
    }

    /**
     * Set challenge
     *
     * @param array $challenge Challenge
     *
     * @return $this
     */
    public function setChallenge($challenge)
    {
        $this->challenge = $challenge;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setLastModified((new \DateTime())->setTimestamp(substr($data['lastModified'], 0, -3)))
             ->setName($data['name'])
             ->setRealm($data['realm'])
             ->setBattlegroup($data['battlegroup'])
             ->setLevel($data['level'])
             ->setSide($data['side'])
             ->setAchievementPoints($data['achievementPoints'])
             ->setEmblem((new Emblem())->fillObject($data['emblem']));

        if (isset($data['members']) && !empty($data['members'])) {
            $this->setMembers($this->createMembers($data['members']));
        }

        if (isset($data['achievements']) && !empty($data['achievements'])) {
            $this->setAchievements((new Achievements())->fillObject($data['achievements']));
        }

        if (isset($data['news']) && !empty($data['news'])) {
            $this->setNews($this->createNews($data['news']));
        }

        if (isset($data['challenge']) && !empty($data['challenge'])) {
            $this->setChallenge($this->createChallenges($data['challenge']));
        }

        return $this;
    }

    /**
     * Create members
     *
     * @param array $members Members
     *
     * @return Members[]
     */
    private function createMembers(array $members)
    {
        $result = [];

        foreach ($members as $item) {
            $createdMembers = (new Members())->fillObject($item);

            $result[] = $createdMembers;
        }

        return $result;
    }

    /**
     * Create news
     *
     * @param array $news News
     *
     * @return News[]
     */
    private function createNews(array $news)
    {
        $result = [];

        foreach ($news as $item) {
            $createdNews = (new News())->fillObject($item);

            $result[] = $createdNews;
        }

        return $result;
    }

    /**
     * Create challenges
     *
     * @param array $challenges Challenges
     *
     * @return Challenge[]
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
