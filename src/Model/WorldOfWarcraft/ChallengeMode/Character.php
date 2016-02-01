<?php

namespace BlizzardApi\Model\WorldOfWarcraft\ChallengeMode;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class Character
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Character extends AbstractModel
{
    /**
     * @var string $name Name
     */
    private $name;

    /**
     * @var string $realm Realm
     */
    private $realm;

    /**
     * @var string $battlegroup Battlegroup
     */
    private $battlegroup;

    /**
     * @var int $class Class
     */
    private $class;

    /**
     * @var int $race Race
     */
    private $race;

    /**
     * @var int $gender Gender
     */
    private $gender;

    /**
     * @var int $level Level
     */
    private $level;

    /**
     * @var int $achievementPoints Achievement points
     */
    private $achievementPoints;

    /**
     * @var string $thumbnail Thumbnail
     */
    private $thumbnail;

    /**
     * @var Spec $spec Specialization
     */
    private $spec;

    /**
     * @var string $guild Guild
     */
    private $guild;

    /**
     * @var string $guildRealm Guild realm
     */
    private $guildRealm;

    /**
     * @var int $lastModified Last modified
     */
    private $lastModified;

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
     * Get class
     *
     * @return int Class
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set class
     *
     * @param int $class Class
     *
     * @return $this
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get race
     *
     * @return int Race
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set race
     *
     * @param int $race Race
     *
     * @return $this
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get gender
     *
     * @return int Gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set gender
     *
     * @param int $gender Gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

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
     * Get thumbnail
     *
     * @return string Thumbnail
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Set thumbnail
     *
     * @param string $thumbnail Thumbnail
     *
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get spec
     *
     * @return Spec Spec
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * Set spec
     *
     * @param Spec $spec Spec
     *
     * @return $this
     */
    public function setSpec(Spec $spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Get guild
     *
     * @return string Guild
     */
    public function getGuild()
    {
        return $this->guild;
    }

    /**
     * Set guild
     *
     * @param string $guild Guild
     *
     * @return $this
     */
    public function setGuild($guild)
    {
        $this->guild = $guild;

        return $this;
    }

    /**
     * Get guild realm
     *
     * @return string Guild realm
     */
    public function getGuildRealm()
    {
        return $this->guildRealm;
    }

    /**
     * Set guild realm
     *
     * @param string $guildRealm Guild realm
     *
     * @return $this
     */
    public function setGuildRealm($guildRealm)
    {
        $this->guildRealm = $guildRealm;

        return $this;
    }

    /**
     * Get last modified
     *
     * @return int Last modified
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Set last modified
     *
     * @param int $lastModified Last modified
     *
     * @return $this
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setName($data['name'])
             ->setRealm($data['realm'])
             ->setBattlegroup($data['battlegroup'])
             ->setClass($data['class'])
             ->setRace($data['race'])
             ->setGender($data['gender'])
             ->setLevel($data['level'])
             ->setAchievementPoints($data['achievementPoints'])
             ->setThumbnail($data['thumbnail'])
             ->setLastModified($data['lastModified']);

        if (isset($data['spec']) && !empty($data['spec'])) {
            $this->setSpec((new Spec())->fillObject($data['spec']));
        }

        if (isset($data['guild']) && !empty($data['guild'])) {
            $this->setGuild($data['guild']);
        }

        if (isset($data['guildRealm']) && !empty($data['guildRealm'])) {
            $this->setGuildRealm($data['guildRealm']);
        }

        return $this;
    }
}
