<?php

namespace Gueststream\PMS\IQWare\API;

class StayValue
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

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
     * @var float $FirstNight
     */
    protected $FirstNight = null;

    /**
     * @var float $FirstNightTax
     */
    protected $FirstNightTax = null;

    /**
     * @var float $AvgNight
     */
    protected $AvgNight = null;

    /**
     * @var float $AvgNightTax
     */
    protected $AvgNightTax = null;

    /**
     * @var float $TotalStay
     */
    protected $TotalStay = null;

    /**
     * @var float $TotalStayTax
     */
    protected $TotalStayTax = null;

    /**
     * @var float $RequiredDeposit
     */
    protected $RequiredDeposit = null;

    /**
     * @var float $TotalOthers
     */
    protected $TotalOthers = null;

    /**
     * @var ArrayOfStayDailyValue $StayDailyValuesArray
     */
    protected $StayDailyValuesArray = null;

    /**
     * @param int $GUID
     * @param int $ID_Stay
     * @param int $ID_RoomType
     * @param int $ID_RateCode
     * @param float $FirstNight
     * @param float $FirstNightTax
     * @param float $AvgNight
     * @param float $AvgNightTax
     * @param float $TotalStay
     * @param float $TotalStayTax
     * @param float $RequiredDeposit
     * @param float $TotalOthers
     */
    public function __construct($GUID, $ID_Stay, $ID_RoomType, $ID_RateCode, $FirstNight, $FirstNightTax, $AvgNight, $AvgNightTax, $TotalStay, $TotalStayTax, $RequiredDeposit, $TotalOthers)
    {
        $this->GUID = $GUID;
        $this->ID_Stay = $ID_Stay;
        $this->ID_RoomType = $ID_RoomType;
        $this->ID_RateCode = $ID_RateCode;
        $this->FirstNight = $FirstNight;
        $this->FirstNightTax = $FirstNightTax;
        $this->AvgNight = $AvgNight;
        $this->AvgNightTax = $AvgNightTax;
        $this->TotalStay = $TotalStay;
        $this->TotalStayTax = $TotalStayTax;
        $this->RequiredDeposit = $RequiredDeposit;
        $this->TotalOthers = $TotalOthers;
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
     * @return \Gueststream\PMS\IQWare\API\StayValue
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\StayValue
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
     * @return \Gueststream\PMS\IQWare\API\StayValue
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
     * @return \Gueststream\PMS\IQWare\API\StayValue
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstNight()
    {
        return $this->FirstNight;
    }

    /**
     * @param float $FirstNight
     * @return \Gueststream\PMS\IQWare\API\StayValue
     */
    public function setFirstNight($FirstNight)
    {
        $this->FirstNight = $FirstNight;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstNightTax()
    {
        return $this->FirstNightTax;
    }

    /**
     * @param float $FirstNightTax
     * @return \Gueststream\PMS\IQWare\API\StayValue
     */
    public function setFirstNightTax($FirstNightTax)
    {
        $this->FirstNightTax = $FirstNightTax;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvgNight()
    {
        return $this->AvgNight;
    }

    /**
     * @param float $AvgNight
     * @return \Gueststream\PMS\IQWare\API\StayValue
     */
    public function setAvgNight($AvgNight)
    {
        $this->AvgNight = $AvgNight;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvgNightTax()
    {
        return $this->AvgNightTax;
    }

    /**
     * @param float $AvgNightTax
     * @return \Gueststream\PMS\IQWare\API\StayValue
     */
    public function setAvgNightTax($AvgNightTax)
    {
        $this->AvgNightTax = $AvgNightTax;
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
     * @return \Gueststream\PMS\IQWare\API\StayValue
     */
    public function setTotalStay($TotalStay)
    {
        $this->TotalStay = $TotalStay;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalStayTax()
    {
        return $this->TotalStayTax;
    }

    /**
     * @param float $TotalStayTax
     * @return \Gueststream\PMS\IQWare\API\StayValue
     */
    public function setTotalStayTax($TotalStayTax)
    {
        $this->TotalStayTax = $TotalStayTax;
        return $this;
    }

    /**
     * @return float
     */
    public function getRequiredDeposit()
    {
        return $this->RequiredDeposit;
    }

    /**
     * @param float $RequiredDeposit
     * @return \Gueststream\PMS\IQWare\API\StayValue
     */
    public function setRequiredDeposit($RequiredDeposit)
    {
        $this->RequiredDeposit = $RequiredDeposit;
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
     * @return \Gueststream\PMS\IQWare\API\StayValue
     */
    public function setTotalOthers($TotalOthers)
    {
        $this->TotalOthers = $TotalOthers;
        return $this;
    }

    /**
     * @return ArrayOfStayDailyValue
     */
    public function getStayDailyValuesArray()
    {
        return $this->StayDailyValuesArray;
    }

    /**
     * @param ArrayOfStayDailyValue $StayDailyValuesArray
     * @return \Gueststream\PMS\IQWare\API\StayValue
     */
    public function setStayDailyValuesArray($StayDailyValuesArray)
    {
        $this->StayDailyValuesArray = $StayDailyValuesArray;
        return $this;
    }
}
