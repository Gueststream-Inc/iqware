<?php

namespace Gueststream\PMS\IQWare\API;

class getBeddingsResponse
{

    /**
     * @var ArrayOfBedding $getBeddingsResult
     */
    protected $getBeddingsResult = null;

    /**
     * @param ArrayOfBedding $getBeddingsResult
     */
    public function __construct($getBeddingsResult)
    {
        $this->getBeddingsResult = $getBeddingsResult;
    }

    /**
     * @return ArrayOfBedding
     */
    public function getGetBeddingsResult()
    {
        return $this->getBeddingsResult;
    }

    /**
     * @param ArrayOfBedding $getBeddingsResult
     * @return \Gueststream\PMS\IQWare\API\getBeddingsResponse
     */
    public function setGetBeddingsResult($getBeddingsResult)
    {
        $this->getBeddingsResult = $getBeddingsResult;
        return $this;
    }
}
