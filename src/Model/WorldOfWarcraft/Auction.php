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
