<?php

namespace Gueststream\PMS\IQWare\API;

class BeachChairSBDSummary
{

    /**
     * @var ArrayOfSBDSummary $SBD_Summary
     */
    protected $SBD_Summary = null;

    /**
     * @var ArrayOfActivityUnit $ActivityUnitResult
     */
    protected $ActivityUnitResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfSBDSummary
     */
    public function getSBD_Summary()
    {
        return $this->SBD_Summary;
    }

    /**
     * @param ArrayOfSBDSummary $SBD_Summary
     * @return \Gueststream\PMS\IQWare\API\BeachChairSBDSummary
     */
    public function setSBD_Summary($SBD_Summary)
    {
        $this->SBD_Summary = $SBD_Summary;
        return $this;
    }

    /**
     * @return ArrayOfActivityUnit
     */
    public function getActivityUnitResult()
    {
        return $this->ActivityUnitResult;
    }

    /**
     * @param ArrayOfActivityUnit $ActivityUnitResult
     * @return \Gueststream\PMS\IQWare\API\BeachChairSBDSummary
     */
    public function setActivityUnitResult($ActivityUnitResult)
    {
        $this->ActivityUnitResult = $ActivityUnitResult;
        return $this;
    }
}
