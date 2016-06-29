<?php

namespace Gueststream\PMS\IQWare\API;

class GetRateReasons
{

    /**
     * @var int $Guid
     */
    protected $Guid = null;

    /**
     * @param int $Guid
     */
    public function __construct($Guid)
    {
        $this->Guid = $Guid;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->Guid;
    }

    /**
     * @param int $Guid
     * @return \Gueststream\PMS\IQWare\API\GetRateReasons
     */
    public function setGuid($Guid)
    {
        $this->Guid = $Guid;
        return $this;
    }
}
