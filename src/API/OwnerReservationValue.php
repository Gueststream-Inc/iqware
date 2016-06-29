<?php

namespace Gueststream\PMS\IQWare\API;

class OwnerReservationValue
{

    /**
     * @var float $FirstNightNoTx
     */
    protected $FirstNightNoTx = null;

    /**
     * @var float $FirstNight
     */
    protected $FirstNight = null;

    /**
     * @var float $TotalStay
     */
    protected $TotalStay = null;

    /**
     * @var float $AvgNight
     */
    protected $AvgNight = null;

    /**
     * @var float $RequiredDeposit
     */
    protected $RequiredDeposit = null;

    /**
     * @var int $CurrencyId
     */
    protected $CurrencyId = null;

    /**
     * @var StayBreakDown $StayBreakDown
     */
    protected $StayBreakDown = null;

    /**
     * @param float $FirstNightNoTx
     * @param float $FirstNight
     * @param float $TotalStay
     * @param float $AvgNight
     * @param float $RequiredDeposit
     * @param int $CurrencyId
     */
    public function __construct($FirstNightNoTx, $FirstNight, $TotalStay, $AvgNight, $RequiredDeposit, $CurrencyId)
    {
        $this->FirstNightNoTx = $FirstNightNoTx;
        $this->FirstNight = $FirstNight;
        $this->TotalStay = $TotalStay;
        $this->AvgNight = $AvgNight;
        $this->RequiredDeposit = $RequiredDeposit;
        $this->CurrencyId = $CurrencyId;
    }

    /**
     * @return float
     */
    public function getFirstNightNoTx()
    {
        return $this->FirstNightNoTx;
    }

    /**
     * @param float $FirstNightNoTx
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValue
     */
    public function setFirstNightNoTx($FirstNightNoTx)
    {
        $this->FirstNightNoTx = $FirstNightNoTx;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValue
     */
    public function setFirstNight($FirstNight)
    {
        $this->FirstNight = $FirstNight;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValue
     */
    public function setTotalStay($TotalStay)
    {
        $this->TotalStay = $TotalStay;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValue
     */
    public function setAvgNight($AvgNight)
    {
        $this->AvgNight = $AvgNight;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValue
     */
    public function setRequiredDeposit($RequiredDeposit)
    {
        $this->RequiredDeposit = $RequiredDeposit;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->CurrencyId;
    }

    /**
     * @param int $CurrencyId
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValue
     */
    public function setCurrencyId($CurrencyId)
    {
        $this->CurrencyId = $CurrencyId;
        return $this;
    }

    /**
     * @return StayBreakDown
     */
    public function getStayBreakDown()
    {
        return $this->StayBreakDown;
    }

    /**
     * @param StayBreakDown $StayBreakDown
     * @return \Gueststream\PMS\IQWare\API\OwnerReservationValue
     */
    public function setStayBreakDown($StayBreakDown)
    {
        $this->StayBreakDown = $StayBreakDown;
        return $this;
    }
}
