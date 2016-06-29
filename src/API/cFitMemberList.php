<?php

namespace Gueststream\PMS\IQWare\API;

class cFitMemberList
{

    /**
     * @var int $MemberNo
     */
    protected $MemberNo = null;

    /**
     * @var ArrayOfCFitMember $FitMemberList
     */
    protected $FitMemberList = null;

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
     * @return \Gueststream\PMS\IQWare\API\cFitMemberList
     */
    public function setMemberNo($MemberNo)
    {
        $this->MemberNo = $MemberNo;
        return $this;
    }

    /**
     * @return ArrayOfCFitMember
     */
    public function getFitMemberList()
    {
        return $this->FitMemberList;
    }

    /**
     * @param ArrayOfCFitMember $FitMemberList
     * @return \Gueststream\PMS\IQWare\API\cFitMemberList
     */
    public function setFitMemberList($FitMemberList)
    {
        $this->FitMemberList = $FitMemberList;
        return $this;
    }
}
