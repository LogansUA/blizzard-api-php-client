<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Item;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class ItemSet
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class ItemSet extends AbstractModel
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
     * @var SetBonus[] $setBonuses Set bonuses
     */
    private $setBonuses;

    /**
     * @var array $items Items
     */
    private $items;

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
     * Get set bonuses
     *
     * @return SetBonus[] Set bonuses
     */
    public function getSetBonuses()
    {
        return $this->setBonuses;
    }

    /**
     * Set set bonuses
     *
     * @param SetBonus[] $setBonuses Set bonuses
     *
     * @return $this
     */
    public function setSetBonuses($setBonuses)
    {
        $this->setBonuses = $setBonuses;

        return $this;
    }

    /**
     * Get items
     *
     * @return array Items
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set items
     *
     * @param array $items Items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setId($data['id'])
             ->setName($data['name'])
             ->setSetBonuses($this->createSetBonuses($data['setBonuses']))
             ->setItems($data['items']);

        return $this;
    }

    /**
     * Create set bonuses
     *
     * @param array $setBonuses Set bonuses
     *
     * @return SetBonus[]
     */
    private function createSetBonuses(array $setBonuses)
    {
        $result = [];

        foreach ($setBonuses as $setBonus) {
            $createdSetBonus = (new SetBonus())->fillObject($setBonus);

            $result[] = $createdSetBonus;
        }

        return $result;
    }
}
