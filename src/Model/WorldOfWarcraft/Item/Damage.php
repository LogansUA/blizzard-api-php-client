<?php

namespace BlizzardApi\Model\WorldOfWarcraft\Item;

use BlizzardApi\Model\WorldOfWarcraft\AbstractModel;

/**
 * Class Damage
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Damage extends AbstractModel
{
    /**
     * @var int $min Min
     */
    private $min;

    /**
     * @var int $max Max
     */
    private $max;

    /**
     * @var int $exactMin Exact min
     */
    private $exactMin;

    /**
     * @var int $exactMax Exact max
     */
    private $exactMax;

    /**
     * Get min
     *
     * @return int Min
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set min
     *
     * @param int $min Min
     *
     * @return $this
     */
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Get max
     *
     * @return int Max
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set max
     *
     * @param int $max Max
     *
     * @return $this
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get exact min
     *
     * @return int Exact min
     */
    public function getExactMin()
    {
        return $this->exactMin;
    }

    /**
     * Set exact min
     *
     * @param int $exactMin Exact min
     *
     * @return $this
     */
    public function setExactMin($exactMin)
    {
        $this->exactMin = $exactMin;

        return $this;
    }

    /**
     * Get exact max
     *
     * @return int Exact max
     */
    public function getExactMax()
    {
        return $this->exactMax;
    }

    /**
     * Set exact max
     *
     * @param int $exactMax Exact max
     *
     * @return $this
     */
    public function setExactMax($exactMax)
    {
        $this->exactMax = $exactMax;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setMin($data['min'])
             ->setMax($data['max'])
             ->setExactMin($data['exactMin'])
             ->setExactMax($data['exactMax']);

        return $this;
    }
}
