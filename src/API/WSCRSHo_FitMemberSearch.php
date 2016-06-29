<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_FitMemberSearch
{

    /**
     * @var string $MemberNo
     */
    protected $MemberNo = null;

    /**
     * @var string $FitNo
     */
    protected $FitNo = null;

    /**
     * @var string $FitName
     */
    protected $FitName = null;

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
     * @param string $MemberNo
     * @param string $FitNo
     * @param string $FitName
     * @param string $MemberLastName
     * @param string $MemberFirstName
     * @param boolean $IsActive
     * @param TSearchRigidity $Rigidity
     */
    public function __construct($MemberNo, $FitNo, $FitName, $MemberLastName, $MemberFirstName, $IsActive, $Rigidity)
    {
        $this->MemberNo = $MemberNo;
        $this->FitNo = $FitNo;
        $this->FitName = $FitName;
        $this->MemberLastName = $MemberLastName;
        $this->MemberFirstName = $MemberFirstName;
        $this->IsActive = $IsActive;
        $this->Rigidity = $Rigidity;
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_FitMemberSearch
     */
    public function setMemberNo($MemberNo)
    {
        $this->MemberNo = $MemberNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getFitNo()
    {
        return $this->FitNo;
    }

    /**
     * @param string $FitNo
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_FitMemberSearch
     */
    public function setFitNo($FitNo)
    {
        $this->FitNo = $FitNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getFitName()
    {
        return $this->FitName;
    }

    /**
     * @param string $FitName
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_FitMemberSearch
     */
    public function setFitName($FitName)
    {
        $this->FitName = $FitName;
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_FitMemberSearch
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_FitMemberSearch
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_FitMemberSearch
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_FitMemberSearch
     */
    public function setRigidity($Rigidity)
    {
        $this->Rigidity = $Rigidity;
        return $this;
    }
}
