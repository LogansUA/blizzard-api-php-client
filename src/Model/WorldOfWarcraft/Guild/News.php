<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Guild;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * News class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class News extends AbstractModel
{
    /**
     * @var string $type Type
     */
    private $type;

    /**
     * @var string $character Character
     */
    private $character;

    /**
     * @var \DateTime $timestamp Action at
     */
    private $timestamp;

    /**
     * @var int $itemId Item ID
     */
    private $itemId;

    /**
     * @var string $context Context
     */
    private $context;

    /**
     * @var array $bonusLists Bonus lists
     */
    private $bonusLists;

    /**
     * Get type
     *
     * @return string Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param string $type Type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get character
     *
     * @return string Character
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Set character
     *
     * @param string $character Character
     *
     * @return $this
     */
    public function setCharacter($character)
    {
        $this->character = $character;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime Timestamp
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp Action at
     *
     * @return $this
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get item ID
     *
     * @return int Item ID
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set item ID
     *
     * @param int $itemId Item ID
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

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
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setType($data['type'])
             ->setCharacter($data['character'])
             ->setTimestamp((new \DateTime())->setTimestamp(substr($data['timestamp'], 0, -3)))
             ->setItemId($data['itemId'])
             ->setContext($data['context'])
             ->setBonusLists($data['bonusLists']);

        return $this;
    }
}
