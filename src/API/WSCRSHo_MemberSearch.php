<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_MemberSearch
{

    /**
     * @var string $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $PhoneNo
     */
    protected $PhoneNo = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $CompanyNo
     */
    protected $CompanyNo = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var TSearchRigidity $Rigidity
     */
    protected $Rigidity = null;

    /**
     * @param string $AccountNo
     * @param string $PhoneNo
     * @param string $LastName
     * @param string $FirstName
     * @param string $CompanyNo
     * @param boolean $IsActive
     * @param TSearchRigidity $Rigidity
     */
    public function __construct($AccountNo, $PhoneNo, $LastName, $FirstName, $CompanyNo, $IsActive, $Rigidity)
    {
        $this->AccountNo = $AccountNo;
        $this->PhoneNo = $PhoneNo;
        $this->LastName = $LastName;
        $this->FirstName = $FirstName;
        $this->CompanyNo = $CompanyNo;
        $this->IsActive = $IsActive;
        $this->Rigidity = $Rigidity;
    }

    /**
     * @return string
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }

    /**
     * @param string $AccountNo
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_MemberSearch
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->PhoneNo;
    }

    /**
     * @param string $PhoneNo
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_MemberSearch
     */
    public function setPhoneNo($PhoneNo)
    {
        $this->PhoneNo = $PhoneNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_MemberSearch
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_MemberSearch
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyNo()
    {
        return $this->CompanyNo;
    }

    /**
     * @param string $CompanyNo
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_MemberSearch
     */
    public function setCompanyNo($CompanyNo)
    {
        $this->CompanyNo = $CompanyNo;
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_MemberSearch
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_MemberSearch
     */
    public function setRigidity($Rigidity)
    {
        $this->Rigidity = $Rigidity;
        return $this;
    }
}
