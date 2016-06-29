<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getActivityStructureStringResponse
{

    /**
     * @var string $WebRes_getActivityStructureStringResult
     */
    protected $WebRes_getActivityStructureStringResult = null;

    /**
     * @param string $WebRes_getActivityStructureStringResult
     */
    public function __construct($WebRes_getActivityStructureStringResult)
    {
        $this->WebRes_getActivityStructureStringResult = $WebRes_getActivityStructureStringResult;
    }

    /**
     * @return string
     */
    public function getWebRes_getActivityStructureStringResult()
    {
        return $this->WebRes_getActivityStructureStringResult;
    }

    /**
     * @param string $WebRes_getActivityStructureStringResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_getActivityStructureStringResponse
     */
    public function setWebRes_getActivityStructureStringResult($WebRes_getActivityStructureStringResult)
    {
        $this->WebRes_getActivityStructureStringResult = $WebRes_getActivityStructureStringResult;
        return $this;
    }
}
