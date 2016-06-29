<?php

namespace Gueststream\PMS\IQWare\API;

class MemberAddResponse
{

    /**
     * @var int $MemberAddResult
     */
    protected $MemberAddResult = null;

    /**
     * @param int $MemberAddResult
     */
    public function __construct($MemberAddResult)
    {
        $this->MemberAddResult = $MemberAddResult;
    }

    /**
     * @return int
     */
    public function getMemberAddResult()
    {
        return $this->MemberAddResult;
    }

    /**
     * @param int $MemberAddResult
     * @return \Gueststream\PMS\IQWare\API\MemberAddResponse
     */
    public function setMemberAddResult($MemberAddResult)
    {
        $this->MemberAddResult = $MemberAddResult;
        return $this;
    }
}
