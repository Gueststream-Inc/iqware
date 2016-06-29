<?php

namespace Gueststream\PMS\IQWare\API;

class cAccount
{

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var ArrayOfCCreditCard $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @var string $Voucher
     */
    protected $Voucher = null;

    /**
     * @var ArrayOfInt $SvcCharges
     */
    protected $SvcCharges = null;

    /**
     * @var ArrayOfCFolioDist $FolioDist
     */
    protected $FolioDist = null;

    /**
     * @var ArrayOfCTransfer $Transfer
     */
    protected $Transfer = null;

    /**
     * @var boolean $IsGuaranteed
     */
    protected $IsGuaranteed = null;

    /**
     * @var int $ID_GuaranteeType
     */
    protected $ID_GuaranteeType = null;

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
     * @var string $TaxNo
     */
    protected $TaxNo = null;

    /**
     * @var string $TaxNo2
     */
    protected $TaxNo2 = null;

    /**
     * @var int $PhoneRestrictionLevel
     */
    protected $PhoneRestrictionLevel = null;

    /**
     * @var boolean $IsCpyAR
     */
    protected $IsCpyAR = null;

    /**
     * @param \DateTime $CreationDate
     * @param boolean $IsGuaranteed
     * @param int $ID_GuaranteeType
     * @param boolean $IsCashOnly
     * @param int $ID_CreditLimit
     * @param int $ID_TaxExemption
     * @param int $PhoneRestrictionLevel
     * @param boolean $IsCpyAR
     */
    public function __construct(\DateTime $CreationDate, $IsGuaranteed, $ID_GuaranteeType, $IsCashOnly, $ID_CreditLimit, $ID_TaxExemption, $PhoneRestrictionLevel, $IsCpyAR)
    {
        $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
        $this->IsGuaranteed = $IsGuaranteed;
        $this->ID_GuaranteeType = $ID_GuaranteeType;
        $this->IsCashOnly = $IsCashOnly;
        $this->ID_CreditLimit = $ID_CreditLimit;
        $this->ID_TaxExemption = $ID_TaxExemption;
        $this->PhoneRestrictionLevel = $PhoneRestrictionLevel;
        $this->IsCpyAR = $IsCpyAR;
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
     * @return \Gueststream\PMS\IQWare\API\cAccount
     */
    public function setCreationDate(\DateTime $CreationDate)
    {
        $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return ArrayOfCCreditCard
     */
    public function getCreditCard()
    {
        return $this->CreditCard;
    }

    /**
     * @param ArrayOfCCreditCard $CreditCard
     * @return \Gueststream\PMS\IQWare\API\cAccount
     */
    public function setCreditCard($CreditCard)
    {
        $this->CreditCard = $CreditCard;
        return $this;
    }

    /**
     * @return string
     */
    public function getVoucher()
    {
        return $this->Voucher;
    }

    /**
     * @param string $Voucher
     * @return \Gueststream\PMS\IQWare\API\cAccount
     */
    public function setVoucher($Voucher)
    {
        $this->Voucher = $Voucher;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSvcCharges()
    {
        return $this->SvcCharges;
    }

    /**
     * @param ArrayOfInt $SvcCharges
     * @return \Gueststream\PMS\IQWare\API\cAccount
     */
    public function setSvcCharges($SvcCharges)
    {
        $this->SvcCharges = $SvcCharges;
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
     * @return \Gueststream\PMS\IQWare\API\cAccount
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
     * @return \Gueststream\PMS\IQWare\API\cAccount
     */
    public function setTransfer($Transfer)
    {
        $this->Transfer = $Transfer;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGuaranteed()
    {
        return $this->IsGuaranteed;
    }

    /**
     * @param boolean $IsGuaranteed
     * @return \Gueststream\PMS\IQWare\API\cAccount
     */
    public function setIsGuaranteed($IsGuaranteed)
    {
        $this->IsGuaranteed = $IsGuaranteed;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_GuaranteeType()
    {
        return $this->ID_GuaranteeType;
    }

    /**
     * @param int $ID_GuaranteeType
     * @return \Gueststream\PMS\IQWare\API\cAccount
     */
    public function setID_GuaranteeType($ID_GuaranteeType)
    {
        $this->ID_GuaranteeType = $ID_GuaranteeType;
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
     * @return \Gueststream\PMS\IQWare\API\cAccount
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
     * @return \Gueststream\PMS\IQWare\API\cAccount
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
     * @return \Gueststream\PMS\IQWare\API\cAccount
     */
    public function setID_TaxExemption($ID_TaxExemption)
    {
        $this->ID_TaxExemption = $ID_TaxExemption;
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
     * @return \Gueststream\PMS\IQWare\API\cAccount
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
     * @return \Gueststream\PMS\IQWare\API\cAccount
     */
    public function setTaxNo2($TaxNo2)
    {
        $this->TaxNo2 = $TaxNo2;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhoneRestrictionLevel()
    {
        return $this->PhoneRestrictionLevel;
    }

    /**
     * @param int $PhoneRestrictionLevel
     * @return \Gueststream\PMS\IQWare\API\cAccount
     */
    public function setPhoneRestrictionLevel($PhoneRestrictionLevel)
    {
        $this->PhoneRestrictionLevel = $PhoneRestrictionLevel;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCpyAR()
    {
        return $this->IsCpyAR;
    }

    /**
     * @param boolean $IsCpyAR
     * @return \Gueststream\PMS\IQWare\API\cAccount
     */
    public function setIsCpyAR($IsCpyAR)
    {
        $this->IsCpyAR = $IsCpyAR;
        return $this;
    }
}
