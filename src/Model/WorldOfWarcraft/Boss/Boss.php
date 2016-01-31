<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Boss;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class Boss
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Boss extends AbstractModel
{
    /**
     * @var int $id id
     */
    private $id;

    /**
     * @var string $name Name
     */
    private $name;

    /**
     * @var string $urlSlug Url slug
     */
    private $urlSlug;

    /**
     * @var string $description Description
     */
    private $description;

    /**
     * @var int $zoneId zone id
     */
    private $zoneId;

    /**
     * @var bool $availableInNormalMode Available in normal mode
     */
    private $availableInNormalMode;

    /**
     * @var bool $availableInHeroicMode Available in heroic mode
     */
    private $availableInHeroicMode;

    /**
     * @var int $health Health
     */
    private $health;

    /**
     * @var int $heroicHealth Heroic health
     */
    private $heroicHealth;

    /**
     * @var int $level Level
     */
    private $level;

    /**
     * @var int $heroicLevel Heroic level
     */
    private $heroicLevel;

    /**
     * @var int $journalId Journal id
     */
    private $journalId;

    /**
     * @var NPC[] $npcs NPCs
     */
    private $npcs;

    /**
     * Get ID
     *
     * @return int ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ID
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
     * Get url slug
     *
     * @return string Url slug
     */
    public function getUrlSlug()
    {
        return $this->urlSlug;
    }

    /**
     * Set url slug
     *
     * @param string $urlSlug Url slug
     *
     * @return $this
     */
    public function setUrlSlug($urlSlug)
    {
        $this->urlSlug = $urlSlug;

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
     * Get zone ID
     *
     * @return int Zone ID
     */
    public function getZoneId()
    {
        return $this->zoneId;
    }

    /**
     * Set zone ID
     *
     * @param int $zoneId Zone ID
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    /**
     * Get available in normal mode
     *
     * @return bool Available in normal mode
     */
    public function isAvailableInNormalMode()
    {
        return $this->availableInNormalMode;
    }

    /**
     * Set available in normal mode
     *
     * @param bool $availableInNormalMode Available in normal mode
     *
     * @return $this
     */
    public function setAvailableInNormalMode($availableInNormalMode)
    {
        $this->availableInNormalMode = $availableInNormalMode;

        return $this;
    }

    /**
     * Get available in heroic mode
     *
     * @return bool Available in heroic mode
     */
    public function isAvailableInHeroicMode()
    {
        return $this->availableInHeroicMode;
    }

    /**
     * Set available in heroic mode
     *
     * @param bool $availableInHeroicMode Available in heroic mode
     *
     * @return $this
     */
    public function setAvailableInHeroicMode($availableInHeroicMode)
    {
        $this->availableInHeroicMode = $availableInHeroicMode;

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
     * Get heroi hHealth
     *
     * @return int Heroic health
     */
    public function getHeroicHealth()
    {
        return $this->heroicHealth;
    }

    /**
     * Set heroic health
     *
     * @param int $heroicHealth Heroic health
     *
     * @return $this
     */
    public function setHeroicHealth($heroicHealth)
    {
        $this->heroicHealth = $heroicHealth;

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
     * Get heroic level
     *
     * @return int Heroic level
     */
    public function getHeroicLevel()
    {
        return $this->heroicLevel;
    }

    /**
     * Set heroic level
     *
     * @param int $heroicLevel Heroic level
     *
     * @return $this
     */
    public function setHeroicLevel($heroicLevel)
    {
        $this->heroicLevel = $heroicLevel;

        return $this;
    }

    /**
     * Get journal ID
     *
     * @return int Journal ID
     */
    public function getJournalId()
    {
        return $this->journalId;
    }

    /**
     * Set journal ID
     *
     * @param int $journalId Journal ID
     *
     * @return $this
     */
    public function setJournalId($journalId)
    {
        $this->journalId = $journalId;

        return $this;
    }

    /**
     * Get npcs
     *
     * @return NPC[] Npcs
     */
    public function getNpcs()
    {
        return $this->npcs;
    }

    /**
     * Set npcs
     *
     * @param NPC[] $npcs Npcs
     *
     * @return $this
     */
    public function setNpcs($npcs)
    {
        $this->npcs = $npcs;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setId($data['id'])
             ->setName($data['name'])
             ->setUrlSlug($data['urlSlug'])
             ->setZoneId($data['zoneId'])
             ->setAvailableInNormalMode($data['availableInNormalMode'])
             ->setAvailableInHeroicMode($data['availableInHeroicMode'])
             ->setHealth($data['health'])
             ->setHeroicHealth($data['heroicHealth'])
             ->setLevel($data['level'])
             ->setHeroicLevel($data['heroicLevel'])
             ->setNpcs($this->createNpcs($data['npcs']));

        if (isset($data['description']) && !empty($data['description'])) {
            $this->setDescription($data['description']);
        }

        if (isset($data['journalId']) && !empty($data['journalId'])) {
            $this->setJournalId($data['journalId']);
        }

        return $this;
    }

    /**
     * Create NPCs
     *
     * @param array $npcs NPCs
     *
     * @return NPC[]
     */
    private function createNpcs(array $npcs)
    {
        $result = [];

        foreach ($npcs as $npc) {
            $createdNpc = (new NPC())->fillObject($npc);

            $result[] = $createdNpc;
        }

        return $result;
    }
}
