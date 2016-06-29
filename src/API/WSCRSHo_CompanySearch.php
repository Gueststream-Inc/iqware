<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_CompanySearch
{

    /**
     * @var string $CompanyNo
     */
    protected $CompanyNo = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var TSearchRigidity $Rigidity
     */
    protected $Rigidity = null;

    /**
     * @param string $CompanyNo
     * @param string $CompanyName
     * @param boolean $IsActive
     * @param TSearchRigidity $Rigidity
     */
    public function __construct($CompanyNo, $CompanyName, $IsActive, $Rigidity)
    {
        $this->CompanyNo = $CompanyNo;
        $this->CompanyName = $CompanyName;
        $this->IsActive = $IsActive;
        $this->Rigidity = $Rigidity;
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_CompanySearch
     */
    public function setCompanyNo($CompanyNo)
    {
        $this->CompanyNo = $CompanyNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_CompanySearch
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_CompanySearch
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_CompanySearch
     */
    public function setRigidity($Rigidity)
    {
        $this->Rigidity = $Rigidity;
        return $this;
    }
}
