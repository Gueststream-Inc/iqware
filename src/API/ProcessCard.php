<?php

namespace Gueststream\PMS\IQWare\API;

class ProcessCard
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $VaultUsername
     */
    protected $VaultUsername = null;

    /**
     * @var string $VaultPassword
     */
    protected $VaultPassword = null;

    /**
     * @var string $VaultTokenGuid
     */
    protected $VaultTokenGuid = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var int $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var int $CVV2
     */
    protected $CVV2 = null;

    /**
     * @param int $intGUID
     * @param int $AccountNo
     * @param float $Amount
     * @param string $VaultUsername
     * @param string $VaultPassword
     * @param string $VaultTokenGuid
     * @param string $Address
     * @param int $ZipCode
     * @param int $CVV2
     */
    public function __construct($intGUID, $AccountNo, $Amount, $VaultUsername, $VaultPassword, $VaultTokenGuid, $Address, $ZipCode, $CVV2)
    {
        $this->intGUID = $intGUID;
        $this->AccountNo = $AccountNo;
        $this->Amount = $Amount;
        $this->VaultUsername = $VaultUsername;
        $this->VaultPassword = $VaultPassword;
        $this->VaultTokenGuid = $VaultTokenGuid;
        $this->Address = $Address;
        $this->ZipCode = $ZipCode;
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
     * @return \Gueststream\PMS\IQWare\API\ProcessCard
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
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
     * @return \Gueststream\PMS\IQWare\API\ProcessCard
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
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
     * @return \Gueststream\PMS\IQWare\API\ProcessCard
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
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
     * @return \Gueststream\PMS\IQWare\API\ProcessCard
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
     * @return \Gueststream\PMS\IQWare\API\ProcessCard
     */
    public function setVaultPassword($VaultPassword)
    {
        $this->VaultPassword = $VaultPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getVaultTokenGuid()
    {
        return $this->VaultTokenGuid;
    }

    /**
     * @param string $VaultTokenGuid
     * @return \Gueststream\PMS\IQWare\API\ProcessCard
     */
    public function setVaultTokenGuid($VaultTokenGuid)
    {
        $this->VaultTokenGuid = $VaultTokenGuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     * @return \Gueststream\PMS\IQWare\API\ProcessCard
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * @return int
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param int $ZipCode
     * @return \Gueststream\PMS\IQWare\API\ProcessCard
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;
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
     * @return \Gueststream\PMS\IQWare\API\ProcessCard
     */
    public function setCVV2($CVV2)
    {
        $this->CVV2 = $CVV2;
        return $this;
    }
}
