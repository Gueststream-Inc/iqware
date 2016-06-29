<?php

namespace Gueststream\PMS\IQWare\API;

class ProcessCancellation
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var boolean $MustRefundCard
     */
    protected $MustRefundCard = null;

    /**
     * @var string $VaultUsername
     */
    protected $VaultUsername = null;

    /**
     * @var string $VaultPassword
     */
    protected $VaultPassword = null;

    /**
     * @var int $CVV2
     */
    protected $CVV2 = null;

    /**
     * @param int $intGUID
     * @param float $Amount
     * @param int $AccountNo
     * @param boolean $MustRefundCard
     * @param string $VaultUsername
     * @param string $VaultPassword
     * @param int $CVV2
     */
    public function __construct($intGUID, $Amount, $AccountNo, $MustRefundCard, $VaultUsername, $VaultPassword, $CVV2)
    {
        $this->intGUID = $intGUID;
        $this->Amount = $Amount;
        $this->AccountNo = $AccountNo;
        $this->MustRefundCard = $MustRefundCard;
        $this->VaultUsername = $VaultUsername;
        $this->VaultPassword = $VaultPassword;
        $this->CVV2 = $CVV2;
    }

    /**
     * @return int
     */
    public function getIntGUID()
    {
        return $this->intGUID;
    }

    /**
     * @param int $intGUID
     * @return \Gueststream\PMS\IQWare\API\ProcessCancellation
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Gueststream\PMS\IQWare\API\ProcessCancellation
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }

    /**
     * @param int $AccountNo
     * @return \Gueststream\PMS\IQWare\API\ProcessCancellation
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMustRefundCard()
    {
        return $this->MustRefundCard;
    }

    /**
     * @param boolean $MustRefundCard
     * @return \Gueststream\PMS\IQWare\API\ProcessCancellation
     */
    public function setMustRefundCard($MustRefundCard)
    {
        $this->MustRefundCard = $MustRefundCard;
        return $this;
    }

    /**
     * @return string
     */
    public function getVaultUsername()
    {
        return $this->VaultUsername;
    }

    /**
     * @param string $VaultUsername
     * @return \Gueststream\PMS\IQWare\API\ProcessCancellation
     */
    public function setVaultUsername($VaultUsername)
    {
        $this->VaultUsername = $VaultUsername;
        return $this;
    }

    /**
     * @return string
     */
    public function getVaultPassword()
    {
        return $this->VaultPassword;
    }

    /**
     * @param string $VaultPassword
     * @return \Gueststream\PMS\IQWare\API\ProcessCancellation
     */
    public function setVaultPassword($VaultPassword)
    {
        $this->VaultPassword = $VaultPassword;
        return $this;
    }

    /**
     * @return int
     */
    public function getCVV2()
    {
        return $this->CVV2;
    }

    /**
     * @param int $CVV2
     * @return \Gueststream\PMS\IQWare\API\ProcessCancellation
     */
    public function setCVV2($CVV2)
    {
        $this->CVV2 = $CVV2;
        return $this;
    }
}
