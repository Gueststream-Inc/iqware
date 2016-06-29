<?php

namespace Gueststream\PMS\IQWare\API;

class StayValue3
{

    /**
     * @var int $ID_Stay
     */
    protected $ID_Stay = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var boolean $Evaluated
     */
    protected $Evaluated = null;

    /**
     * @var float $TotalStay
     */
    protected $TotalStay = null;

    /**
     * @var float $TotalRate
     */
    protected $TotalRate = null;

    /**
     * @var float $TotalOthers
     */
    protected $TotalOthers = null;

    /**
     * @var float $TotalBase
     */
    protected $TotalBase = null;

    /**
     * @var float $TotalTaxes
     */
    protected $TotalTaxes = null;

    /**
     * @var float $TotalRateSpecial
     */
    protected $TotalRateSpecial = null;

    /**
     * @var float $TotalYeildReference
     */
    protected $TotalYeildReference = null;

    /**
     * @var float $ResortFeeBeforeTaxes
     */
    protected $ResortFeeBeforeTaxes = null;

    /**
     * @var boolean $Yielded
     */
    protected $Yielded = null;

    /**
     * @var boolean $IsOnArrival
     */
    protected $IsOnArrival = null;

    /**
     * @var boolean $IsOnDeparture
     */
    protected $IsOnDeparture = null;

    /**
     * @var boolean $IsFixedLength
     */
    protected $IsFixedLength = null;

    /**
     * @var int $MinimumNights
     */
    protected $MinimumNights = null;

    /**
     * @var \DateTime $YieldDate
     */
    protected $YieldDate = null;

    /**
     * @var ArrayOfStayByNightValue $StayDailyValuesArray
     */
    protected $StayDailyValuesArray = null;

    /**
     * @var ArrayOfSBDSummary $SingleStayValue
     */
    protected $SingleStayValue = null;

    /**
     * @var ArrayOfAvailableSuite $AvailableSuites
     */
    protected $AvailableSuites = null;

    /**
     * @var ArrayOfAvailableRoom $AvailableRooms
     */
    protected $AvailableRooms = null;

    /**
     * @var ArrayOfSpecialData $SpecialDatas
     */
    protected $SpecialDatas = null;

    /**
     * @param int $ID_Stay
     * @param int $ID_RoomType
     * @param int $ID_RateCode
     * @param boolean $Evaluated
     * @param float $TotalStay
     * @param float $TotalRate
     * @param float $TotalOthers
     * @param float $TotalBase
     * @param float $TotalTaxes
     * @param float $TotalRateSpecial
     * @param float $TotalYeildReference
     * @param float $ResortFeeBeforeTaxes
     * @param boolean $Yielded
     * @param boolean $IsOnArrival
     * @param boolean $IsOnDeparture
     * @param boolean $IsFixedLength
     * @param int $MinimumNights
     * @param \DateTime $YieldDate
     */
    public function __construct($ID_Stay, $ID_RoomType, $ID_RateCode, $Evaluated, $TotalStay, $TotalRate, $TotalOthers, $TotalBase, $TotalTaxes, $TotalRateSpecial, $TotalYeildReference, $ResortFeeBeforeTaxes, $Yielded, $IsOnArrival, $IsOnDeparture, $IsFixedLength, $MinimumNights, \DateTime $YieldDate)
    {
        $this->ID_Stay = $ID_Stay;
        $this->ID_RoomType = $ID_RoomType;
        $this->ID_RateCode = $ID_RateCode;
        $this->Evaluated = $Evaluated;
        $this->TotalStay = $TotalStay;
        $this->TotalRate = $TotalRate;
        $this->TotalOthers = $TotalOthers;
        $this->TotalBase = $TotalBase;
        $this->TotalTaxes = $TotalTaxes;
        $this->TotalRateSpecial = $TotalRateSpecial;
        $this->TotalYeildReference = $TotalYeildReference;
        $this->ResortFeeBeforeTaxes = $ResortFeeBeforeTaxes;
        $this->Yielded = $Yielded;
        $this->IsOnArrival = $IsOnArrival;
        $this->IsOnDeparture = $IsOnDeparture;
        $this->IsFixedLength = $IsFixedLength;
        $this->MinimumNights = $MinimumNights;
        $this->YieldDate = $YieldDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getID_Stay()
    {
        return $this->ID_Stay;
    }

    /**
     * @param int $ID_Stay
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setID_Stay($ID_Stay)
    {
        $this->ID_Stay = $ID_Stay;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RoomType()
    {
        return $this->ID_RoomType;
    }

    /**
     * @param int $ID_RoomType
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCode()
    {
        return $this->ID_RateCode;
    }

    /**
     * @param int $ID_RateCode
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEvaluated()
    {
        return $this->Evaluated;
    }

    /**
     * @param boolean $Evaluated
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setEvaluated($Evaluated)
    {
        $this->Evaluated = $Evaluated;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalStay()
    {
        return $this->TotalStay;
    }

    /**
     * @param float $TotalStay
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setTotalStay($TotalStay)
    {
        $this->TotalStay = $TotalStay;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalRate()
    {
        return $this->TotalRate;
    }

    /**
     * @param float $TotalRate
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setTotalRate($TotalRate)
    {
        $this->TotalRate = $TotalRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalOthers()
    {
        return $this->TotalOthers;
    }

    /**
     * @param float $TotalOthers
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setTotalOthers($TotalOthers)
    {
        $this->TotalOthers = $TotalOthers;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalBase()
    {
        return $this->TotalBase;
    }

    /**
     * @param float $TotalBase
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setTotalBase($TotalBase)
    {
        $this->TotalBase = $TotalBase;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalTaxes()
    {
        return $this->TotalTaxes;
    }

    /**
     * @param float $TotalTaxes
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setTotalTaxes($TotalTaxes)
    {
        $this->TotalTaxes = $TotalTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalRateSpecial()
    {
        return $this->TotalRateSpecial;
    }

    /**
     * @param float $TotalRateSpecial
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setTotalRateSpecial($TotalRateSpecial)
    {
        $this->TotalRateSpecial = $TotalRateSpecial;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalYeildReference()
    {
        return $this->TotalYeildReference;
    }

    /**
     * @param float $TotalYeildReference
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setTotalYeildReference($TotalYeildReference)
    {
        $this->TotalYeildReference = $TotalYeildReference;
        return $this;
    }

    /**
     * @return float
     */
    public function getResortFeeBeforeTaxes()
    {
        return $this->ResortFeeBeforeTaxes;
    }

    /**
     * @param float $ResortFeeBeforeTaxes
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setResortFeeBeforeTaxes($ResortFeeBeforeTaxes)
    {
        $this->ResortFeeBeforeTaxes = $ResortFeeBeforeTaxes;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getYielded()
    {
        return $this->Yielded;
    }

    /**
     * @param boolean $Yielded
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setYielded($Yielded)
    {
        $this->Yielded = $Yielded;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnArrival()
    {
        return $this->IsOnArrival;
    }

    /**
     * @param boolean $IsOnArrival
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setIsOnArrival($IsOnArrival)
    {
        $this->IsOnArrival = $IsOnArrival;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnDeparture()
    {
        return $this->IsOnDeparture;
    }

    /**
     * @param boolean $IsOnDeparture
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setIsOnDeparture($IsOnDeparture)
    {
        $this->IsOnDeparture = $IsOnDeparture;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFixedLength()
    {
        return $this->IsFixedLength;
    }

    /**
     * @param boolean $IsFixedLength
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setIsFixedLength($IsFixedLength)
    {
        $this->IsFixedLength = $IsFixedLength;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinimumNights()
    {
        return $this->MinimumNights;
    }

    /**
     * @param int $MinimumNights
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setMinimumNights($MinimumNights)
    {
        $this->MinimumNights = $MinimumNights;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getYieldDate()
    {
        if ($this->YieldDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->YieldDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $YieldDate
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setYieldDate(\DateTime $YieldDate)
    {
        $this->YieldDate = $YieldDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return ArrayOfStayByNightValue
     */
    public function getStayDailyValuesArray()
    {
        return $this->StayDailyValuesArray;
    }

    /**
     * @param ArrayOfStayByNightValue $StayDailyValuesArray
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setStayDailyValuesArray($StayDailyValuesArray)
    {
        $this->StayDailyValuesArray = $StayDailyValuesArray;
        return $this;
    }

    /**
     * @return ArrayOfSBDSummary
     */
    public function getSingleStayValue()
    {
        return $this->SingleStayValue;
    }

    /**
     * @param ArrayOfSBDSummary $SingleStayValue
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setSingleStayValue($SingleStayValue)
    {
        $this->SingleStayValue = $SingleStayValue;
        return $this;
    }

    /**
     * @return ArrayOfAvailableSuite
     */
    public function getAvailableSuites()
    {
        return $this->AvailableSuites;
    }

    /**
     * @param ArrayOfAvailableSuite $AvailableSuites
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setAvailableSuites($AvailableSuites)
    {
        $this->AvailableSuites = $AvailableSuites;
        return $this;
    }

    /**
     * @return ArrayOfAvailableRoom
     */
    public function getAvailableRooms()
    {
        return $this->AvailableRooms;
    }

    /**
     * @param ArrayOfAvailableRoom $AvailableRooms
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setAvailableRooms($AvailableRooms)
    {
        $this->AvailableRooms = $AvailableRooms;
        return $this;
    }

    /**
     * @return ArrayOfSpecialData
     */
    public function getSpecialDatas()
    {
        return $this->SpecialDatas;
    }

    /**
     * @param ArrayOfSpecialData $SpecialDatas
     * @return \Gueststream\PMS\IQWare\API\StayValue3
     */
    public function setSpecialDatas($SpecialDatas)
    {
        $this->SpecialDatas = $SpecialDatas;
        return $this;
    }
}
