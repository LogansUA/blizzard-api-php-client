<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Class Time
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Time extends AbstractModel
{
    /**
     * @var int $time Time
     */
    private $time;

    /**
     * @var int $hours Hours
     */
    private $hours;

    /**
     * @var int $minutes Minutes
     */
    private $minutes;

    /**
     * @var int $seconds Seconds
     */
    private $seconds;

    /**
     * @var int $milliseconds Milliseconds
     */
    private $milliseconds;

    /**
     * @var bool $isPositive Is positive
     */
    private $isPositive;

    /**
     * Get time
     *
     * @return int Time
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set time
     *
     * @param int $time Time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get hours
     *
     * @return int Hours
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set hours
     *
     * @param int $hours Hours
     *
     * @return $this
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get minutes
     *
     * @return int Minutes
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * Set minutes
     *
     * @param int $minutes Minutes
     *
     * @return $this
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;

        return $this;
    }

    /**
     * Get seconds
     *
     * @return int Seconds
     */
    public function getSeconds()
    {
        return $this->seconds;
    }

    /**
     * Set seconds
     *
     * @param int $seconds Seconds
     *
     * @return $this
     */
    public function setSeconds($seconds)
    {
        $this->seconds = $seconds;

        return $this;
    }

    /**
     * Get milliseconds
     *
     * @return int Milliseconds
     */
    public function getMilliseconds()
    {
        return $this->milliseconds;
    }

    /**
     * Set milliseconds
     *
     * @param int $milliseconds Milliseconds
     *
     * @return $this
     */
    public function setMilliseconds($milliseconds)
    {
        $this->milliseconds = $milliseconds;

        return $this;
    }

    /**
     * Get is positive
     *
     * @return bool Is positive
     */
    public function isIsPositive()
    {
        return $this->isPositive;
    }

    /**
     * Set is positive
     *
     * @param bool $isPositive Is positive
     *
     * @return $this
     */
    public function setIsPositive($isPositive)
    {
        $this->isPositive = $isPositive;

        return $this;
    }

    /**
     * Fill object
     *
     * @param array $data Decoded JSON response
     *
     * @return Time
     */
    public function fillObject(array $data)
    {
        $this->setTime($data['time'])
             ->setHours($data['hours'])
             ->setMinutes($data['minutes'])
             ->setSeconds($data['seconds'])
             ->setMilliseconds($data['milliseconds'])
             ->setIsPositive($data['isPositive']);

        return $this;
    }
}
