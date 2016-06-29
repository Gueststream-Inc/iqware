<?php

namespace Gueststream\PMS\IQWare\API;

class MemberLoyaltyResponse
{

    /**
     * @var Loyalty $MemberLoyaltyResult
     */
    protected $MemberLoyaltyResult = null;

    /**
     * @param Loyalty $MemberLoyaltyResult
     */
    public function __construct($MemberLoyaltyResult)
    {
        $this->MemberLoyaltyResult = $MemberLoyaltyResult;
    }

    /**
     * @return Loyalty
     */
    public function getMemberLoyaltyResult()
    {
        return $this->MemberLoyaltyResult;
    }

    /**
     * @param Loyalty $MemberLoyaltyResult
     * @return \Gueststream\PMS\IQWare\API\MemberLoyaltyResponse
     */
    public function setMemberLoyaltyResult($MemberLoyaltyResult)
    {
        $this->MemberLoyaltyResult = $MemberLoyaltyResult;
        return $this;
    }
}
