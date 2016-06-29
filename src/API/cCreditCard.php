<?php

namespace Gueststream\PMS\IQWare\API;

class cCreditCard
{

    /**
     * @var int $ID_CreditCard
     */
    protected $ID_CreditCard = null;

    /**
     * @var string $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var string $ExpDate
     */
    protected $ExpDate = null;

    /**
     * @var boolean $IsDeposit
     */
    protected $IsDeposit = null;

    /**
     * @var boolean $IsGuaranteed
     */
    protected $IsGuaranteed = null;

    /**
     * @var boolean $IsPayment
     */
    protected $IsPayment = null;

    /**
     * @var boolean $IsFolioA
     */
    protected $IsFolioA = null;

    /**
     * @var boolean $IsFolioB
     */
    protected $IsFolioB = null;

    /**
     * @var boolean $IsFolioC
     */
    protected $IsFolioC = null;

    /**
     * @var boolean $IsFolioD
     */
    protected $IsFolioD = null;

    /**
     * @var int $LinkAccountNo
     */
    protected $LinkAccountNo = null;

    /**
     * @var string $VaultTokenGUID
     */
    protected $VaultTokenGUID = null;

    /**
     * @param int $ID_CreditCard
     * @param boolean $IsDeposit
     * @param boolean $IsGuaranteed
     * @param boolean $IsPayment
     * @param boolean $IsFolioA
     * @param boolean $IsFolioB
     * @param boolean $IsFolioC
     * @param boolean $IsFolioD
     * @param int $LinkAccountNo
     */
    public function __construct($ID_CreditCard, $IsDeposit, $IsGuaranteed, $IsPayment, $IsFolioA, $IsFolioB, $IsFolioC, $IsFolioD, $LinkAccountNo)
    {
        $this->ID_CreditCard = $ID_CreditCard;
        $this->IsDeposit = $IsDeposit;
        $this->IsGuaranteed = $IsGuaranteed;
        $this->IsPayment = $IsPayment;
        $this->IsFolioA = $IsFolioA;
        $this->IsFolioB = $IsFolioB;
        $this->IsFolioC = $IsFolioC;
        $this->IsFolioD = $IsFolioD;
        $this->LinkAccountNo = $LinkAccountNo;
    }

    /**
     * @return int
     */
    public function getID_CreditCard()
    {
        return $this->ID_CreditCard;
    }

    /**
     * @param int $ID_CreditCard
     * @return \Gueststream\PMS\IQWare\API\cCreditCard
     */
    public function setID_CreditCard($ID_CreditCard)
    {
        $this->ID_CreditCard = $ID_CreditCard;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return \Gueststream\PMS\IQWare\API\cCreditCard
     */
    public function setCardNumber($CardNumber)
    {
        $this->CardNumber = $CardNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpDate()
    {
        return $this->ExpDate;
    }

    /**
     * @param string $ExpDate
     * @return \Gueststream\PMS\IQWare\API\cCreditCard
     */
    public function setExpDate($ExpDate)
    {
        $this->ExpDate = $ExpDate;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeposit()
    {
        return $this->IsDeposit;
    }

    /**
     * @param boolean $IsDeposit
     * @return \Gueststream\PMS\IQWare\API\cCreditCard
     */
    public function setIsDeposit($IsDeposit)
    {
        $this->IsDeposit = $IsDeposit;
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
     * @return \Gueststream\PMS\IQWare\API\cCreditCard
     */
    public function setIsGuaranteed($IsGuaranteed)
    {
        $this->IsGuaranteed = $IsGuaranteed;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPayment()
    {
        return $this->IsPayment;
    }

    /**
     * @param boolean $IsPayment
     * @return \Gueststream\PMS\IQWare\API\cCreditCard
     */
    public function setIsPayment($IsPayment)
    {
        $this->IsPayment = $IsPayment;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFolioA()
    {
        return $this->IsFolioA;
    }

    /**
     * @param boolean $IsFolioA
     * @return \Gueststream\PMS\IQWare\API\cCreditCard
     */
    public function setIsFolioA($IsFolioA)
    {
        $this->IsFolioA = $IsFolioA;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFolioB()
    {
        return $this->IsFolioB;
    }

    /**
     * @param boolean $IsFolioB
     * @return \Gueststream\PMS\IQWare\API\cCreditCard
     */
    public function setIsFolioB($IsFolioB)
    {
        $this->IsFolioB = $IsFolioB;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFolioC()
    {
        return $this->IsFolioC;
    }

    /**
     * @param boolean $IsFolioC
     * @return \Gueststream\PMS\IQWare\API\cCreditCard
     */
    public function setIsFolioC($IsFolioC)
    {
        $this->IsFolioC = $IsFolioC;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFolioD()
    {
        return $this->IsFolioD;
    }

    /**
     * @param boolean $IsFolioD
     * @return \Gueststream\PMS\IQWare\API\cCreditCard
     */
    public function setIsFolioD($IsFolioD)
    {
        $this->IsFolioD = $IsFolioD;
        return $this;
    }

    /**
     * @return int
     */
    public function getLinkAccountNo()
    {
        return $this->LinkAccountNo;
    }

    /**
     * @param int $LinkAccountNo
     * @return \Gueststream\PMS\IQWare\API\cCreditCard
     */
    public function setLinkAccountNo($LinkAccountNo)
    {
        $this->LinkAccountNo = $LinkAccountNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getVaultTokenGUID()
    {
        return $this->VaultTokenGUID;
    }

    /**
     * @param string $VaultTokenGUID
     * @return \Gueststream\PMS\IQWare\API\cCreditCard
     */
    public function setVaultTokenGUID($VaultTokenGUID)
    {
        $this->VaultTokenGUID = $VaultTokenGUID;
        return $this;
    }
}
