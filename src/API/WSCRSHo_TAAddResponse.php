<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_TAAddResponse
{

    /**
     * @var int $WSCRSHo_TAAddResult
     */
    protected $WSCRSHo_TAAddResult = null;

    /**
     * @param int $WSCRSHo_TAAddResult
     */
    public function __construct($WSCRSHo_TAAddResult)
    {
        $this->WSCRSHo_TAAddResult = $WSCRSHo_TAAddResult;
    }

    /**
     * @return int
     */
    public function getWSCRSHo_TAAddResult()
    {
        return $this->WSCRSHo_TAAddResult;
    }

    /**
     * @param int $WSCRSHo_TAAddResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_TAAddResponse
     */
    public function setWSCRSHo_TAAddResult($WSCRSHo_TAAddResult)
    {
        $this->WSCRSHo_TAAddResult = $WSCRSHo_TAAddResult;
        return $this;
    }
}
