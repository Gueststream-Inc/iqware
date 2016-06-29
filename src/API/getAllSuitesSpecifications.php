<?php

namespace Gueststream\PMS\IQWare\API;

class getAllSuitesSpecifications
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
     * @return \Gueststream\PMS\IQWare\API\getAllSuitesSpecifications
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }
}
