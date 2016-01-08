<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

use GuzzleHttp\Psr7\Response;

/**
 * AbstractModel class
 *
 * @todo Move response variable
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
abstract class AbstractModel
{
    /**
     * @var Response $response API Response
     */
    protected $response;

    /**
     * AbstractModel constructor
     *
     * @param Response $response API response
     *
     * @return object
     */
    public function initializeObject($response)
    {
        $this->response = $response;

        $this->fillObject(json_decode((string) $response->getBody(), true));

        return $this;
    }

    /**
     * Get response
     *
     * @return Response Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Fill object
     *
     * @param array $data Decoded JSON response
     *
     * @return $this
     */
    abstract public function fillObject(array $data);
}
