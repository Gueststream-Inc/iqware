<?php

namespace Gueststream\PMS\IQWare\API;

class AvailabilityOverview
{

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var float $RateAmount
     */
    protected $RateAmount = null;

    /**
     * @param int $ID_RateCode
     * @param float $RateAmount
     */
    public function __construct($ID_RateCode, $RateAmount)
    {
        $this->ID_RateCode = $ID_RateCode;
        $this->RateAmount = $RateAmount;
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
     * @return \Gueststream\PMS\IQWare\API\AvailabilityOverview
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getRateAmount()
    {
        return $this->RateAmount;
    }

    /**
     * @param float $RateAmount
     * @return \Gueststream\PMS\IQWare\API\AvailabilityOverview
     */
    public function setRateAmount($RateAmount)
    {
        $this->RateAmount = $RateAmount;
        return $this;
    }
}
