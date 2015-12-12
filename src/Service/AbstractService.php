<?php

namespace BlizzardApi\Service;

/**
 * Class AbstractService
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class AbstractService
{
    /**
     * @var string $serviceParam Service parameter
     */
    protected $serviceParam;

    /**
     * Get service parameter
     *
     * @return string Service parameter
     */
    public function getServiceParam()
    {
        return $this->serviceParam;
    }

    /**
     * Set service parameter
     *
     * @param string $serviceParam Service parameter
     *
     * @return $this
     */
    public function setServiceParam($serviceParam)
    {
        $this->serviceParam = $serviceParam;

        return $this;
    }
}
