<?php

namespace Gueststream\PMS\IQWare\API;

class BeachChairGetAvailBookingSiteResponse
{

    /**
     * @var AvailBookingSites $BeachChairGetAvailBookingSiteResult
     */
    protected $BeachChairGetAvailBookingSiteResult = null;

    /**
     * @var int $ID_ActivityToken
     */
    protected $ID_ActivityToken = null;

    /**
     * @var TBCResultCode $ResultCode
     */
    protected $ResultCode = null;

    /**
     * @param AvailBookingSites $BeachChairGetAvailBookingSiteResult
     * @param int $ID_ActivityToken
     * @param TBCResultCode $ResultCode
     */
    public function __construct($BeachChairGetAvailBookingSiteResult, $ID_ActivityToken, $ResultCode)
    {
        $this->BeachChairGetAvailBookingSiteResult = $BeachChairGetAvailBookingSiteResult;
        $this->ID_ActivityToken = $ID_ActivityToken;
        $this->ResultCode = $ResultCode;
    }

    /**
     * @return AvailBookingSites
     */
    public function getBeachChairGetAvailBookingSiteResult()
    {
        return $this->BeachChairGetAvailBookingSiteResult;
    }

    /**
     * @param AvailBookingSites $BeachChairGetAvailBookingSiteResult
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetAvailBookingSiteResponse
     */
    public function setBeachChairGetAvailBookingSiteResult($BeachChairGetAvailBookingSiteResult)
    {
        $this->BeachChairGetAvailBookingSiteResult = $BeachChairGetAvailBookingSiteResult;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_ActivityToken()
    {
        return $this->ID_ActivityToken;
    }

    /**
     * @param int $ID_ActivityToken
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetAvailBookingSiteResponse
     */
    public function setID_ActivityToken($ID_ActivityToken)
    {
        $this->ID_ActivityToken = $ID_ActivityToken;
        return $this;
    }

    /**
     * @return TBCResultCode
     */
    public function getResultCode()
    {
        return $this->ResultCode;
    }

    /**
     * @param TBCResultCode $ResultCode
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetAvailBookingSiteResponse
     */
    public function setResultCode($ResultCode)
    {
        $this->ResultCode = $ResultCode;
        return $this;
    }
}
