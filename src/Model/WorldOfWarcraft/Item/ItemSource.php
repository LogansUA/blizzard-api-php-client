<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Item;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class ItemSource
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class ItemSource extends AbstractModel
{
    /**
     * @var int $sourceId Source ID
     */
    private $sourceId;

    /**
     * @var string $sourceType Source type
     */
    private $sourceType;

    /**
     * Get source ID
     *
     * @return int Source ID
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Set source ID
     *
     * @param int $sourceId Source ID
     *
     * @return $this
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;

        return $this;
    }

    /**
     * Get source type
     *
     * @return string Source type
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * Set source type
     *
     * @param string $sourceType Source type
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setSourceId($data['sourceId'])
             ->setSourceType($data['sourceType']);

        return $this;
    }
}
