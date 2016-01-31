<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Item;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class Item
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Item extends AbstractModel
{
    /**
     * @var int $id ID
     */
    private $id;

    /**
     * @var int $disenchantingSkillRank Disenchanting skill rank
     */
    private $disenchantingSkillRank;

    /**
     * @var string $description Description
     */
    private $description;

    /**
     * @var string $name Name
     */
    private $name;

    /**
     * @var string $icon Icon
     */
    private $icon;

    /**
     * @var int $stackable Stackable
     */
    private $stackable;

    /**
     * @var int $itemBind Item bind
     */
    private $itemBind;

    /**
     * @var BonusStat[] $bonusStats Bonus stats
     */
    private $bonusStats;

    /**
     * @var array $itemSpells Item spells
     */
    private $itemSpells;

    /**
     * @var int $buyPrice Buy price
     */
    private $buyPrice;

    /**
     * @var int $itemClass Item class
     */
    private $itemClass;

    /**
     * @var int $itemSubClass Item sub class
     */
    private $itemSubClass;

    /**
     * @var int $containerSlots Container slots
     */
    private $containerSlots;

    /**
     * @var WeaponInfo $weaponInfo Weapon info
     */
    private $weaponInfo;

    /**
     * @var int $inventoryType Inventory type
     */
    private $inventoryType;

    /**
     * @var bool $equippable Equippable
     */
    private $equippable;

    /**
     * @var int $itemLevel Item level
     */
    private $itemLevel;

    /**
     * @var int $maxCount Max count
     */
    private $maxCount;

    /**
     * @var int $maxDurability Max durability
     */
    private $maxDurability;

    /**
     * @var int $minFactionId Min faction ID
     */
    private $minFactionId;

    /**
     * @var int $minReputation Min reputation
     */
    private $minReputation;

    /**
     * @var int $quality Quality
     */
    private $quality;

    /**
     * @var int $sellPrice Sell price
     */
    private $sellPrice;

    /**
     * @var int $requiredSkill Required skill
     */
    private $requiredSkill;

    /**
     * @var int $requiredLevel Required level
     */
    private $requiredLevel;

    /**
     * @var int $requiredSkillRank Required skill rank
     */
    private $requiredSkillRank;

    /**
     * @var ItemSource $itemSource Item source
     */
    private $itemSource;

    /**
     * @var int $baseArmor Base armor
     */
    private $baseArmor;

    /**
     * @var bool $hasSockets Has sockets
     */
    private $hasSockets;

    /**
     * @var bool $isAuctionable Is auctionable
     */
    private $isAuctionable;

    /**
     * @var int $armor Armor
     */
    private $armor;

    /**
     * @var int $displayInfoId Display info ID
     */
    private $displayInfoId;

    /**
     * @var string $nameDescription Name description
     */
    private $nameDescription;

    /**
     * @var string $nameDescriptionColor Name description color
     */
    private $nameDescriptionColor;

    /**
     * @var bool $upgradable Upgradable
     */
    private $upgradable;

    /**
     * @var bool $heroicTooltip Heroic tooltip
     */
    private $heroicTooltip;

    /**
     * @var string $context Context
     */
    private $context;

    /**
     * @var array $bonusLists Bonus lists
     */
    private $bonusLists;

    /**
     * @var array $availableContexts Available contexts
     */
    private $availableContexts;

    /**
     * @var BonusSummary $bonusSummary Bonus summary
     */
    private $bonusSummary;

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
     * Get disenchanting skill rank
     *
     * @return int Disenchanting skill rank
     */
    public function getDisenchantingSkillRank()
    {
        return $this->disenchantingSkillRank;
    }

    /**
     * Set disenchanting skill rank
     *
     * @param int $disenchantingSkillRank Disenchanting skill rank
     *
     * @return $this
     */
    public function setDisenchantingSkillRank($disenchantingSkillRank)
    {
        $this->disenchantingSkillRank = $disenchantingSkillRank;

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
     * Get icon
     *
     * @return string Icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set icon
     *
     * @param string $icon Icon
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get stackable
     *
     * @return int Stackable
     */
    public function getStackable()
    {
        return $this->stackable;
    }

    /**
     * Set stackable
     *
     * @param int $stackable Stackable
     *
     * @return $this
     */
    public function setStackable($stackable)
    {
        $this->stackable = $stackable;

        return $this;
    }

    /**
     * Get item bind
     *
     * @return int Item bind
     */
    public function getItemBind()
    {
        return $this->itemBind;
    }

    /**
     * Set item bind
     *
     * @param int $itemBind Item bind
     *
     * @return $this
     */
    public function setItemBind($itemBind)
    {
        $this->itemBind = $itemBind;

        return $this;
    }

    /**
     * Get bonus stats
     *
     * @return BonusStat[] Bonus stats
     */
    public function getBonusStats()
    {
        return $this->bonusStats;
    }

    /**
     * Set bonus stats
     *
     * @param BonusStat[] $bonusStats Bonus stats
     *
     * @return $this
     */
    public function setBonusStats($bonusStats)
    {
        $this->bonusStats = $bonusStats;

        return $this;
    }

    /**
     * Get item spells
     *
     * @return array Item spells
     */
    public function getItemSpells()
    {
        return $this->itemSpells;
    }

    /**
     * Set item spells
     *
     * @param array $itemSpells Item spells
     *
     * @return $this
     */
    public function setItemSpells($itemSpells)
    {
        $this->itemSpells = $itemSpells;

        return $this;
    }

    /**
     * Get buy price
     *
     * @return int Buy price
     */
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }

    /**
     * Set buy price
     *
     * @param int $buyPrice Buy price
     *
     * @return $this
     */
    public function setBuyPrice($buyPrice)
    {
        $this->buyPrice = $buyPrice;

        return $this;
    }

    /**
     * Get item class
     *
     * @return int Item class
     */
    public function getItemClass()
    {
        return $this->itemClass;
    }

    /**
     * Set item class
     *
     * @param int $itemClass Item class
     *
     * @return $this
     */
    public function setItemClass($itemClass)
    {
        $this->itemClass = $itemClass;

        return $this;
    }

    /**
     * Get item sub class
     *
     * @return int Item sub class
     */
    public function getItemSubClass()
    {
        return $this->itemSubClass;
    }

    /**
     * Set item sub class
     *
     * @param int $itemSubClass Item sub class
     *
     * @return $this
     */
    public function setItemSubClass($itemSubClass)
    {
        $this->itemSubClass = $itemSubClass;

        return $this;
    }

    /**
     * Get container slots
     *
     * @return int Container slots
     */
    public function getContainerSlots()
    {
        return $this->containerSlots;
    }

    /**
     * Set container slots
     *
     * @param int $containerSlots Container slots
     *
     * @return $this
     */
    public function setContainerSlots($containerSlots)
    {
        $this->containerSlots = $containerSlots;

        return $this;
    }

    /**
     * Get weapon info
     *
     * @return WeaponInfo|null Weapon info
     */
    public function getWeaponInfo()
    {
        return $this->weaponInfo;
    }

    /**
     * Set weapon info
     *
     * @param WeaponInfo|null $weaponInfo Weapon info
     *
     * @return $this
     */
    public function setWeaponInfo(WeaponInfo $weaponInfo)
    {
        $this->weaponInfo = $weaponInfo;

        return $this;
    }

    /**
     * Get inventory type
     *
     * @return int Inventory type
     */
    public function getInventoryType()
    {
        return $this->inventoryType;
    }

    /**
     * Set inventory type
     *
     * @param int $inventoryType Inventory type
     *
     * @return $this
     */
    public function setInventoryType($inventoryType)
    {
        $this->inventoryType = $inventoryType;

        return $this;
    }

    /**
     * Get equippable
     *
     * @return bool Equippable
     */
    public function isEquippable()
    {
        return $this->equippable;
    }

    /**
     * Set equippable
     *
     * @param bool $equippable Equippable
     *
     * @return $this
     */
    public function setEquippable($equippable)
    {
        $this->equippable = $equippable;

        return $this;
    }

    /**
     * Get item level
     *
     * @return int Item level
     */
    public function getItemLevel()
    {
        return $this->itemLevel;
    }

    /**
     * Set item level
     *
     * @param int $itemLevel Item level
     *
     * @return $this
     */
    public function setItemLevel($itemLevel)
    {
        $this->itemLevel = $itemLevel;

        return $this;
    }

    /**
     * Get max count
     *
     * @return int Max count
     */
    public function getMaxCount()
    {
        return $this->maxCount;
    }

    /**
     * Set max count
     *
     * @param int $maxCount Max count
     *
     * @return $this
     */
    public function setMaxCount($maxCount)
    {
        $this->maxCount = $maxCount;

        return $this;
    }

    /**
     * Get max durability
     *
     * @return int Max durability
     */
    public function getMaxDurability()
    {
        return $this->maxDurability;
    }

    /**
     * Set max durability
     *
     * @param int $maxDurability Max durability
     *
     * @return $this
     */
    public function setMaxDurability($maxDurability)
    {
        $this->maxDurability = $maxDurability;

        return $this;
    }

    /**
     * Get min faction ID
     *
     * @return int Min faction ID
     */
    public function getMinFactionId()
    {
        return $this->minFactionId;
    }

    /**
     * Set min faction ID
     *
     * @param int $minFactionId Min faction ID
     *
     * @return $this
     */
    public function setMinFactionId($minFactionId)
    {
        $this->minFactionId = $minFactionId;

        return $this;
    }

    /**
     * Get min reputation
     *
     * @return int Min reputation
     */
    public function getMinReputation()
    {
        return $this->minReputation;
    }

    /**
     * Set min reputation
     *
     * @param int $minReputation Min reputation
     *
     * @return $this
     */
    public function setMinReputation($minReputation)
    {
        $this->minReputation = $minReputation;

        return $this;
    }

    /**
     * Get quality
     *
     * @return int Quality
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set quality
     *
     * @param int $quality Quality
     *
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get sell price
     *
     * @return int Sell price
     */
    public function getSellPrice()
    {
        return $this->sellPrice;
    }

    /**
     * Set sell price
     *
     * @param int $sellPrice Sell price
     *
     * @return $this
     */
    public function setSellPrice($sellPrice)
    {
        $this->sellPrice = $sellPrice;

        return $this;
    }

    /**
     * Get required skill
     *
     * @return int Required skill
     */
    public function getRequiredSkill()
    {
        return $this->requiredSkill;
    }

    /**
     * Set required skill
     *
     * @param int $requiredSkill Required skill
     *
     * @return $this
     */
    public function setRequiredSkill($requiredSkill)
    {
        $this->requiredSkill = $requiredSkill;

        return $this;
    }

    /**
     * Get required level
     *
     * @return int Required level
     */
    public function getRequiredLevel()
    {
        return $this->requiredLevel;
    }

    /**
     * Set required level
     *
     * @param int $requiredLevel Required level
     *
     * @return $this
     */
    public function setRequiredLevel($requiredLevel)
    {
        $this->requiredLevel = $requiredLevel;

        return $this;
    }

    /**
     * Get required skill rank
     *
     * @return int Required skill rank
     */
    public function getRequiredSkillRank()
    {
        return $this->requiredSkillRank;
    }

    /**
     * Set required skill rank
     *
     * @param int $requiredSkillRank Required skill rank
     *
     * @return $this
     */
    public function setRequiredSkillRank($requiredSkillRank)
    {
        $this->requiredSkillRank = $requiredSkillRank;

        return $this;
    }

    /**
     * Get item source
     *
     * @return ItemSource Item source
     */
    public function getItemSource()
    {
        return $this->itemSource;
    }

    /**
     * Set item source
     *
     * @param ItemSource $itemSource Item source
     *
     * @return $this
     */
    public function setItemSource(ItemSource $itemSource)
    {
        $this->itemSource = $itemSource;

        return $this;
    }

    /**
     * Get base armor
     *
     * @return int Base armor
     */
    public function getBaseArmor()
    {
        return $this->baseArmor;
    }

    /**
     * Set base armor
     *
     * @param int $baseArmor Base armor
     *
     * @return $this
     */
    public function setBaseArmor($baseArmor)
    {
        $this->baseArmor = $baseArmor;

        return $this;
    }

    /**
     * Get has sockets
     *
     * @return bool Has sockets
     */
    public function isHasSockets()
    {
        return $this->hasSockets;
    }

    /**
     * Set has sockets
     *
     * @param bool $hasSockets Has sockets
     *
     * @return $this
     */
    public function setHasSockets($hasSockets)
    {
        $this->hasSockets = $hasSockets;

        return $this;
    }

    /**
     * Get is auctionable
     *
     * @return bool Is auctionable
     */
    public function isIsAuctionable()
    {
        return $this->isAuctionable;
    }

    /**
     * Set is auctionable
     *
     * @param bool $isAuctionable Is auctionable
     *
     * @return $this
     */
    public function setIsAuctionable($isAuctionable)
    {
        $this->isAuctionable = $isAuctionable;

        return $this;
    }

    /**
     * Get armor
     *
     * @return int Armor
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * Set armor
     *
     * @param int $armor Armor
     *
     * @return $this
     */
    public function setArmor($armor)
    {
        $this->armor = $armor;

        return $this;
    }

    /**
     * Get display info ID
     *
     * @return int Display info ID
     */
    public function getDisplayInfoId()
    {
        return $this->displayInfoId;
    }

    /**
     * Set display info ID
     *
     * @param int $displayInfoId Display info ID
     *
     * @return $this
     */
    public function setDisplayInfoId($displayInfoId)
    {
        $this->displayInfoId = $displayInfoId;

        return $this;
    }

    /**
     * Get name description
     *
     * @return string Name description
     */
    public function getNameDescription()
    {
        return $this->nameDescription;
    }

    /**
     * Set name description
     *
     * @param string $nameDescription Name description
     *
     * @return $this
     */
    public function setNameDescription($nameDescription)
    {
        $this->nameDescription = $nameDescription;

        return $this;
    }

    /**
     * Get name description color
     *
     * @return string Name description color
     */
    public function getNameDescriptionColor()
    {
        return $this->nameDescriptionColor;
    }

    /**
     * Set name description color
     *
     * @param string $nameDescriptionColor Name description color
     *
     * @return $this
     */
    public function setNameDescriptionColor($nameDescriptionColor)
    {
        $this->nameDescriptionColor = $nameDescriptionColor;

        return $this;
    }

    /**
     * Get upgradable
     *
     * @return bool Upgradable
     */
    public function isUpgradable()
    {
        return $this->upgradable;
    }

    /**
     * Set upgradable
     *
     * @param bool $upgradable Upgradable
     *
     * @return $this
     */
    public function setUpgradable($upgradable)
    {
        $this->upgradable = $upgradable;

        return $this;
    }

    /**
     * Get heroic tooltip
     *
     * @return bool Heroic tooltip
     */
    public function isHeroicTooltip()
    {
        return $this->heroicTooltip;
    }

    /**
     * Set heroic tooltip
     *
     * @param bool $heroicTooltip Heroic tooltip
     *
     * @return $this
     */
    public function setHeroicTooltip($heroicTooltip)
    {
        $this->heroicTooltip = $heroicTooltip;

        return $this;
    }

    /**
     * Get context
     *
     * @return string Context
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set context
     *
     * @param string $context Context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get bonus lists
     *
     * @return array Bonus lists
     */
    public function getBonusLists()
    {
        return $this->bonusLists;
    }

    /**
     * Set bonus lists
     *
     * @param array $bonusLists Bonus lists
     *
     * @return $this
     */
    public function setBonusLists($bonusLists)
    {
        $this->bonusLists = $bonusLists;

        return $this;
    }

    /**
     * Get available contexts
     *
     * @return array Available contexts
     */
    public function getAvailableContexts()
    {
        return $this->availableContexts;
    }

    /**
     * Set available contexts
     *
     * @param array $availableContexts Available contexts
     *
     * @return $this
     */
    public function setAvailableContexts($availableContexts)
    {
        $this->availableContexts = $availableContexts;

        return $this;
    }

    /**
     * Get bonus summary
     *
     * @return BonusSummary Bonus summary
     */
    public function getBonusSummary()
    {
        return $this->bonusSummary;
    }

    /**
     * Set bonus summary
     *
     * @param BonusSummary $bonusSummary Bonus summary
     *
     * @return $this
     */
    public function setBonusSummary(BonusSummary $bonusSummary)
    {
        $this->bonusSummary = $bonusSummary;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setId($data['id'])
             ->setDisenchantingSkillRank($data['disenchantingSkillRank'])
             ->setDescription($data['description'])
             ->setName($data['name'])
             ->setIcon($data['icon'])
             ->setStackable($data['stackable'])
             ->setItemBind($data['itemBind'])
             ->setBonusStats($this->createBonusStats($data['bonusStats']))
             ->setItemSpells($data['itemSpells'])
             ->setBuyPrice($data['buyPrice'])
             ->setItemClass($data['itemClass'])
             ->setItemSubClass($data['itemSubClass'])
             ->setContainerSlots($data['containerSlots'])
             ->setInventoryType($data['inventoryType'])
             ->setEquippable($data['equippable'])
             ->setItemLevel($data['itemLevel'])
             ->setMaxCount($data['maxCount'])
             ->setMaxDurability($data['maxDurability'])
             ->setMinFactionId($data['minFactionId'])
             ->setMinReputation($data['minReputation'])
             ->setQuality($data['quality'])
             ->setSellPrice($data['sellPrice'])
             ->setRequiredSkill($data['requiredSkill'])
             ->setRequiredLevel($data['requiredLevel'])
             ->setRequiredSkillRank($data['requiredSkillRank'])
             ->setItemSource((new ItemSource())->fillObject($data['itemSource']))
             ->setBaseArmor($data['baseArmor'])
             ->setHasSockets($data['hasSockets'])
             ->setIsAuctionable($data['isAuctionable'])
             ->setArmor($data['armor'])
             ->setDisplayInfoId($data['displayInfoId'])
             ->setNameDescription($data['nameDescription'])
             ->setNameDescriptionColor($data['nameDescriptionColor'])
             ->setUpgradable($data['upgradable'])
             ->setHeroicTooltip($data['heroicTooltip'])
             ->setContext($data['context'])
             ->setBonusLists($data['bonusLists'])
             ->setAvailableContexts($data['availableContexts'])
             ->setBonusSummary((new BonusSummary())->fillObject($data['bonusSummary']));

        if (isset($data['weaponInfo']) && !empty($data['weaponInfo'])) {
            $this->setWeaponInfo((new WeaponInfo())->fillObject($data['weaponInfo']));
        }

        return $this;
    }

    /**
     * Create bonus stats
     *
     * @param array $bonusStats Bonus stats
     *
     * @return BonusStat[]
     */
    private function createBonusStats(array $bonusStats)
    {
        $result = [];

        foreach ($bonusStats as $bonusStat) {
            $createdBonusStat = (new BonusStat())->fillObject($bonusStat);

            $result[] = $createdBonusStat;
        }

        return $result;
    }
}
