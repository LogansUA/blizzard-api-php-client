<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

use GuzzleHttp\Psr7\Response;

/**
 * Auction class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Auction extends AbstractModel
{
    /**
     * @var array $files Files
     */
    private $files;

    /**
     * Get files
     *
     * @return array Files
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Set files
     *
     * @param array $files Files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    protected function fillObject(array $data)
    {
        if (!empty($data)) {
            $this->setFiles($this->createFiles($data['files']));
        }
    }

    /**
     * Create files
     *
     * @param array $files Auction files
     *
     * @return array
     */
    private function createFiles(array $files)
    {
        $auctionFiles = [];

        foreach ($files as $file) {
            $auctionFile = (new AuctionFile())
                ->setUrl($file['url'])
                ->setLastModified((new \DateTime())->setTimestamp(substr($file['lastModified'], 0, -3)));

            $auctionFiles[] = $auctionFile;
        }

        return $auctionFiles;
    }
}
