<?php

namespace Gueststream\PMS\IQWare\API;

class AddCreditCardToAccount
{

    /**
     * @var int $Guid
     */
    protected $Guid = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $VaultTokenGUID
     */
    protected $VaultTokenGUID = null;

    /**
     * @var string $MaskedCardNo
     */
    protected $MaskedCardNo = null;

    /**
     * @var int $ID_CreditCard
     */
    protected $ID_CreditCard = null;

    /**
     * @param int $Guid
     * @param int $AccountNo
     * @param string $VaultTokenGUID
     * @param string $MaskedCardNo
     * @param int $ID_CreditCard
     */
    public function __construct($Guid, $AccountNo, $VaultTokenGUID, $MaskedCardNo, $ID_CreditCard)
    {
        $this->Guid = $Guid;
        $this->AccountNo = $AccountNo;
        $this->VaultTokenGUID = $VaultTokenGUID;
        $this->MaskedCardNo = $MaskedCardNo;
        $this->ID_CreditCard = $ID_CreditCard;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->Guid;
    }

    /**
     * @param int $Guid
     * @return \Gueststream\PMS\IQWare\API\AddCreditCardToAccount
     */
    public function setGuid($Guid)
    {
        $this->Guid = $Guid;
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
     * @return \Gueststream\PMS\IQWare\API\AddCreditCardToAccount
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
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
     * @return \Gueststream\PMS\IQWare\API\AddCreditCardToAccount
     */
    public function setVaultTokenGUID($VaultTokenGUID)
    {
        $this->VaultTokenGUID = $VaultTokenGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaskedCardNo()
    {
        return $this->MaskedCardNo;
    }

    /**
     * @param string $MaskedCardNo
     * @return \Gueststream\PMS\IQWare\API\AddCreditCardToAccount
     */
    public function setMaskedCardNo($MaskedCardNo)
    {
        $this->MaskedCardNo = $MaskedCardNo;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\AddCreditCardToAccount
     */
    public function setID_CreditCard($ID_CreditCard)
    {
        $this->ID_CreditCard = $ID_CreditCard;
        return $this;
    }
}
