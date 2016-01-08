<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

/**
 * Auction class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Auction extends AbstractModel
{
    /**
     * @var AuctionFile[] $files Files
     */
    private $files;

    /**
     * Get files
     *
     * @return AuctionFile[] Files
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
     * Add file
     *
     * @param AuctionFile $auctionFile Auction file
     *
     * @return $this
     */
    public function addFile(AuctionFile $auctionFile)
    {
        $this->files[] = $auctionFile;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function fillObject(array $data)
    {
        $this->setFiles($this->createFiles($data['files']));

        return $this;
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
        $result = [];

        foreach ($files as $file) {
            $auctionFile = (new AuctionFile())->fillObject($file);

            $result[] = $auctionFile;
        }

        return $result;
    }
}
