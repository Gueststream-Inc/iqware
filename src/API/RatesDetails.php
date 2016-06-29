<?php

namespace Gueststream\PMS\IQWare\API;

class RatesDetails
{

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var boolean $IsRateCodeTmpl
     */
    protected $IsRateCodeTmpl = null;

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
     * @var float $FirstNightNoTaxes
     */
    protected $FirstNightNoTaxes = null;

    /**
     * @var float $TotalStayNoTaxes
     */
    protected $TotalStayNoTaxes = null;

    /**
     * @var float $RequiredDeposit
     */
    protected $RequiredDeposit = null;

    /**
     * @var boolean $HasValues
     */
    protected $HasValues = null;

    /**
     * @param int $ID_RateCode
     * @param boolean $IsRateCodeTmpl
     * @param float $FirstNight
     * @param float $TotalStay
     * @param float $AvgNight
     * @param float $FirstNightNoTaxes
     * @param float $TotalStayNoTaxes
     * @param float $RequiredDeposit
     * @param boolean $HasValues
     */
    public function __construct($ID_RateCode, $IsRateCodeTmpl, $FirstNight, $TotalStay, $AvgNight, $FirstNightNoTaxes, $TotalStayNoTaxes, $RequiredDeposit, $HasValues)
    {
        $this->ID_RateCode = $ID_RateCode;
        $this->IsRateCodeTmpl = $IsRateCodeTmpl;
        $this->FirstNight = $FirstNight;
        $this->TotalStay = $TotalStay;
        $this->AvgNight = $AvgNight;
        $this->FirstNightNoTaxes = $FirstNightNoTaxes;
        $this->TotalStayNoTaxes = $TotalStayNoTaxes;
        $this->RequiredDeposit = $RequiredDeposit;
        $this->HasValues = $HasValues;
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
     * @return \Gueststream\PMS\IQWare\API\RatesDetails
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRateCodeTmpl()
    {
        return $this->IsRateCodeTmpl;
    }

    /**
     * @param boolean $IsRateCodeTmpl
     * @return \Gueststream\PMS\IQWare\API\RatesDetails
     */
    public function setIsRateCodeTmpl($IsRateCodeTmpl)
    {
        $this->IsRateCodeTmpl = $IsRateCodeTmpl;
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
     * @return \Gueststream\PMS\IQWare\API\RatesDetails
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
     * @return \Gueststream\PMS\IQWare\API\RatesDetails
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
     * @return \Gueststream\PMS\IQWare\API\RatesDetails
     */
    public function setAvgNight($AvgNight)
    {
        $this->AvgNight = $AvgNight;
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
     * @return \Gueststream\PMS\IQWare\API\RatesDetails
     */
    public function setFirstNightNoTaxes($FirstNightNoTaxes)
    {
        $this->FirstNightNoTaxes = $FirstNightNoTaxes;
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
     * @return \Gueststream\PMS\IQWare\API\RatesDetails
     */
    public function setTotalStayNoTaxes($TotalStayNoTaxes)
    {
        $this->TotalStayNoTaxes = $TotalStayNoTaxes;
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
     * @return \Gueststream\PMS\IQWare\API\RatesDetails
     */
    public function setRequiredDeposit($RequiredDeposit)
    {
        $this->RequiredDeposit = $RequiredDeposit;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasValues()
    {
        return $this->HasValues;
    }

    /**
     * @param boolean $HasValues
     * @return \Gueststream\PMS\IQWare\API\RatesDetails
     */
    public function setHasValues($HasValues)
    {
        $this->HasValues = $HasValues;
        return $this;
    }
}
