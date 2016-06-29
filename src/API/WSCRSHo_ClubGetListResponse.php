<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_ClubGetListResponse
{

    /**
     * @var WSCRSHo_ClubGetListResult $WSCRSHo_ClubGetListResult
     */
    protected $WSCRSHo_ClubGetListResult = null;

    /**
     * @param WSCRSHo_ClubGetListResult $WSCRSHo_ClubGetListResult
     */
    public function __construct($WSCRSHo_ClubGetListResult)
    {
        $this->WSCRSHo_ClubGetListResult = $WSCRSHo_ClubGetListResult;
    }

    /**
     * @return WSCRSHo_ClubGetListResult
     */
    public function getWSCRSHo_ClubGetListResult()
    {
        return $this->WSCRSHo_ClubGetListResult;
    }

    /**
     * @param WSCRSHo_ClubGetListResult $WSCRSHo_ClubGetListResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubGetListResponse
     */
    public function setWSCRSHo_ClubGetListResult($WSCRSHo_ClubGetListResult)
    {
        $this->WSCRSHo_ClubGetListResult = $WSCRSHo_ClubGetListResult;
        return $this;
    }
}
