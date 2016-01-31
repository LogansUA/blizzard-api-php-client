<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Zone;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class Zone
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Zone extends AbstractModel
{
    /**
     * @var int $id ID
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
     * @var Location $location Location
     */
    private $location;

    /**
     * @var int $expansionId Expansion ID
     */
    private $expansionId;

    /**
     * @var int $numPlayers Num players
     */
    private $numPlayers;

    /**
     * @var bool $isDungeon Is Dungeon
     */
    private $isDungeon;

    /**
     * @var bool $isRaid Is Raid
     */
    private $isRaid;

    /**
     * @var int $advisedMinLevel Advised min level
     */
    private $advisedMinLevel;

    /**
     * @var int $advisedMaxLevel Advised max level
     */
    private $advisedMaxLevel;

    /**
     * @var int $advisedHeroicMinLevel Advised heroic min level
     */
    private $advisedHeroicMinLevel;

    /**
     * @var int $advisedHeroicMaxLevel Advised heroic max level
     */
    private $advisedHeroicMaxLevel;

    /**
     * @var array $availableModes Available modes
     */
    private $availableModes;

    /**
     * @var int $lfgNormalMinGearLevel LFG normal min gear level
     */
    private $lfgNormalMinGearLevel;

    /**
     * @var int $lfgHeroicMinGearLevel LFG neroic min gear level
     */
    private $lfgHeroicMinGearLevel;

    /**
     * @var int $floors floors
     */
    private $floors;

    /**
     * @var Boss[] $bosses Bosses
     */
    private $bosses;

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
     * Get location
     *
     * @return Location Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set location
     *
     * @param Location $location Location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get expansion ID
     *
     * @return int Expansion ID
     */
    public function getExpansionId()
    {
        return $this->expansionId;
    }

    /**
     * Set expansion ID
     *
     * @param int $expansionId Expansion ID
     *
     * @return $this
     */
    public function setExpansionId($expansionId)
    {
        $this->expansionId = $expansionId;

        return $this;
    }

    /**
     * Get num players
     *
     * @return int Num players
     */
    public function getNumPlayers()
    {
        return $this->numPlayers;
    }

    /**
     * Set num players
     *
     * @param int $numPlayers Num players
     *
     * @return $this
     */
    public function setNumPlayers($numPlayers)
    {
        $this->numPlayers = $numPlayers;

        return $this;
    }

    /**
     * Get is dungeon
     *
     * @return bool Is dungeon
     */
    public function isIsDungeon()
    {
        return $this->isDungeon;
    }

    /**
     * Set is dungeon
     *
     * @param bool $isDungeon Is dungeon
     *
     * @return $this
     */
    public function setIsDungeon($isDungeon)
    {
        $this->isDungeon = $isDungeon;

        return $this;
    }

    /**
     * Get is raid
     *
     * @return bool Is raid
     */
    public function isIsRaid()
    {
        return $this->isRaid;
    }

    /**
     * Set is raid
     *
     * @param bool $isRaid Is raid
     *
     * @return $this
     */
    public function setIsRaid($isRaid)
    {
        $this->isRaid = $isRaid;

        return $this;
    }

    /**
     * Get advised min level
     *
     * @return int Advised min level
     */
    public function getAdvisedMinLevel()
    {
        return $this->advisedMinLevel;
    }

    /**
     * Set advised min level
     *
     * @param int $advisedMinLevel Advised min level
     *
     * @return $this
     */
    public function setAdvisedMinLevel($advisedMinLevel)
    {
        $this->advisedMinLevel = $advisedMinLevel;

        return $this;
    }

    /**
     * Get advised max level
     *
     * @return int Advised max level
     */
    public function getAdvisedMaxLevel()
    {
        return $this->advisedMaxLevel;
    }

    /**
     * Set advised max level
     *
     * @param int $advisedMaxLevel Advised max level
     *
     * @return $this
     */
    public function setAdvisedMaxLevel($advisedMaxLevel)
    {
        $this->advisedMaxLevel = $advisedMaxLevel;

        return $this;
    }

    /**
     * Get advised heroic min level
     *
     * @return int Advised heroic min level
     */
    public function getAdvisedHeroicMinLevel()
    {
        return $this->advisedHeroicMinLevel;
    }

    /**
     * Set advised heroic min level
     *
     * @param int $advisedHeroicMinLevel Advised heroic min level
     *
     * @return $this
     */
    public function setAdvisedHeroicMinLevel($advisedHeroicMinLevel)
    {
        $this->advisedHeroicMinLevel = $advisedHeroicMinLevel;

        return $this;
    }

    /**
     * Get advised heroic max level
     *
     * @return int Advised heroic max level
     */
    public function getAdvisedHeroicMaxLevel()
    {
        return $this->advisedHeroicMaxLevel;
    }

    /**
     * Set advised heroic max level
     *
     * @param int $advisedHeroicMaxLevel Advised heroic max level
     *
     * @return $this
     */
    public function setAdvisedHeroicMaxLevel($advisedHeroicMaxLevel)
    {
        $this->advisedHeroicMaxLevel = $advisedHeroicMaxLevel;

        return $this;
    }

    /**
     * Get available modes
     *
     * @return array Available modes
     */
    public function getAvailableModes()
    {
        return $this->availableModes;
    }

    /**
     * Set available modes
     *
     * @param array $availableModes Available modes
     *
     * @return $this
     */
    public function setAvailableModes($availableModes)
    {
        $this->availableModes = $availableModes;

        return $this;
    }

    /**
     * Get LFG nrmalM mnG garL lvel
     *
     * @return int LFG normal min gear level
     */
    public function getLfgNormalMinGearLevel()
    {
        return $this->lfgNormalMinGearLevel;
    }

    /**
     * Set LFG normal min gear level
     *
     * @param int $lfgNormalMinGearLevel LFG normal min gear level
     *
     * @return $this
     */
    public function setLfgNormalMinGearLevel($lfgNormalMinGearLevel)
    {
        $this->lfgNormalMinGearLevel = $lfgNormalMinGearLevel;

        return $this;
    }

    /**
     * Get LFG neroic min gear level
     *
     * @return int LFG neroic min gear level
     */
    public function getLfgHeroicMinGearLevel()
    {
        return $this->lfgHeroicMinGearLevel;
    }

    /**
     * Set LFG heroic min gear level
     *
     * @param int $lfgHeroicMinGearLevel LFG heroic min gear level
     *
     * @return $this
     */
    public function setLfgHeroicMinGearLevel($lfgHeroicMinGearLevel)
    {
        $this->lfgHeroicMinGearLevel = $lfgHeroicMinGearLevel;

        return $this;
    }

    /**
     * Get floors
     *
     * @return int Floors
     */
    public function getFloors()
    {
        return $this->floors;
    }

    /**
     * Set floors
     *
     * @param int $floors Floors
     *
     * @return $this
     */
    public function setFloors($floors)
    {
        $this->floors = $floors;

        return $this;
    }

    /**
     * Get bosses
     *
     * @return Boss[] Bosses
     */
    public function getBosses()
    {
        return $this->bosses;
    }

    /**
     * Set bosses
     *
     * @param Boss[] $bosses Bosses
     *
     * @return $this
     */
    public function setBosses($bosses)
    {
        $this->bosses = $bosses;

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
             ->setLocation((new Location())->fillObject($data['location']))
             ->setExpansionId($data['expansionId'])
             ->setNumPlayers($data['numPlayers'])
             ->setIsDungeon($data['isDungeon'])
             ->setIsRaid($data['isRaid'])
             ->setAdvisedMinLevel($data['advisedMinLevel'])
             ->setAdvisedMaxLevel($data['advisedMaxLevel'])
             ->setAdvisedHeroicMinLevel($data['advisedHeroicMinLevel'])
             ->setAdvisedHeroicMaxLevel($data['advisedHeroicMaxLevel'])
             ->setAvailableModes($data['availableModes'])
             ->setLfgNormalMinGearLevel($data['lfgNormalMinGearLevel'])
             ->setLfgHeroicMinGearLevel($data['lfgHeroicMinGearLevel'])
             ->setFloors($data['floors'])
             ->setBosses($this->createBosses($data['bosses']));

        if (isset($data['description']) && !empty($data['description'])) {
            $this->setDescription($data['description']);
        }

        return $this;
    }

    /**
     * Create bosses
     *
     * @param array $bosses Bosses
     *
     * @return Boss[]
     */
    private function createBosses(array $bosses)
    {
        $result = [];

        foreach ($bosses as $boss) {
            $createdBoss = (new Boss())->fillObject($boss);

            $result[] = $createdBoss;
        }

        return $result;
    }
}
