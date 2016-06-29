<?php

namespace Gueststream\PMS\IQWare\API;

class GetNationalities
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @param int $GUID
     */
    public function __construct($GUID)
    {
        $this->GUID = $GUID;
    }

    /**
     * @return int
     */
    public function getGUID()
    {
        return $this->GUID;
    }

    /**
     * @param int $GUID
     * @return \Gueststream\PMS\IQWare\API\GetNationalities
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }
}
