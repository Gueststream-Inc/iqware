<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_FitMemberListUpdate
{

    /**
     * @var cFitMemberList $FitMemberList
     */
    protected $FitMemberList = null;

    /**
     * @param cFitMemberList $FitMemberList
     */
    public function __construct($FitMemberList)
    {
        $this->FitMemberList = $FitMemberList;
    }

    /**
     * @return cFitMemberList
     */
    public function getFitMemberList()
    {
        return $this->FitMemberList;
    }

    /**
     * @param cFitMemberList $FitMemberList
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_FitMemberListUpdate
     */
    public function setFitMemberList($FitMemberList)
    {
        $this->FitMemberList = $FitMemberList;
        return $this;
    }
}
