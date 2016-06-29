<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_FitMemberGetList
{

    /**
     * @var int $MemberNo
     */
    protected $MemberNo = null;

    /**
     * @param int $MemberNo
     */
    public function __construct($MemberNo)
    {
        $this->MemberNo = $MemberNo;
    }

    /**
     * @return int
     */
    public function getMemberNo()
    {
        return $this->MemberNo;
    }

    /**
     * @param int $MemberNo
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_FitMemberGetList
     */
    public function setMemberNo($MemberNo)
    {
        $this->MemberNo = $MemberNo;
        return $this;
    }
}
