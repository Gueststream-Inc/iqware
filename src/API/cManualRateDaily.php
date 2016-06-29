<?php

namespace Gueststream\PMS\IQWare\API;

class cManualRateDaily
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
     * @var int $ID_ManualRateReason
     */
    protected $ID_ManualRateReason = null;

    /**
     * @var TSBDManualType $ManualRateType
     */
    protected $ManualRateType = null;

    /**
     * @param \DateTime $Date
     * @param float $ManualRate
     * @param int $ID_ManualRateReason
     * @param TSBDManualType $ManualRateType
     */
    public function __construct(\DateTime $Date, $ManualRate, $ID_ManualRateReason, $ManualRateType)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        $this->ManualRate = $ManualRate;
        $this->ID_ManualRateReason = $ID_ManualRateReason;
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
     * @return \Gueststream\PMS\IQWare\API\cManualRateDaily
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
     * @return \Gueststream\PMS\IQWare\API\cManualRateDaily
     */
    public function setManualRate($ManualRate)
    {
        $this->ManualRate = $ManualRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_ManualRateReason()
    {
        return $this->ID_ManualRateReason;
    }

    /**
     * @param int $ID_ManualRateReason
     * @return \Gueststream\PMS\IQWare\API\cManualRateDaily
     */
    public function setID_ManualRateReason($ID_ManualRateReason)
    {
        $this->ID_ManualRateReason = $ID_ManualRateReason;
        return $this;
    }

    /**
     * @return TSBDManualType
     */
    public function getManualRateType()
    {
        return $this->ManualRateType;
    }

    /**
     * @param TSBDManualType $ManualRateType
     * @return \Gueststream\PMS\IQWare\API\cManualRateDaily
     */
    public function setManualRateType($ManualRateType)
    {
        $this->ManualRateType = $ManualRateType;
        return $this;
    }
}
