<?php

namespace Gueststream\PMS\IQWare\API;

class DailyManualRates
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var float $ManualRate
     */
    protected $ManualRate = null;

    /**
     * @var int $ID_RateReason
     */
    protected $ID_RateReason = null;

    /**
     * @var int $ManualRateType
     */
    protected $ManualRateType = null;

    /**
     * @param \DateTime $Date
     * @param float $ManualRate
     * @param int $ID_RateReason
     * @param int $ManualRateType
     */
    public function __construct(\DateTime $Date, $ManualRate, $ID_RateReason, $ManualRateType)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        $this->ManualRate = $ManualRate;
        $this->ID_RateReason = $ID_RateReason;
        $this->ManualRateType = $ManualRateType;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        if ($this->Date == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Date
     * @return \Gueststream\PMS\IQWare\API\DailyManualRates
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getManualRate()
    {
        return $this->ManualRate;
    }

    /**
     * @param float $ManualRate
     * @return \Gueststream\PMS\IQWare\API\DailyManualRates
     */
    public function setManualRate($ManualRate)
    {
        $this->ManualRate = $ManualRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateReason()
    {
        return $this->ID_RateReason;
    }

    /**
     * @param int $ID_RateReason
     * @return \Gueststream\PMS\IQWare\API\DailyManualRates
     */
    public function setID_RateReason($ID_RateReason)
    {
        $this->ID_RateReason = $ID_RateReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getManualRateType()
    {
        return $this->ManualRateType;
    }

    /**
     * @param int $ManualRateType
     * @return \Gueststream\PMS\IQWare\API\DailyManualRates
     */
    public function setManualRateType($ManualRateType)
    {
        $this->ManualRateType = $ManualRateType;
        return $this;
    }
}
