<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

use DateTime;

/**
 * Class Group
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Group extends AbstractModel
{
    /**
     * @var int $ranking Challange place
     */
    private $ranking;

    /**
     * @var Time $time Time
     */
    private $time;

    /**
     * @var DateTime $date Date
     */
    private $date;

    /**
     * @var string $medal Medal
     */
    private $medal;

    /**
     * @var string $faction Faction
     */
    private $faction;

    /**
     * @var bool $isRecurring Is recurring
     */
    private $isRecurring;

    /**
     * @var Member[] $members Members
     */
    private $members;

    /**
     * Get ranking
     *
     * @return int Ranking
     */
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * Set ranking
     *
     * @param int $ranking Ranking
     *
     * @return $this
     */
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;

        return $this;
    }

    /**
     * Get time
     *
     * @return Time Time
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set time
     *
     * @param Time $time Time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get date
     *
     * @return DateTime Datetime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set date
     *
     * @param DateTime $date Datetime
     *
     * @return $this
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get medal
     *
     * @return string Medal
     */
    public function getMedal()
    {
        return $this->medal;
    }

    /**
     * Set medal
     *
     * @param string $medal Medal
     *
     * @return $this
     */
    public function setMedal($medal)
    {
        $this->medal = $medal;

        return $this;
    }

    /**
     * Get faction
     *
     * @return string Faction
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * Set faction
     *
     * @param string $faction Faction
     *
     * @return $this
     */
    public function setFaction($faction)
    {
        $this->faction = $faction;

        return $this;
    }

    /**
     * Get is recurring
     *
     * @return bool Is recurring
     */
    public function isIsRecurring()
    {
        return $this->isRecurring;
    }

    /**
     * Set is recurring
     *
     * @param bool $isRecurring Is recurring
     *
     * @return $this
     */
    public function setIsRecurring($isRecurring)
    {
        $this->isRecurring = $isRecurring;

        return $this;
    }

    /**
     * Get members
     *
     * @return Member[] Members
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set members
     *
     * @param Member[] $members Members
     *
     * @return $this
     */
    public function setMembers($members)
    {
        $this->members = $members;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setRanking($data['ranking'])
             ->setTime($data['time'])
             ->setDate(new DateTime($data['date']))
             ->setMedal($data['medal'])
             ->setFaction($data['faction'])
             ->setIsRecurring($data['isRecurring'])
             ->setMembers($this->createMembers($data['members']));

        return $this;
    }

    /**
     * Create members
     *
     * @param array $members Members
     *
     * @return Member[]
     */
    private function createMembers(array $members)
    {
        $result = [];

        foreach ($members as $member) {
            $newMember = (new Member())->fillObject($member);

            $result[] = $newMember;
        }

        return $result;
    }
}
