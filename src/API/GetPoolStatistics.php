<?php

namespace Gueststream\PMS\IQWare\API;

class GetPoolStatistics
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @param int $intGUID
     */
    public function __construct($intGUID)
    {
        $this->intGUID = $intGUID;
    }

    /**
     * @return int
     */
    public function getIntGUID()
    {
        return $this->intGUID;
    }

    /**
     * @param int $intGUID
     * @return \Gueststream\PMS\IQWare\API\GetPoolStatistics
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }
}
