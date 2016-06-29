<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_MemberAddResponse
{

    /**
     * @var int $WSCRSHo_MemberAddResult
     */
    protected $WSCRSHo_MemberAddResult = null;

    /**
     * @param int $WSCRSHo_MemberAddResult
     */
    public function __construct($WSCRSHo_MemberAddResult)
    {
        $this->WSCRSHo_MemberAddResult = $WSCRSHo_MemberAddResult;
    }

    /**
     * @return int
     */
    public function getWSCRSHo_MemberAddResult()
    {
        return $this->WSCRSHo_MemberAddResult;
    }

    /**
     * @param int $WSCRSHo_MemberAddResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_MemberAddResponse
     */
    public function setWSCRSHo_MemberAddResult($WSCRSHo_MemberAddResult)
    {
        $this->WSCRSHo_MemberAddResult = $WSCRSHo_MemberAddResult;
        return $this;
    }
}
