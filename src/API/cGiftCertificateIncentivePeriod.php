<?php

namespace Gueststream\PMS\IQWare\API;

class cGiftCertificateIncentivePeriod
{

    /**
     * @var int $ID_IncentivePeriod
     */
    protected $ID_IncentivePeriod = null;

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @var TIncentiveType $Type
     */
    protected $Type = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @param int $ID_IncentivePeriod
     * @param \DateTime $FromDate
     * @param \DateTime $ToDate
     * @param TIncentiveType $Type
     * @param float $Amount
     */
    public function __construct($ID_IncentivePeriod, \DateTime $FromDate, \DateTime $ToDate, $Type, $Amount)
    {
        $this->ID_IncentivePeriod = $ID_IncentivePeriod;
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
        $this->ToDate = $ToDate->format(\DateTime::ATOM);
        $this->Type = $Type;
        $this->Amount = $Amount;
    }

    /**
     * @return int
     */
    public function getID_IncentivePeriod()
    {
        return $this->ID_IncentivePeriod;
    }

    /**
     * @param int $ID_IncentivePeriod
     * @return \Gueststream\PMS\IQWare\API\cGiftCertificateIncentivePeriod
     */
    public function setID_IncentivePeriod($ID_IncentivePeriod)
    {
        $this->ID_IncentivePeriod = $ID_IncentivePeriod;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
        if ($this->FromDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->FromDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $FromDate
     * @return \Gueststream\PMS\IQWare\API\cGiftCertificateIncentivePeriod
     */
    public function setFromDate(\DateTime $FromDate)
    {
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
        if ($this->ToDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ToDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ToDate
     * @return \Gueststream\PMS\IQWare\API\cGiftCertificateIncentivePeriod
     */
    public function setToDate(\DateTime $ToDate)
    {
        $this->ToDate = $ToDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return TIncentiveType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param TIncentiveType $Type
     * @return \Gueststream\PMS\IQWare\API\cGiftCertificateIncentivePeriod
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Gueststream\PMS\IQWare\API\cGiftCertificateIncentivePeriod
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }
}
