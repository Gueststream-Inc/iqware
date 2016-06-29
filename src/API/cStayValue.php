<?php

namespace Gueststream\PMS\IQWare\API;

class cStayValue
{

    /**
     * @var float $FirstNight
     */
    protected $FirstNight = null;

    /**
     * @var float $FirstNightNoTaxes
     */
    protected $FirstNightNoTaxes = null;

    /**
     * @var float $TotalStay
     */
    protected $TotalStay = null;

    /**
     * @var float $TotalStayNoTaxes
     */
    protected $TotalStayNoTaxes = null;

    /**
     * @var float $AvgNight
     */
    protected $AvgNight = null;

    /**
     * @var float $RequiredDeposit
     */
    protected $RequiredDeposit = null;

    /**
     * @var int $ID_Currency
     */
    protected $ID_Currency = null;

    /**
     * @param float $FirstNight
     * @param float $FirstNightNoTaxes
     * @param float $TotalStay
     * @param float $TotalStayNoTaxes
     * @param float $AvgNight
     * @param float $RequiredDeposit
     * @param int $ID_Currency
     */
    public function __construct($FirstNight, $FirstNightNoTaxes, $TotalStay, $TotalStayNoTaxes, $AvgNight, $RequiredDeposit, $ID_Currency)
    {
        $this->FirstNight = $FirstNight;
        $this->FirstNightNoTaxes = $FirstNightNoTaxes;
        $this->TotalStay = $TotalStay;
        $this->TotalStayNoTaxes = $TotalStayNoTaxes;
        $this->AvgNight = $AvgNight;
        $this->RequiredDeposit = $RequiredDeposit;
        $this->ID_Currency = $ID_Currency;
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
     * @return \Gueststream\PMS\IQWare\API\cStayValue
     */
    public function setFirstNight($FirstNight)
    {
        $this->FirstNight = $FirstNight;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstNightNoTaxes()
    {
        return $this->FirstNightNoTaxes;
    }

    /**
     * @param float $FirstNightNoTaxes
     * @return \Gueststream\PMS\IQWare\API\cStayValue
     */
    public function setFirstNightNoTaxes($FirstNightNoTaxes)
    {
        $this->FirstNightNoTaxes = $FirstNightNoTaxes;
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
     * @return \Gueststream\PMS\IQWare\API\cStayValue
     */
    public function setTotalStay($TotalStay)
    {
        $this->TotalStay = $TotalStay;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalStayNoTaxes()
    {
        return $this->TotalStayNoTaxes;
    }

    /**
     * @param float $TotalStayNoTaxes
     * @return \Gueststream\PMS\IQWare\API\cStayValue
     */
    public function setTotalStayNoTaxes($TotalStayNoTaxes)
    {
        $this->TotalStayNoTaxes = $TotalStayNoTaxes;
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
     * @return \Gueststream\PMS\IQWare\API\cStayValue
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
     * @return \Gueststream\PMS\IQWare\API\cStayValue
     */
    public function setRequiredDeposit($RequiredDeposit)
    {
        $this->RequiredDeposit = $RequiredDeposit;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Currency()
    {
        return $this->ID_Currency;
    }

    /**
     * @param int $ID_Currency
     * @return \Gueststream\PMS\IQWare\API\cStayValue
     */
    public function setID_Currency($ID_Currency)
    {
        $this->ID_Currency = $ID_Currency;
        return $this;
    }
}
