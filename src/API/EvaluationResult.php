<?php

namespace Gueststream\PMS\IQWare\API;

class EvaluationResult
{

    /**
     * @var float $TotalStay
     */
    protected $TotalStay = null;

    /**
     * @var float $TotalRate
     */
    protected $TotalRate = null;

    /**
     * @var float $TotalOthers
     */
    protected $TotalOthers = null;

    /**
     * @var float $TotalTaxes
     */
    protected $TotalTaxes = null;

    /**
     * @var float $ResFee
     */
    protected $ResFee = null;

    /**
     * @var float $ResFeeTaxes
     */
    protected $ResFeeTaxes = null;

    /**
     * @var int $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var ArrayOfSpecialOfferByDay $SpecialOffers
     */
    protected $SpecialOffers = null;

    /**
     * @param float $TotalStay
     * @param float $TotalRate
     * @param float $TotalOthers
     * @param float $TotalTaxes
     * @param float $ResFee
     * @param float $ResFeeTaxes
     * @param int $ErrorCode
     * @param int $ID_RateCode
     */
    public function __construct($TotalStay, $TotalRate, $TotalOthers, $TotalTaxes, $ResFee, $ResFeeTaxes, $ErrorCode, $ID_RateCode)
    {
        $this->TotalStay = $TotalStay;
        $this->TotalRate = $TotalRate;
        $this->TotalOthers = $TotalOthers;
        $this->TotalTaxes = $TotalTaxes;
        $this->ResFee = $ResFee;
        $this->ResFeeTaxes = $ResFeeTaxes;
        $this->ErrorCode = $ErrorCode;
        $this->ID_RateCode = $ID_RateCode;
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
     * @return \Gueststream\PMS\IQWare\API\EvaluationResult
     */
    public function setTotalStay($TotalStay)
    {
        $this->TotalStay = $TotalStay;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalRate()
    {
        return $this->TotalRate;
    }

    /**
     * @param float $TotalRate
     * @return \Gueststream\PMS\IQWare\API\EvaluationResult
     */
    public function setTotalRate($TotalRate)
    {
        $this->TotalRate = $TotalRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalOthers()
    {
        return $this->TotalOthers;
    }

    /**
     * @param float $TotalOthers
     * @return \Gueststream\PMS\IQWare\API\EvaluationResult
     */
    public function setTotalOthers($TotalOthers)
    {
        $this->TotalOthers = $TotalOthers;
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
     * @return \Gueststream\PMS\IQWare\API\EvaluationResult
     */
    public function setTotalTaxes($TotalTaxes)
    {
        $this->TotalTaxes = $TotalTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getResFee()
    {
        return $this->ResFee;
    }

    /**
     * @param float $ResFee
     * @return \Gueststream\PMS\IQWare\API\EvaluationResult
     */
    public function setResFee($ResFee)
    {
        $this->ResFee = $ResFee;
        return $this;
    }

    /**
     * @return float
     */
    public function getResFeeTaxes()
    {
        return $this->ResFeeTaxes;
    }

    /**
     * @param float $ResFeeTaxes
     * @return \Gueststream\PMS\IQWare\API\EvaluationResult
     */
    public function setResFeeTaxes($ResFeeTaxes)
    {
        $this->ResFeeTaxes = $ResFeeTaxes;
        return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }

    /**
     * @param int $ErrorCode
     * @return \Gueststream\PMS\IQWare\API\EvaluationResult
     */
    public function setErrorCode($ErrorCode)
    {
        $this->ErrorCode = $ErrorCode;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\EvaluationResult
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return ArrayOfSpecialOfferByDay
     */
    public function getSpecialOffers()
    {
        return $this->SpecialOffers;
    }

    /**
     * @param ArrayOfSpecialOfferByDay $SpecialOffers
     * @return \Gueststream\PMS\IQWare\API\EvaluationResult
     */
    public function setSpecialOffers($SpecialOffers)
    {
        $this->SpecialOffers = $SpecialOffers;
        return $this;
    }
}
