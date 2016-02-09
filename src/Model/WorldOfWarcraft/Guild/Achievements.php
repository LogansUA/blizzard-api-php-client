<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Guild;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Achievements class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Achievements extends AbstractModel
{
    /**
     * @var array $achievementsCompleted Achievements completed
     */
    private $achievementsCompleted;

    /**
     * @var array $achievementsCompletedTimestamp Achievements completed timestamp
     */
    private $achievementsCompletedTimestamp;

    /**
     * @var array $criteria Criteria
     */
    private $criteria;

    /**
     * @var array $criteriaQuantity Criteria quantity
     */
    private $criteriaQuantity;

    /**
     * @var array $criteriaTimestamp Criteria timestamp
     */
    private $criteriaTimestamp;

    /**
     * @var array $criteriaCreated Criteria created
     */
    private $criteriaCreated;

    /**
     * Get achievements completed
     *
     * @return array Achievements completed
     */
    public function getAchievementsCompleted()
    {
        return $this->achievementsCompleted;
    }

    /**
     * Set achievements completed
     *
     * @param array $achievementsCompleted Achievements completed
     *
     * @return $this
     */
    public function setAchievementsCompleted($achievementsCompleted)
    {
        $this->achievementsCompleted = $achievementsCompleted;

        return $this;
    }

    /**
     * Get achievements completed timestamp
     *
     * @return array Achievements completed timestamp
     */
    public function getAchievementsCompletedTimestamp()
    {
        return $this->achievementsCompletedTimestamp;
    }

    /**
     * Set achievements completed timestamp
     *
     * @param array $achievementsCompletedTimestamp Achievements completed timestamp
     *
     * @return $this
     */
    public function setAchievementsCompletedTimestamp($achievementsCompletedTimestamp)
    {
        $this->achievementsCompletedTimestamp = $achievementsCompletedTimestamp;

        return $this;
    }

    /**
     * Get criteria
     *
     * @return array Criteria
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Set criteria
     *
     * @param array $criteria Criteria
     *
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;

        return $this;
    }

    /**
     * Get criteria quantity
     *
     * @return array Criteria quantity
     */
    public function getCriteriaQuantity()
    {
        return $this->criteriaQuantity;
    }

    /**
     * Set criteria quantity
     *
     * @param array $criteriaQuantity Criteria quantity
     *
     * @return $this
     */
    public function setCriteriaQuantity($criteriaQuantity)
    {
        $this->criteriaQuantity = $criteriaQuantity;

        return $this;
    }

    /**
     * Get criteria timestamp
     *
     * @return array Criteria timestamp
     */
    public function getCriteriaTimestamp()
    {
        return $this->criteriaTimestamp;
    }

    /**
     * Set criteria timestamp
     *
     * @param array $criteriaTimestamp Criteria timestamp
     *
     * @return $this
     */
    public function setCriteriaTimestamp($criteriaTimestamp)
    {
        $this->criteriaTimestamp = $criteriaTimestamp;

        return $this;
    }

    /**
     * Get criteria created
     *
     * @return array Criteria created
     */
    public function getCriteriaCreated()
    {
        return $this->criteriaCreated;
    }

    /**
     * Set criteria created
     *
     * @param array $criteriaCreated Criteria created
     *
     * @return $this
     */
    public function setCriteriaCreated($criteriaCreated)
    {
        $this->criteriaCreated = $criteriaCreated;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setAchievementsCompleted($data['achievementsCompleted'])
             ->setAchievementsCompletedTimestamp($data['achievementsCompletedTimestamp'])
             ->setCriteria($data['criteria'])
             ->setCriteriaQuantity($data['criteriaQuantity'])
             ->setCriteriaTimestamp($data['criteriaTimestamp'])
             ->setCriteriaCreated($data['criteriaCreated']);

        return $this;
    }
}
