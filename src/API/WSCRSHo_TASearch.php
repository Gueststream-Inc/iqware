<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_TASearch
{

    /**
     * @var string $AgencyName
     */
    protected $AgencyName = null;

    /**
     * @var string $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $IATANo
     */
    protected $IATANo = null;

    /**
     * @var string $PhoneNo
     */
    protected $PhoneNo = null;

    /**
     * @var boolean $IsInactif
     */
    protected $IsInactif = null;

    /**
     * @var TSearchRigidity $Rigidity
     */
    protected $Rigidity = null;

    /**
     * @param string $AgencyName
     * @param string $AccountNo
     * @param string $IATANo
     * @param string $PhoneNo
     * @param boolean $IsInactif
     * @param TSearchRigidity $Rigidity
     */
    public function __construct($AgencyName, $AccountNo, $IATANo, $PhoneNo, $IsInactif, $Rigidity)
    {
        $this->AgencyName = $AgencyName;
        $this->AccountNo = $AccountNo;
        $this->IATANo = $IATANo;
        $this->PhoneNo = $PhoneNo;
        $this->IsInactif = $IsInactif;
        $this->Rigidity = $Rigidity;
    }

    /**
     * @return string
     */
    public function getAgencyName()
    {
        return $this->AgencyName;
    }

    /**
     * @param string $AgencyName
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_TASearch
     */
    public function setAgencyName($AgencyName)
    {
        $this->AgencyName = $AgencyName;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_TASearch
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getIATANo()
    {
        return $this->IATANo;
    }

    /**
     * @param string $IATANo
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_TASearch
     */
    public function setIATANo($IATANo)
    {
        $this->IATANo = $IATANo;
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_TASearch
     */
    public function setPhoneNo($PhoneNo)
    {
        $this->PhoneNo = $PhoneNo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactif()
    {
        return $this->IsInactif;
    }

    /**
     * @param boolean $IsInactif
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_TASearch
     */
    public function setIsInactif($IsInactif)
    {
        $this->IsInactif = $IsInactif;
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_TASearch
     */
    public function setRigidity($Rigidity)
    {
        $this->Rigidity = $Rigidity;
        return $this;
    }
}
