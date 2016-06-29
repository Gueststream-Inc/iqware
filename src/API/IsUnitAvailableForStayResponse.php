<?php

namespace Gueststream\PMS\IQWare\API;

class IsUnitAvailableForStayResponse
{

    /**
     * @var boolean $IsUnitAvailableForStayResult
     */
    protected $IsUnitAvailableForStayResult = null;

    /**
     * @param boolean $IsUnitAvailableForStayResult
     */
    public function __construct($IsUnitAvailableForStayResult)
    {
        $this->IsUnitAvailableForStayResult = $IsUnitAvailableForStayResult;
    }

    /**
     * @return boolean
     */
    public function getIsUnitAvailableForStayResult()
    {
        return $this->IsUnitAvailableForStayResult;
    }

    /**
     * @param boolean $IsUnitAvailableForStayResult
     * @return \Gueststream\PMS\IQWare\API\IsUnitAvailableForStayResponse
     */
    public function setIsUnitAvailableForStayResult($IsUnitAvailableForStayResult)
    {
        $this->IsUnitAvailableForStayResult = $IsUnitAvailableForStayResult;
        return $this;
    }
}
