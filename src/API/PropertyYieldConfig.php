<?php

namespace Gueststream\PMS\IQWare\API;

class PropertyYieldConfig
{

    /**
     * @var boolean $Yield_IsAvtive
     */
    protected $Yield_IsAvtive = null;

    /**
     * @var boolean $Yield_IsCloseRatesToStay
     */
    protected $Yield_IsCloseRatesToStay = null;

    /**
     * @var boolean $Yield_IsCloseRatesToStayWithMinLOS
     */
    protected $Yield_IsCloseRatesToStayWithMinLOS = null;

    /**
     * @var boolean $Yield_IsCloseRatesToArrival
     */
    protected $Yield_IsCloseRatesToArrival = null;

    /**
     * @var boolean $Yield_IsCloseRatesToArrivalWithMinLOS
     */
    protected $Yield_IsCloseRatesToArrivalWithMinLOS = null;

    /**
     * @var boolean $Yield_IsCloseUnitTypeForARate
     */
    protected $Yield_IsCloseUnitTypeForARate = null;

    /**
     * @var boolean $Yield_IsUseYieldByAmount
     */
    protected $Yield_IsUseYieldByAmount = null;

    /**
     * @var boolean $Yield_IsUseYieldByMinDailyAmount
     */
    protected $Yield_IsUseYieldByMinDailyAmount = null;

    /**
     * @var boolean $Yield_IsUseYieldByQuota
     */
    protected $Yield_IsUseYieldByQuota = null;

    /**
     * @var boolean $Yield_IsUseYieldByOccupancy
     */
    protected $Yield_IsUseYieldByOccupancy = null;

    /**
     * @var boolean $Yield_IsShowHotelOccupancy
     */
    protected $Yield_IsShowHotelOccupancy = null;

    /**
     * @param boolean $Yield_IsAvtive
     * @param boolean $Yield_IsCloseRatesToStay
     * @param boolean $Yield_IsCloseRatesToStayWithMinLOS
     * @param boolean $Yield_IsCloseRatesToArrival
     * @param boolean $Yield_IsCloseRatesToArrivalWithMinLOS
     * @param boolean $Yield_IsCloseUnitTypeForARate
     * @param boolean $Yield_IsUseYieldByAmount
     * @param boolean $Yield_IsUseYieldByMinDailyAmount
     * @param boolean $Yield_IsUseYieldByQuota
     * @param boolean $Yield_IsUseYieldByOccupancy
     * @param boolean $Yield_IsShowHotelOccupancy
     */
    public function __construct($Yield_IsAvtive, $Yield_IsCloseRatesToStay, $Yield_IsCloseRatesToStayWithMinLOS, $Yield_IsCloseRatesToArrival, $Yield_IsCloseRatesToArrivalWithMinLOS, $Yield_IsCloseUnitTypeForARate, $Yield_IsUseYieldByAmount, $Yield_IsUseYieldByMinDailyAmount, $Yield_IsUseYieldByQuota, $Yield_IsUseYieldByOccupancy, $Yield_IsShowHotelOccupancy)
    {
        $this->Yield_IsAvtive = $Yield_IsAvtive;
        $this->Yield_IsCloseRatesToStay = $Yield_IsCloseRatesToStay;
        $this->Yield_IsCloseRatesToStayWithMinLOS = $Yield_IsCloseRatesToStayWithMinLOS;
        $this->Yield_IsCloseRatesToArrival = $Yield_IsCloseRatesToArrival;
        $this->Yield_IsCloseRatesToArrivalWithMinLOS = $Yield_IsCloseRatesToArrivalWithMinLOS;
        $this->Yield_IsCloseUnitTypeForARate = $Yield_IsCloseUnitTypeForARate;
        $this->Yield_IsUseYieldByAmount = $Yield_IsUseYieldByAmount;
        $this->Yield_IsUseYieldByMinDailyAmount = $Yield_IsUseYieldByMinDailyAmount;
        $this->Yield_IsUseYieldByQuota = $Yield_IsUseYieldByQuota;
        $this->Yield_IsUseYieldByOccupancy = $Yield_IsUseYieldByOccupancy;
        $this->Yield_IsShowHotelOccupancy = $Yield_IsShowHotelOccupancy;
    }

    /**
     * @return boolean
     */
    public function getYield_IsAvtive()
    {
        return $this->Yield_IsAvtive;
    }

    /**
     * @param boolean $Yield_IsAvtive
     * @return \Gueststream\PMS\IQWare\API\PropertyYieldConfig
     */
    public function setYield_IsAvtive($Yield_IsAvtive)
    {
        $this->Yield_IsAvtive = $Yield_IsAvtive;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getYield_IsCloseRatesToStay()
    {
        return $this->Yield_IsCloseRatesToStay;
    }

    /**
     * @param boolean $Yield_IsCloseRatesToStay
     * @return \Gueststream\PMS\IQWare\API\PropertyYieldConfig
     */
    public function setYield_IsCloseRatesToStay($Yield_IsCloseRatesToStay)
    {
        $this->Yield_IsCloseRatesToStay = $Yield_IsCloseRatesToStay;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getYield_IsCloseRatesToStayWithMinLOS()
    {
        return $this->Yield_IsCloseRatesToStayWithMinLOS;
    }

    /**
     * @param boolean $Yield_IsCloseRatesToStayWithMinLOS
     * @return \Gueststream\PMS\IQWare\API\PropertyYieldConfig
     */
    public function setYield_IsCloseRatesToStayWithMinLOS($Yield_IsCloseRatesToStayWithMinLOS)
    {
        $this->Yield_IsCloseRatesToStayWithMinLOS = $Yield_IsCloseRatesToStayWithMinLOS;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getYield_IsCloseRatesToArrival()
    {
        return $this->Yield_IsCloseRatesToArrival;
    }

    /**
     * @param boolean $Yield_IsCloseRatesToArrival
     * @return \Gueststream\PMS\IQWare\API\PropertyYieldConfig
     */
    public function setYield_IsCloseRatesToArrival($Yield_IsCloseRatesToArrival)
    {
        $this->Yield_IsCloseRatesToArrival = $Yield_IsCloseRatesToArrival;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getYield_IsCloseRatesToArrivalWithMinLOS()
    {
        return $this->Yield_IsCloseRatesToArrivalWithMinLOS;
    }

    /**
     * @param boolean $Yield_IsCloseRatesToArrivalWithMinLOS
     * @return \Gueststream\PMS\IQWare\API\PropertyYieldConfig
     */
    public function setYield_IsCloseRatesToArrivalWithMinLOS($Yield_IsCloseRatesToArrivalWithMinLOS)
    {
        $this->Yield_IsCloseRatesToArrivalWithMinLOS = $Yield_IsCloseRatesToArrivalWithMinLOS;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getYield_IsCloseUnitTypeForARate()
    {
        return $this->Yield_IsCloseUnitTypeForARate;
    }

    /**
     * @param boolean $Yield_IsCloseUnitTypeForARate
     * @return \Gueststream\PMS\IQWare\API\PropertyYieldConfig
     */
    public function setYield_IsCloseUnitTypeForARate($Yield_IsCloseUnitTypeForARate)
    {
        $this->Yield_IsCloseUnitTypeForARate = $Yield_IsCloseUnitTypeForARate;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getYield_IsUseYieldByAmount()
    {
        return $this->Yield_IsUseYieldByAmount;
    }

    /**
     * @param boolean $Yield_IsUseYieldByAmount
     * @return \Gueststream\PMS\IQWare\API\PropertyYieldConfig
     */
    public function setYield_IsUseYieldByAmount($Yield_IsUseYieldByAmount)
    {
        $this->Yield_IsUseYieldByAmount = $Yield_IsUseYieldByAmount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getYield_IsUseYieldByMinDailyAmount()
    {
        return $this->Yield_IsUseYieldByMinDailyAmount;
    }

    /**
     * @param boolean $Yield_IsUseYieldByMinDailyAmount
     * @return \Gueststream\PMS\IQWare\API\PropertyYieldConfig
     */
    public function setYield_IsUseYieldByMinDailyAmount($Yield_IsUseYieldByMinDailyAmount)
    {
        $this->Yield_IsUseYieldByMinDailyAmount = $Yield_IsUseYieldByMinDailyAmount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getYield_IsUseYieldByQuota()
    {
        return $this->Yield_IsUseYieldByQuota;
    }

    /**
     * @param boolean $Yield_IsUseYieldByQuota
     * @return \Gueststream\PMS\IQWare\API\PropertyYieldConfig
     */
    public function setYield_IsUseYieldByQuota($Yield_IsUseYieldByQuota)
    {
        $this->Yield_IsUseYieldByQuota = $Yield_IsUseYieldByQuota;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getYield_IsUseYieldByOccupancy()
    {
        return $this->Yield_IsUseYieldByOccupancy;
    }

    /**
     * @param boolean $Yield_IsUseYieldByOccupancy
     * @return \Gueststream\PMS\IQWare\API\PropertyYieldConfig
     */
    public function setYield_IsUseYieldByOccupancy($Yield_IsUseYieldByOccupancy)
    {
        $this->Yield_IsUseYieldByOccupancy = $Yield_IsUseYieldByOccupancy;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getYield_IsShowHotelOccupancy()
    {
        return $this->Yield_IsShowHotelOccupancy;
    }

    /**
     * @param boolean $Yield_IsShowHotelOccupancy
     * @return \Gueststream\PMS\IQWare\API\PropertyYieldConfig
     */
    public function setYield_IsShowHotelOccupancy($Yield_IsShowHotelOccupancy)
    {
        $this->Yield_IsShowHotelOccupancy = $Yield_IsShowHotelOccupancy;
        return $this;
    }
}
