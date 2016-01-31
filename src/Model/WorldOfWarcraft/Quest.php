<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Class Quest
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Quest extends AbstractModel
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
     * @var int $reqLevel Require level
     */
    private $reqLevel;

    /**
     * @var int $suggestedPartyMembers Suggested party members
     */
    private $suggestedPartyMembers;

    /**
     * @var string $category Category
     */
    private $category;

    /**
     * @var int $level Level
     */
    private $level;

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
     * @param string $title Title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get require level
     *
     * @return int Require level
     */
    public function getReqLevel()
    {
        return $this->reqLevel;
    }

    /**
     * Set require level
     *
     * @param int $reqLevel Require level
     *
     * @return $this
     */
    public function setReqLevel($reqLevel)
    {
        $this->reqLevel = $reqLevel;

        return $this;
    }

    /**
     * Get suggested party members
     *
     * @return int Suggested party members
     */
    public function getSuggestedPartyMembers()
    {
        return $this->suggestedPartyMembers;
    }

    /**
     * Set suggested party members
     *
     * @param int $suggestedPartyMembers Suggested party members
     *
     * @return $this
     */
    public function setSuggestedPartyMembers($suggestedPartyMembers)
    {
        $this->suggestedPartyMembers = $suggestedPartyMembers;

        return $this;
    }

    /**
     * Get category
     *
     * @return string Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set category
     *
     * @param string $category Category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;

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
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setId($data['id'])
             ->setTitle($data['title'])
             ->setReqLevel($data['reqLevel'])
             ->setSuggestedPartyMembers($data['suggestedPartyMembers'])
             ->setCategory($data['category'])
             ->setLevel($data['level']);

        return $this;
    }
}
