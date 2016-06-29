<?php

namespace Gueststream\PMS\IQWare\API;

class Comissions
{

    /**
     * @var \DateTime $StatDate
     */
    protected $StatDate = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var int $CommModeType
     */
    protected $CommModeType = null;

    /**
     * @var float $TotalRevComm
     */
    protected $TotalRevComm = null;

    /**
     * @var float $TotalGrossComm
     */
    protected $TotalGrossComm = null;

    /**
     * @var int $ProcessStatus
     */
    protected $ProcessStatus = null;

    /**
     * @var int $BookingStatus
     */
    protected $BookingStatus = null;

    /**
     * @var float $PrepaidAmount
     */
    protected $PrepaidAmount = null;

    /**
     * @var int $CheckNo
     */
    protected $CheckNo = null;

    /**
     * @var float $TotalNetComm
     */
    protected $TotalNetComm = null;

    /**
     * @param \DateTime $StatDate
     * @param int $AccountNo
     * @param string $AccountName
     * @param int $CommModeType
     * @param float $TotalRevComm
     * @param float $TotalGrossComm
     * @param int $ProcessStatus
     * @param int $BookingStatus
     * @param float $PrepaidAmount
     * @param int $CheckNo
     * @param float $TotalNetComm
     */
    public function __construct(\DateTime $StatDate, $AccountNo, $AccountName, $CommModeType, $TotalRevComm, $TotalGrossComm, $ProcessStatus, $BookingStatus, $PrepaidAmount, $CheckNo, $TotalNetComm)
    {
        $this->StatDate = $StatDate->format(\DateTime::ATOM);
        $this->AccountNo = $AccountNo;
        $this->AccountName = $AccountName;
        $this->CommModeType = $CommModeType;
        $this->TotalRevComm = $TotalRevComm;
        $this->TotalGrossComm = $TotalGrossComm;
        $this->ProcessStatus = $ProcessStatus;
        $this->BookingStatus = $BookingStatus;
        $this->PrepaidAmount = $PrepaidAmount;
        $this->CheckNo = $CheckNo;
        $this->TotalNetComm = $TotalNetComm;
    }

    /**
     * @return \DateTime
     */
    public function getStatDate()
    {
        if ($this->StatDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StatDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StatDate
     * @return \Gueststream\PMS\IQWare\API\Comissions
     */
    public function setStatDate(\DateTime $StatDate)
    {
        $this->StatDate = $StatDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }

    /**
     * @param int $AccountNo
     * @return \Gueststream\PMS\IQWare\API\Comissions
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \Gueststream\PMS\IQWare\API\Comissions
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
        return $this;
    }

    /**
     * @return int
     */
    public function getCommModeType()
    {
        return $this->CommModeType;
    }

    /**
     * @param int $CommModeType
     * @return \Gueststream\PMS\IQWare\API\Comissions
     */
    public function setCommModeType($CommModeType)
    {
        $this->CommModeType = $CommModeType;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalRevComm()
    {
        return $this->TotalRevComm;
    }

    /**
     * @param float $TotalRevComm
     * @return \Gueststream\PMS\IQWare\API\Comissions
     */
    public function setTotalRevComm($TotalRevComm)
    {
        $this->TotalRevComm = $TotalRevComm;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalGrossComm()
    {
        return $this->TotalGrossComm;
    }

    /**
     * @param float $TotalGrossComm
     * @return \Gueststream\PMS\IQWare\API\Comissions
     */
    public function setTotalGrossComm($TotalGrossComm)
    {
        $this->TotalGrossComm = $TotalGrossComm;
        return $this;
    }

    /**
     * @return int
     */
    public function getProcessStatus()
    {
        return $this->ProcessStatus;
    }

    /**
     * @param int $ProcessStatus
     * @return \Gueststream\PMS\IQWare\API\Comissions
     */
    public function setProcessStatus($ProcessStatus)
    {
        $this->ProcessStatus = $ProcessStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getBookingStatus()
    {
        return $this->BookingStatus;
    }

    /**
     * @param int $BookingStatus
     * @return \Gueststream\PMS\IQWare\API\Comissions
     */
    public function setBookingStatus($BookingStatus)
    {
        $this->BookingStatus = $BookingStatus;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrepaidAmount()
    {
        return $this->PrepaidAmount;
    }

    /**
     * @param float $PrepaidAmount
     * @return \Gueststream\PMS\IQWare\API\Comissions
     */
    public function setPrepaidAmount($PrepaidAmount)
    {
        $this->PrepaidAmount = $PrepaidAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCheckNo()
    {
        return $this->CheckNo;
    }

    /**
     * @param int $CheckNo
     * @return \Gueststream\PMS\IQWare\API\Comissions
     */
    public function setCheckNo($CheckNo)
    {
        $this->CheckNo = $CheckNo;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalNetComm()
    {
        return $this->TotalNetComm;
    }

    /**
     * @param float $TotalNetComm
     * @return \Gueststream\PMS\IQWare\API\Comissions
     */
    public function setTotalNetComm($TotalNetComm)
    {
        $this->TotalNetComm = $TotalNetComm;
        return $this;
    }
}
