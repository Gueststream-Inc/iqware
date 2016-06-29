<?php

namespace Gueststream\PMS\IQWare\API;

class MarkupItem
{

    /**
     * @var string $MarkupCodeName
     */
    protected $MarkupCodeName = null;

    /**
     * @var float $MarkupAmountBeforeTaxes
     */
    protected $MarkupAmountBeforeTaxes = null;

    /**
     * @var float $MarkupTaxes
     */
    protected $MarkupTaxes = null;

    /**
     * @param float $MarkupAmountBeforeTaxes
     * @param float $MarkupTaxes
     */
    public function __construct($MarkupAmountBeforeTaxes, $MarkupTaxes)
    {
        $this->MarkupAmountBeforeTaxes = $MarkupAmountBeforeTaxes;
        $this->MarkupTaxes = $MarkupTaxes;
    }

    /**
     * @return string
     */
    public function getMarkupCodeName()
    {
        return $this->MarkupCodeName;
    }

    /**
     * @param string $MarkupCodeName
     * @return \Gueststream\PMS\IQWare\API\MarkupItem
     */
    public function setMarkupCodeName($MarkupCodeName)
    {
        $this->MarkupCodeName = $MarkupCodeName;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarkupAmountBeforeTaxes()
    {
        return $this->MarkupAmountBeforeTaxes;
    }

    /**
     * @param float $MarkupAmountBeforeTaxes
     * @return \Gueststream\PMS\IQWare\API\MarkupItem
     */
    public function setMarkupAmountBeforeTaxes($MarkupAmountBeforeTaxes)
    {
        $this->MarkupAmountBeforeTaxes = $MarkupAmountBeforeTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarkupTaxes()
    {
        return $this->MarkupTaxes;
    }

    /**
     * @param float $MarkupTaxes
     * @return \Gueststream\PMS\IQWare\API\MarkupItem
     */
    public function setMarkupTaxes($MarkupTaxes)
    {
        $this->MarkupTaxes = $MarkupTaxes;
        return $this;
    }
}
