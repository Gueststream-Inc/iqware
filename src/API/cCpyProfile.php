<?php

namespace Gueststream\PMS\IQWare\API;

class cCpyProfile
{

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var int $ID_CompanyGroupingType
     */
    protected $ID_CompanyGroupingType = null;

    /**
     * @var int $DivOf_No
     */
    protected $DivOf_No = null;

    /**
     * @var string $DivOf_Name
     */
    protected $DivOf_Name = null;

    /**
     * @var string $UserCieNo
     */
    protected $UserCieNo = null;

    /**
     * @var int $ID_SrcBusiness
     */
    protected $ID_SrcBusiness = null;

    /**
     * @var int $ID_GuestType
     */
    protected $ID_GuestType = null;

    /**
     * @var int $ID_Geographic
     */
    protected $ID_Geographic = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @param int $ID_CompanyGroupingType
     * @param int $DivOf_No
     * @param int $ID_SrcBusiness
     * @param int $ID_GuestType
     * @param int $ID_Geographic
     * @param boolean $IsActive
     */
    public function __construct($ID_CompanyGroupingType, $DivOf_No, $ID_SrcBusiness, $ID_GuestType, $ID_Geographic, $IsActive)
    {
        $this->ID_CompanyGroupingType = $ID_CompanyGroupingType;
        $this->DivOf_No = $DivOf_No;
        $this->ID_SrcBusiness = $ID_SrcBusiness;
        $this->ID_GuestType = $ID_GuestType;
        $this->ID_Geographic = $ID_Geographic;
        $this->IsActive = $IsActive;
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
     * @return \Gueststream\PMS\IQWare\API\cCpyProfile
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CompanyGroupingType()
    {
        return $this->ID_CompanyGroupingType;
    }

    /**
     * @param int $ID_CompanyGroupingType
     * @return \Gueststream\PMS\IQWare\API\cCpyProfile
     */
    public function setID_CompanyGroupingType($ID_CompanyGroupingType)
    {
        $this->ID_CompanyGroupingType = $ID_CompanyGroupingType;
        return $this;
    }

    /**
     * @return int
     */
    public function getDivOf_No()
    {
        return $this->DivOf_No;
    }

    /**
     * @param int $DivOf_No
     * @return \Gueststream\PMS\IQWare\API\cCpyProfile
     */
    public function setDivOf_No($DivOf_No)
    {
        $this->DivOf_No = $DivOf_No;
        return $this;
    }

    /**
     * @return string
     */
    public function getDivOf_Name()
    {
        return $this->DivOf_Name;
    }

    /**
     * @param string $DivOf_Name
     * @return \Gueststream\PMS\IQWare\API\cCpyProfile
     */
    public function setDivOf_Name($DivOf_Name)
    {
        $this->DivOf_Name = $DivOf_Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserCieNo()
    {
        return $this->UserCieNo;
    }

    /**
     * @param string $UserCieNo
     * @return \Gueststream\PMS\IQWare\API\cCpyProfile
     */
    public function setUserCieNo($UserCieNo)
    {
        $this->UserCieNo = $UserCieNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_SrcBusiness()
    {
        return $this->ID_SrcBusiness;
    }

    /**
     * @param int $ID_SrcBusiness
     * @return \Gueststream\PMS\IQWare\API\cCpyProfile
     */
    public function setID_SrcBusiness($ID_SrcBusiness)
    {
        $this->ID_SrcBusiness = $ID_SrcBusiness;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_GuestType()
    {
        return $this->ID_GuestType;
    }

    /**
     * @param int $ID_GuestType
     * @return \Gueststream\PMS\IQWare\API\cCpyProfile
     */
    public function setID_GuestType($ID_GuestType)
    {
        $this->ID_GuestType = $ID_GuestType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Geographic()
    {
        return $this->ID_Geographic;
    }

    /**
     * @param int $ID_Geographic
     * @return \Gueststream\PMS\IQWare\API\cCpyProfile
     */
    public function setID_Geographic($ID_Geographic)
    {
        $this->ID_Geographic = $ID_Geographic;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->Note;
    }

    /**
     * @param string $Note
     * @return \Gueststream\PMS\IQWare\API\cCpyProfile
     */
    public function setNote($Note)
    {
        $this->Note = $Note;
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
     * @return \Gueststream\PMS\IQWare\API\cCpyProfile
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;
        return $this;
    }
}
