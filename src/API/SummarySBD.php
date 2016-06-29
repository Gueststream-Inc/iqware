<?php

namespace Gueststream\PMS\IQWare\API;

class SummarySBD
{

    /**
     * @var int $RoomNo
     */
    protected $RoomNo = null;

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
     * @var float $ResaFeeBeforeTaxes
     */
    protected $ResaFeeBeforeTaxes = null;

    /**
     * @var float $ResaFeeTaxes
     */
    protected $ResaFeeTaxes = null;

    /**
     * @var float $TotalAdvDepositBeforeTaxes
     */
    protected $TotalAdvDepositBeforeTaxes = null;

    /**
     * @var float $TotalAdvDepositTaxes
     */
    protected $TotalAdvDepositTaxes = null;

    /**
     * @var float $FirstNightAdvDepositBeforeTaxes
     */
    protected $FirstNightAdvDepositBeforeTaxes = null;

    /**
     * @var float $FirstNightAdvDepositTaxes
     */
    protected $FirstNightAdvDepositTaxes = null;

    /**
     * @var int $ID_Currency
     */
    protected $ID_Currency = null;

    /**
     * @var float $FolioA
     */
    protected $FolioA = null;

    /**
     * @param int $RoomNo
     * @param float $TotalBeforeTaxes
     * @param float $TotalTaxes
     * @param float $InsuranceBeforeTaxes
     * @param float $InsuranceTaxes
     * @param float $ResaFeeBeforeTaxes
     * @param float $ResaFeeTaxes
     * @param float $TotalAdvDepositBeforeTaxes
     * @param float $TotalAdvDepositTaxes
     * @param float $FirstNightAdvDepositBeforeTaxes
     * @param float $FirstNightAdvDepositTaxes
     * @param int $ID_Currency
     * @param float $FolioA
     */
    public function __construct($RoomNo, $TotalBeforeTaxes, $TotalTaxes, $InsuranceBeforeTaxes, $InsuranceTaxes, $ResaFeeBeforeTaxes, $ResaFeeTaxes, $TotalAdvDepositBeforeTaxes, $TotalAdvDepositTaxes, $FirstNightAdvDepositBeforeTaxes, $FirstNightAdvDepositTaxes, $ID_Currency, $FolioA)
    {
        $this->RoomNo = $RoomNo;
        $this->TotalBeforeTaxes = $TotalBeforeTaxes;
        $this->TotalTaxes = $TotalTaxes;
        $this->InsuranceBeforeTaxes = $InsuranceBeforeTaxes;
        $this->InsuranceTaxes = $InsuranceTaxes;
        $this->ResaFeeBeforeTaxes = $ResaFeeBeforeTaxes;
        $this->ResaFeeTaxes = $ResaFeeTaxes;
        $this->TotalAdvDepositBeforeTaxes = $TotalAdvDepositBeforeTaxes;
        $this->TotalAdvDepositTaxes = $TotalAdvDepositTaxes;
        $this->FirstNightAdvDepositBeforeTaxes = $FirstNightAdvDepositBeforeTaxes;
        $this->FirstNightAdvDepositTaxes = $FirstNightAdvDepositTaxes;
        $this->ID_Currency = $ID_Currency;
        $this->FolioA = $FolioA;
    }

    /**
     * @return int
     */
    public function getRoomNo()
    {
        return $this->RoomNo;
    }

    /**
     * @param int $RoomNo
     * @return \Gueststream\PMS\IQWare\API\SummarySBD
     */
    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
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
     * @return \Gueststream\PMS\IQWare\API\SummarySBD
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
     * @return \Gueststream\PMS\IQWare\API\SummarySBD
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
     * @return \Gueststream\PMS\IQWare\API\SummarySBD
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
     * @return \Gueststream\PMS\IQWare\API\SummarySBD
     */
    public function setInsuranceTaxes($InsuranceTaxes)
    {
        $this->InsuranceTaxes = $InsuranceTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getResaFeeBeforeTaxes()
    {
        return $this->ResaFeeBeforeTaxes;
    }

    /**
     * @param float $ResaFeeBeforeTaxes
     * @return \Gueststream\PMS\IQWare\API\SummarySBD
     */
    public function setResaFeeBeforeTaxes($ResaFeeBeforeTaxes)
    {
        $this->ResaFeeBeforeTaxes = $ResaFeeBeforeTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getResaFeeTaxes()
    {
        return $this->ResaFeeTaxes;
    }

    /**
     * @param float $ResaFeeTaxes
     * @return \Gueststream\PMS\IQWare\API\SummarySBD
     */
    public function setResaFeeTaxes($ResaFeeTaxes)
    {
        $this->ResaFeeTaxes = $ResaFeeTaxes;
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
     * @return \Gueststream\PMS\IQWare\API\SummarySBD
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
     * @return \Gueststream\PMS\IQWare\API\SummarySBD
     */
    public function setTotalAdvDepositTaxes($TotalAdvDepositTaxes)
    {
        $this->TotalAdvDepositTaxes = $TotalAdvDepositTaxes;
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
     * @return \Gueststream\PMS\IQWare\API\SummarySBD
     */
    public function setFirstNightAdvDepositBeforeTaxes($FirstNightAdvDepositBeforeTaxes)
    {
        $this->FirstNightAdvDepositBeforeTaxes = $FirstNightAdvDepositBeforeTaxes;
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
     * @return \Gueststream\PMS\IQWare\API\SummarySBD
     */
    public function setFirstNightAdvDepositTaxes($FirstNightAdvDepositTaxes)
    {
        $this->FirstNightAdvDepositTaxes = $FirstNightAdvDepositTaxes;
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
     * @return \Gueststream\PMS\IQWare\API\SummarySBD
     */
    public function setID_Currency($ID_Currency)
    {
        $this->ID_Currency = $ID_Currency;
        return $this;
    }

    /**
     * @return float
     */
    public function getFolioA()
    {
        return $this->FolioA;
    }

    /**
     * @param float $FolioA
     * @return \Gueststream\PMS\IQWare\API\SummarySBD
     */
    public function setFolioA($FolioA)
    {
        $this->FolioA = $FolioA;
        return $this;
    }
}
