<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_ClubGetNextCardNumberResponse
{

    /**
     * @var int $WSCRSHo_ClubGetNextCardNumberResult
     */
    protected $WSCRSHo_ClubGetNextCardNumberResult = null;

    /**
     * @param int $WSCRSHo_ClubGetNextCardNumberResult
     */
    public function __construct($WSCRSHo_ClubGetNextCardNumberResult)
    {
        $this->WSCRSHo_ClubGetNextCardNumberResult = $WSCRSHo_ClubGetNextCardNumberResult;
    }

    /**
     * @return int
     */
    public function getWSCRSHo_ClubGetNextCardNumberResult()
    {
        return $this->WSCRSHo_ClubGetNextCardNumberResult;
    }

    /**
     * @param int $WSCRSHo_ClubGetNextCardNumberResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubGetNextCardNumberResponse
     */
    public function setWSCRSHo_ClubGetNextCardNumberResult($WSCRSHo_ClubGetNextCardNumberResult)
    {
        $this->WSCRSHo_ClubGetNextCardNumberResult = $WSCRSHo_ClubGetNextCardNumberResult;
        return $this;
    }
}
