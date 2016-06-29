<?php

namespace Gueststream\PMS\IQWare\API;

class DstNewTravelAgent
{

    /**
     * @var NewTravelAgent $NewTravelAgent
     */
    protected $NewTravelAgent = null;

    /**
     * @param NewTravelAgent $NewTravelAgent
     */
    public function __construct($NewTravelAgent)
    {
        $this->NewTravelAgent = $NewTravelAgent;
    }

    /**
     * @return NewTravelAgent
     */
    public function getNewTravelAgent()
    {
        return $this->NewTravelAgent;
    }

    /**
     * @param NewTravelAgent $NewTravelAgent
     * @return \Gueststream\PMS\IQWare\API\DstNewTravelAgent
     */
    public function setNewTravelAgent($NewTravelAgent)
    {
        $this->NewTravelAgent = $NewTravelAgent;
        return $this;
    }
}
