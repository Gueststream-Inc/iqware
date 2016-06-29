<?php

namespace Gueststream\PMS\IQWare\API;

class SBDSummary
{

    /**
     * @var int $RoomIndex
     */
    protected $RoomIndex = null;

    /**
     * @var float $TotalBeforeTaxes
     */
    protected $TotalBeforeTaxes = null;

    /**
     * @var float $TotalTaxes
     */
    protected $TotalTaxes = null;

    /**
     * @var float $InsuranceBeforeTaxes
     */
    protected $InsuranceBeforeTaxes = null;

    /**
     * @var float $InsuranceTaxes
     */
    protected $InsuranceTaxes = null;

    /**
     * @var int $ID_Currency
     */
    protected $ID_Currency = null;

    /**
     * @var RequiredDeposit $RequiredDeposit
     */
    protected $RequiredDeposit = null;

    /**
     * @var float $ResortFeeBeforeTaxes
     */
    protected $ResortFeeBeforeTaxes = null;

    /**
     * @var float $ResortFeeTaxes
     */
    protected $ResortFeeTaxes = null;

    /**
     * @var float $TotalAdvDepositBeforeTaxes
     */
    protected $TotalAdvDepositBeforeTaxes = null;

    /**
     * @var float $TotalAdvDepositTaxes
     */
    protected $TotalAdvDepositTaxes = null;

    /**
     * @var ArrayOfBreakdownByDay $BreakdownList
     */
    protected $BreakdownList = null;

    /**
     * @var float $FirstNightAdvDepositTaxes
     */
    protected $FirstNightAdvDepositTaxes = null;

    /**
     * @var float $FirstNightAdvDepositBeforeTaxes
     */
    protected $FirstNightAdvDepositBeforeTaxes = null;

    /**
     * @param int $RoomIndex
     * @param float $TotalBeforeTaxes
     * @param float $TotalTaxes
     * @param float $InsuranceBeforeTaxes
     * @param float $InsuranceTaxes
     * @param int $ID_Currency
     * @param float $ResortFeeBeforeTaxes
     * @param float $ResortFeeTaxes
     * @param float $TotalAdvDepositBeforeTaxes
     * @param float $TotalAdvDepositTaxes
     * @param float $FirstNightAdvDepositTaxes
     * @param float $FirstNightAdvDepositBeforeTaxes
     */
    public function __construct($RoomIndex, $TotalBeforeTaxes, $TotalTaxes, $InsuranceBeforeTaxes, $InsuranceTaxes, $ID_Currency, $ResortFeeBeforeTaxes, $ResortFeeTaxes, $TotalAdvDepositBeforeTaxes, $TotalAdvDepositTaxes, $FirstNightAdvDepositTaxes, $FirstNightAdvDepositBeforeTaxes)
    {
        $this->RoomIndex = $RoomIndex;
        $this->TotalBeforeTaxes = $TotalBeforeTaxes;
        $this->TotalTaxes = $TotalTaxes;
        $this->InsuranceBeforeTaxes = $InsuranceBeforeTaxes;
        $this->InsuranceTaxes = $InsuranceTaxes;
        $this->ID_Currency = $ID_Currency;
        $this->ResortFeeBeforeTaxes = $ResortFeeBeforeTaxes;
        $this->ResortFeeTaxes = $ResortFeeTaxes;
        $this->TotalAdvDepositBeforeTaxes = $TotalAdvDepositBeforeTaxes;
        $this->TotalAdvDepositTaxes = $TotalAdvDepositTaxes;
        $this->FirstNightAdvDepositTaxes = $FirstNightAdvDepositTaxes;
        $this->FirstNightAdvDepositBeforeTaxes = $FirstNightAdvDepositBeforeTaxes;
    }

    /**
     * @return int
     */
    public function getRoomIndex()
    {
        return $this->RoomIndex;
    }

    /**
     * @param int $RoomIndex
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setRoomIndex($RoomIndex)
    {
        $this->RoomIndex = $RoomIndex;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalBeforeTaxes()
    {
        return $this->TotalBeforeTaxes;
    }

    /**
     * @param float $TotalBeforeTaxes
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setTotalBeforeTaxes($TotalBeforeTaxes)
    {
        $this->TotalBeforeTaxes = $TotalBeforeTaxes;
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
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setTotalTaxes($TotalTaxes)
    {
        $this->TotalTaxes = $TotalTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getInsuranceBeforeTaxes()
    {
        return $this->InsuranceBeforeTaxes;
    }

    /**
     * @param float $InsuranceBeforeTaxes
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setInsuranceBeforeTaxes($InsuranceBeforeTaxes)
    {
        $this->InsuranceBeforeTaxes = $InsuranceBeforeTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getInsuranceTaxes()
    {
        return $this->InsuranceTaxes;
    }

    /**
     * @param float $InsuranceTaxes
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setInsuranceTaxes($InsuranceTaxes)
    {
        $this->InsuranceTaxes = $InsuranceTaxes;
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
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setID_Currency($ID_Currency)
    {
        $this->ID_Currency = $ID_Currency;
        return $this;
    }

    /**
     * @return RequiredDeposit
     */
    public function getRequiredDeposit()
    {
        return $this->RequiredDeposit;
    }

    /**
     * @param RequiredDeposit $RequiredDeposit
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setRequiredDeposit($RequiredDeposit)
    {
        $this->RequiredDeposit = $RequiredDeposit;
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
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setResortFeeBeforeTaxes($ResortFeeBeforeTaxes)
    {
        $this->ResortFeeBeforeTaxes = $ResortFeeBeforeTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getResortFeeTaxes()
    {
        return $this->ResortFeeTaxes;
    }

    /**
     * @param float $ResortFeeTaxes
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setResortFeeTaxes($ResortFeeTaxes)
    {
        $this->ResortFeeTaxes = $ResortFeeTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAdvDepositBeforeTaxes()
    {
        return $this->TotalAdvDepositBeforeTaxes;
    }

    /**
     * @param float $TotalAdvDepositBeforeTaxes
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setTotalAdvDepositBeforeTaxes($TotalAdvDepositBeforeTaxes)
    {
        $this->TotalAdvDepositBeforeTaxes = $TotalAdvDepositBeforeTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAdvDepositTaxes()
    {
        return $this->TotalAdvDepositTaxes;
    }

    /**
     * @param float $TotalAdvDepositTaxes
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setTotalAdvDepositTaxes($TotalAdvDepositTaxes)
    {
        $this->TotalAdvDepositTaxes = $TotalAdvDepositTaxes;
        return $this;
    }

    /**
     * @return ArrayOfBreakdownByDay
     */
    public function getBreakdownList()
    {
        return $this->BreakdownList;
    }

    /**
     * @param ArrayOfBreakdownByDay $BreakdownList
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setBreakdownList($BreakdownList)
    {
        $this->BreakdownList = $BreakdownList;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstNightAdvDepositTaxes()
    {
        return $this->FirstNightAdvDepositTaxes;
    }

    /**
     * @param float $FirstNightAdvDepositTaxes
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setFirstNightAdvDepositTaxes($FirstNightAdvDepositTaxes)
    {
        $this->FirstNightAdvDepositTaxes = $FirstNightAdvDepositTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstNightAdvDepositBeforeTaxes()
    {
        return $this->FirstNightAdvDepositBeforeTaxes;
    }

    /**
     * @param float $FirstNightAdvDepositBeforeTaxes
     * @return \Gueststream\PMS\IQWare\API\SBDSummary
     */
    public function setFirstNightAdvDepositBeforeTaxes($FirstNightAdvDepositBeforeTaxes)
    {
        $this->FirstNightAdvDepositBeforeTaxes = $FirstNightAdvDepositBeforeTaxes;
        return $this;
    }
}
