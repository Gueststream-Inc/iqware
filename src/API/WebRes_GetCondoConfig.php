<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoConfig
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @param int $guid
     */
    public function __construct($guid)
    {
        $this->guid = $guid;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoConfig
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }
}
