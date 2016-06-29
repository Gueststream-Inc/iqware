<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_ClubMemberSearch
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var string $MemberNo
     */
    protected $MemberNo = null;

    /**
     * @var string $ClubNo
     */
    protected $ClubNo = null;

    /**
     * @var string $ClubName
     */
    protected $ClubName = null;

    /**
     * @var string $MemberLastName
     */
    protected $MemberLastName = null;

    /**
     * @var string $MemberFirstName
     */
    protected $MemberFirstName = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var TSearchRigidity $Rigidity
     */
    protected $Rigidity = null;

    /**
     * @param int $GUID
     * @param string $MemberNo
     * @param string $ClubNo
     * @param string $ClubName
     * @param string $MemberLastName
     * @param string $MemberFirstName
     * @param boolean $IsActive
     * @param TSearchRigidity $Rigidity
     */
    public function __construct($GUID, $MemberNo, $ClubNo, $ClubName, $MemberLastName, $MemberFirstName, $IsActive, $Rigidity)
    {
        $this->GUID = $GUID;
        $this->MemberNo = $MemberNo;
        $this->ClubNo = $ClubNo;
        $this->ClubName = $ClubName;
        $this->MemberLastName = $MemberLastName;
        $this->MemberFirstName = $MemberFirstName;
        $this->IsActive = $IsActive;
        $this->Rigidity = $Rigidity;
    }

    /**
     * @return int
     */
    public function getGUID()
    {
        return $this->GUID;
    }

    /**
     * @param int $GUID
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberSearch
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberNo()
    {
        return $this->MemberNo;
    }

    /**
     * @param string $MemberNo
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberSearch
     */
    public function setMemberNo($MemberNo)
    {
        $this->MemberNo = $MemberNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getClubNo()
    {
        return $this->ClubNo;
    }

    /**
     * @param string $ClubNo
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberSearch
     */
    public function setClubNo($ClubNo)
    {
        $this->ClubNo = $ClubNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getClubName()
    {
        return $this->ClubName;
    }

    /**
     * @param string $ClubName
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberSearch
     */
    public function setClubName($ClubName)
    {
        $this->ClubName = $ClubName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberLastName()
    {
        return $this->MemberLastName;
    }

    /**
     * @param string $MemberLastName
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberSearch
     */
    public function setMemberLastName($MemberLastName)
    {
        $this->MemberLastName = $MemberLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberFirstName()
    {
        return $this->MemberFirstName;
    }

    /**
     * @param string $MemberFirstName
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberSearch
     */
    public function setMemberFirstName($MemberFirstName)
    {
        $this->MemberFirstName = $MemberFirstName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberSearch
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;
        return $this;
    }

    /**
     * @return TSearchRigidity
     */
    public function getRigidity()
    {
        return $this->Rigidity;
    }

    /**
     * @param TSearchRigidity $Rigidity
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberSearch
     */
    public function setRigidity($Rigidity)
    {
        $this->Rigidity = $Rigidity;
        return $this;
    }
}
