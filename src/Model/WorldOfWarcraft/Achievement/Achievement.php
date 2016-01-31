<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Achievement;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class Achievement
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Achievement extends AbstractModel
{
    /**
     * @var int $id ID
     */
    private $id;

    /**
     * @var string $title Title
     */
    private $title;

    /**
     * @var int $points Points
     */
    private $points;

    /**
     * @var string $description Description
     */
    private $description;

    /**
     * @var string $reward Reward name
     */
    private $rewardName;

    /**
     * @var array $rewardItems Array of reward items
     */
    private $rewardItems;

    /**
     * @var string $icon Icon
     */
    private $icon;

    /**
     * @var Criteria[] $criteria Array of criteria
     */
    private $criteria;

    /**
     * @var bool $isAccountWide Is account wide
     */
    private $isAccountWide;

    /**
     * @var int $factionId Faction ID
     */
    private $factionId;

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
     * Get title
     *
     * @return string Title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get points
     *
     * @return int Points
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set points
     *
     * @param int $points points
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->points = $points;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get reward name
     *
     * @return string Reward name
     */
    public function getRewardName()
    {
        return $this->rewardName;
    }

    /**
     * Set rewardName
     *
     * @param string $rewardName Reward name
     *
     * @return $this
     */
    public function setRewardName($rewardName)
    {
        $this->rewardName = $rewardName;

        return $this;
    }

    /**
     * Get reward items
     *
     * @return RewardItem[] Reward items
     */
    public function getRewardItems()
    {
        return $this->rewardItems;
    }

    /**
     * Set reward items
     *
     * @param RewardItem[] $rewardItems Reward items
     *
     * @return $this
     */
    public function setRewardItems($rewardItems)
    {
        $this->rewardItems = $rewardItems;

        return $this;
    }

    /**
     * Add reward item
     *
     * @param RewardItem $rewardItem Reward item
     *
     * @return $this
     */
    public function addRewardItem(RewardItem $rewardItem)
    {
        $this->rewardItems[] = $rewardItem;

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
     * Get criteria
     *
     * @return Criteria[] Criteria
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Set criteria
     *
     * @param Criteria[] $criteria Criteria
     *
     * @return $this
     */
    public function setCriteria(array $criteria)
    {
        $this->criteria = $criteria;

        return $this;
    }

    /**
     * Add criteria
     *
     * @param Criteria $criteria Criteria
     *
     * @return $this
     */
    public function addCriteria(Criteria $criteria)
    {
        $this->criteria[] = $criteria;

        return $this;
    }

    /**
     * Is account wide
     *
     * @return bool Is account wide
     */
    public function isAccountWide()
    {
        return $this->isAccountWide;
    }

    /**
     * Set is account wide
     *
     * @param bool $isAccountWide Is account wide
     *
     * @return $this
     */
    public function setIsAccountWide($isAccountWide)
    {
        $this->isAccountWide = $isAccountWide;

        return $this;
    }

    /**
     * Get faction ID
     *
     * @return int Faction ID
     */
    public function getFactionId()
    {
        return $this->factionId;
    }

    /**
     * Set faction ID
     *
     * @param int $factionId Faction ID
     *
     * @return $this
     */
    public function setFactionId($factionId)
    {
        $this->factionId = $factionId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setId($data['id'])
             ->setTitle($data['title'])
             ->setPoints($data['points'])
             ->setDescription($data['description'])
             ->setRewardName($data['reward'])
             ->setRewardItems($this->createRewardItems($data['rewardItems']))
             ->setIcon($data['icon'])
             ->setCriteria($this->createCriteria($data['criteria']))
             ->setIsAccountWide($data['accountWide'])
             ->setFactionId($data['factionId']);

        return $this;
    }

    /**
     * Create reward items
     *
     * @param array $rewardItems Reward items
     *
     * @return RewardItem[]
     */
    private function createRewardItems(array $rewardItems)
    {
        $result = [];

        foreach ($rewardItems as $rewardItem) {
            $achievementRewardItem = (new RewardItem())->fillObject($rewardItem);

            $result[] = $achievementRewardItem;
        }

        return $result;
    }

    /**
     * Create criteria
     *
     * @param array $criteria List of criteria
     *
     * @return Criteria[]
     */
    private function createCriteria(array $criteria)
    {
        $result = [];
        foreach ($criteria as $step) {
            $achievementCriteria = (new Criteria())->fillObject($step);

            $result[] = $achievementCriteria;
        }

        return $result;
    }
}
