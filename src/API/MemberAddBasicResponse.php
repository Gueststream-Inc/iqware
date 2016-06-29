<?php

namespace Gueststream\PMS\IQWare\API;

class MemberAddBasicResponse
{

    /**
     * @var int $MemberAddBasicResult
     */
    protected $MemberAddBasicResult = null;

    /**
     * @param int $MemberAddBasicResult
     */
    public function __construct($MemberAddBasicResult)
    {
        $this->MemberAddBasicResult = $MemberAddBasicResult;
    }

    /**
     * @return int
     */
    public function getMemberAddBasicResult()
    {
        return $this->MemberAddBasicResult;
    }

    /**
     * @param int $MemberAddBasicResult
     * @return \Gueststream\PMS\IQWare\API\MemberAddBasicResponse
     */
    public function setMemberAddBasicResult($MemberAddBasicResult)
    {
        $this->MemberAddBasicResult = $MemberAddBasicResult;
        return $this;
    }
}
