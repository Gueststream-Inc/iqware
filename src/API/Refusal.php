<?php

namespace Gueststream\PMS\IQWare\API;

class Refusal
{

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var string $UnitNo
     */
    protected $UnitNo = null;

    /**
     * @var string $OwnerName
     */
    protected $OwnerName = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var string $Actual
     */
    protected $Actual = null;

    /**
     * @var string $Requested
     */
    protected $Requested = null;

    /**
     * @var boolean $IsRefused
     */
    protected $IsRefused = null;

    /**
     * @var string $SeasonName
     */
    protected $SeasonName = null;

    /**
     * @var string $SeasonalAvgRate
     */
    protected $SeasonalAvgRate = null;

    /**
     * @var string $SeasonalAvgOwner
     */
    protected $SeasonalAvgOwner = null;

    /**
     * @var boolean $IsMinNbrStayRefuse
     */
    protected $IsMinNbrStayRefuse = null;

    /**
     * @var boolean $IsFridayCutOffRefuse
     */
    protected $IsFridayCutOffRefuse = null;

    /**
     * @var boolean $IsSaturdayCutOffRefuse
     */
    protected $IsSaturdayCutOffRefuse = null;

    /**
     * @var boolean $IsSunDayCutOffRefuse
     */
    protected $IsSunDayCutOffRefuse = null;

    /**
     * @var int $MinNbrStay
     */
    protected $MinNbrStay = null;

    /**
     * @param int $ID_CondoOwner
     * @param boolean $IsRefused
     * @param boolean $IsMinNbrStayRefuse
     * @param boolean $IsFridayCutOffRefuse
     * @param boolean $IsSaturdayCutOffRefuse
     * @param boolean $IsSunDayCutOffRefuse
     * @param int $MinNbrStay
     */
    public function __construct($ID_CondoOwner, $IsRefused, $IsMinNbrStayRefuse, $IsFridayCutOffRefuse, $IsSaturdayCutOffRefuse, $IsSunDayCutOffRefuse, $MinNbrStay)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        $this->IsRefused = $IsRefused;
        $this->IsMinNbrStayRefuse = $IsMinNbrStayRefuse;
        $this->IsFridayCutOffRefuse = $IsFridayCutOffRefuse;
        $this->IsSaturdayCutOffRefuse = $IsSaturdayCutOffRefuse;
        $this->IsSunDayCutOffRefuse = $IsSunDayCutOffRefuse;
        $this->MinNbrStay = $MinNbrStay;
    }

    /**
     * @return int
     */
    public function getID_CondoOwner()
    {
        return $this->ID_CondoOwner;
    }

    /**
     * @param int $ID_CondoOwner
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitNo()
    {
        return $this->UnitNo;
    }

    /**
     * @param string $UnitNo
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setUnitNo($UnitNo)
    {
        $this->UnitNo = $UnitNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerName()
    {
        return $this->OwnerName;
    }

    /**
     * @param string $OwnerName
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setOwnerName($OwnerName)
    {
        $this->OwnerName = $OwnerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param string $Category
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
        return $this;
    }

    /**
     * @return string
     */
    public function getActual()
    {
        return $this->Actual;
    }

    /**
     * @param string $Actual
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setActual($Actual)
    {
        $this->Actual = $Actual;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequested()
    {
        return $this->Requested;
    }

    /**
     * @param string $Requested
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setRequested($Requested)
    {
        $this->Requested = $Requested;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRefused()
    {
        return $this->IsRefused;
    }

    /**
     * @param boolean $IsRefused
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setIsRefused($IsRefused)
    {
        $this->IsRefused = $IsRefused;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeasonName()
    {
        return $this->SeasonName;
    }

    /**
     * @param string $SeasonName
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setSeasonName($SeasonName)
    {
        $this->SeasonName = $SeasonName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeasonalAvgRate()
    {
        return $this->SeasonalAvgRate;
    }

    /**
     * @param string $SeasonalAvgRate
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setSeasonalAvgRate($SeasonalAvgRate)
    {
        $this->SeasonalAvgRate = $SeasonalAvgRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeasonalAvgOwner()
    {
        return $this->SeasonalAvgOwner;
    }

    /**
     * @param string $SeasonalAvgOwner
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setSeasonalAvgOwner($SeasonalAvgOwner)
    {
        $this->SeasonalAvgOwner = $SeasonalAvgOwner;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMinNbrStayRefuse()
    {
        return $this->IsMinNbrStayRefuse;
    }

    /**
     * @param boolean $IsMinNbrStayRefuse
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setIsMinNbrStayRefuse($IsMinNbrStayRefuse)
    {
        $this->IsMinNbrStayRefuse = $IsMinNbrStayRefuse;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFridayCutOffRefuse()
    {
        return $this->IsFridayCutOffRefuse;
    }

    /**
     * @param boolean $IsFridayCutOffRefuse
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setIsFridayCutOffRefuse($IsFridayCutOffRefuse)
    {
        $this->IsFridayCutOffRefuse = $IsFridayCutOffRefuse;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSaturdayCutOffRefuse()
    {
        return $this->IsSaturdayCutOffRefuse;
    }

    /**
     * @param boolean $IsSaturdayCutOffRefuse
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setIsSaturdayCutOffRefuse($IsSaturdayCutOffRefuse)
    {
        $this->IsSaturdayCutOffRefuse = $IsSaturdayCutOffRefuse;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSunDayCutOffRefuse()
    {
        return $this->IsSunDayCutOffRefuse;
    }

    /**
     * @param boolean $IsSunDayCutOffRefuse
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setIsSunDayCutOffRefuse($IsSunDayCutOffRefuse)
    {
        $this->IsSunDayCutOffRefuse = $IsSunDayCutOffRefuse;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinNbrStay()
    {
        return $this->MinNbrStay;
    }

    /**
     * @param int $MinNbrStay
     * @return \Gueststream\PMS\IQWare\API\Refusal
     */
    public function setMinNbrStay($MinNbrStay)
    {
        $this->MinNbrStay = $MinNbrStay;
        return $this;
    }
}
