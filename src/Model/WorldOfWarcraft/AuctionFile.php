<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

use DateTime;

/**
 * AuctionFile class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class AuctionFile extends AbstractModel
{
    /**
     * @var string $url URL to auctions
     */
    private $url;

    /**
     * @var \DateTime $lastModified Last modified datetime
     */
    private $lastModified;

    /**
     * Get url
     *
     * @return string Url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get last modified
     *
     * @return DateTime Last modified
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Set last modified
     *
     * @param DateTime $lastModified Last modified
     *
     * @return $this
     */
    public function setLastModified(DateTime $lastModified)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        /** @todo Change setting last modified */
        $this->setUrl($data['url'])
             ->setLastModified((new DateTime())->setTimestamp(substr($data['lastModified'], 0, -3)));

        return $this;
    }
}
