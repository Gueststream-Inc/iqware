<?php

namespace Gueststream\PMS\IQWare\API;

class cCpyAccount
{

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var boolean $IsAR
     */
    protected $IsAR = null;

    /**
     * @var boolean $IsCashOnly
     */
    protected $IsCashOnly = null;

    /**
     * @var int $ID_CreditLimit
     */
    protected $ID_CreditLimit = null;

    /**
     * @var int $ID_TaxExemption
     */
    protected $ID_TaxExemption = null;

    /**
     * @var TInvoiceBillingType $InvoiceBillingType
     */
    protected $InvoiceBillingType = null;

    /**
     * @var string $TaxNo
     */
    protected $TaxNo = null;

    /**
     * @var string $TaxNo2
     */
    protected $TaxNo2 = null;

    /**
     * @var ArrayOfCFolioDist $FolioDist
     */
    protected $FolioDist = null;

    /**
     * @var ArrayOfCTransfer $Transfer
     */
    protected $Transfer = null;

    /**
     * @param \DateTime $CreationDate
     * @param boolean $IsAR
     * @param boolean $IsCashOnly
     * @param int $ID_CreditLimit
     * @param int $ID_TaxExemption
     * @param TInvoiceBillingType $InvoiceBillingType
     */
    public function __construct(\DateTime $CreationDate, $IsAR, $IsCashOnly, $ID_CreditLimit, $ID_TaxExemption, $InvoiceBillingType)
    {
        $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
        $this->IsAR = $IsAR;
        $this->IsCashOnly = $IsCashOnly;
        $this->ID_CreditLimit = $ID_CreditLimit;
        $this->ID_TaxExemption = $ID_TaxExemption;
        $this->InvoiceBillingType = $InvoiceBillingType;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        if ($this->CreationDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->CreationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $CreationDate
     * @return \Gueststream\PMS\IQWare\API\cCpyAccount
     */
    public function setCreationDate(\DateTime $CreationDate)
    {
        $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAR()
    {
        return $this->IsAR;
    }

    /**
     * @param boolean $IsAR
     * @return \Gueststream\PMS\IQWare\API\cCpyAccount
     */
    public function setIsAR($IsAR)
    {
        $this->IsAR = $IsAR;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCashOnly()
    {
        return $this->IsCashOnly;
    }

    /**
     * @param boolean $IsCashOnly
     * @return \Gueststream\PMS\IQWare\API\cCpyAccount
     */
    public function setIsCashOnly($IsCashOnly)
    {
        $this->IsCashOnly = $IsCashOnly;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CreditLimit()
    {
        return $this->ID_CreditLimit;
    }

    /**
     * @param int $ID_CreditLimit
     * @return \Gueststream\PMS\IQWare\API\cCpyAccount
     */
    public function setID_CreditLimit($ID_CreditLimit)
    {
        $this->ID_CreditLimit = $ID_CreditLimit;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TaxExemption()
    {
        return $this->ID_TaxExemption;
    }

    /**
     * @param int $ID_TaxExemption
     * @return \Gueststream\PMS\IQWare\API\cCpyAccount
     */
    public function setID_TaxExemption($ID_TaxExemption)
    {
        $this->ID_TaxExemption = $ID_TaxExemption;
        return $this;
    }

    /**
     * @return TInvoiceBillingType
     */
    public function getInvoiceBillingType()
    {
        return $this->InvoiceBillingType;
    }

    /**
     * @param TInvoiceBillingType $InvoiceBillingType
     * @return \Gueststream\PMS\IQWare\API\cCpyAccount
     */
    public function setInvoiceBillingType($InvoiceBillingType)
    {
        $this->InvoiceBillingType = $InvoiceBillingType;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxNo()
    {
        return $this->TaxNo;
    }

    /**
     * @param string $TaxNo
     * @return \Gueststream\PMS\IQWare\API\cCpyAccount
     */
    public function setTaxNo($TaxNo)
    {
        $this->TaxNo = $TaxNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxNo2()
    {
        return $this->TaxNo2;
    }

    /**
     * @param string $TaxNo2
     * @return \Gueststream\PMS\IQWare\API\cCpyAccount
     */
    public function setTaxNo2($TaxNo2)
    {
        $this->TaxNo2 = $TaxNo2;
        return $this;
    }

    /**
     * @return ArrayOfCFolioDist
     */
    public function getFolioDist()
    {
        return $this->FolioDist;
    }

    /**
     * @param ArrayOfCFolioDist $FolioDist
     * @return \Gueststream\PMS\IQWare\API\cCpyAccount
     */
    public function setFolioDist($FolioDist)
    {
        $this->FolioDist = $FolioDist;
        return $this;
    }

    /**
     * @return ArrayOfCTransfer
     */
    public function getTransfer()
    {
        return $this->Transfer;
    }

    /**
     * @param ArrayOfCTransfer $Transfer
     * @return \Gueststream\PMS\IQWare\API\cCpyAccount
     */
    public function setTransfer($Transfer)
    {
        $this->Transfer = $Transfer;
        return $this;
    }
}
