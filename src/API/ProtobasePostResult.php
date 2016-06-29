<?php

namespace Gueststream\PMS\IQWare\API;

class ProtobasePostResult
{

    /**
     * @var string $MaskedPan
     */
    protected $MaskedPan = null;

    /**
     * @var int $ID_CreditCard
     */
    protected $ID_CreditCard = null;

    /**
     * @var string $VaultResultToken
     */
    protected $VaultResultToken = null;

    /**
     * @var string $VaultResultMessage
     */
    protected $VaultResultMessage = null;

    /**
     * @var string $ApprovalCode
     */
    protected $ApprovalCode = null;

    /**
     * @var string $HostResponseCode
     */
    protected $HostResponseCode = null;

    /**
     * @var string $HostResponseMessage
     */
    protected $HostResponseMessage = null;

    /**
     * @var int $ProtobaseResponseCode
     */
    protected $ProtobaseResponseCode = null;

    /**
     * @var string $ProtobaseResponseMessage
     */
    protected $ProtobaseResponseMessage = null;

    /**
     * @var string $CardType
     */
    protected $CardType = null;

    /**
     * @var string $CardName
     */
    protected $CardName = null;

    /**
     * @var string $MerchantNumber
     */
    protected $MerchantNumber = null;

    /**
     * @var string $HostReferenceNumber
     */
    protected $HostReferenceNumber = null;

    /**
     * @var string $IQWareErrorMessage
     */
    protected $IQWareErrorMessage = null;

    /**
     * @var int $AccountID
     */
    protected $AccountID = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var \DateTime $TransactionDateTime
     */
    protected $TransactionDateTime = null;

    /**
     * @var int $ItemCode
     */
    protected $ItemCode = null;

    /**
     * @var string $ItemText
     */
    protected $ItemText = null;

    /**
     * @var int $ReferenceNumber
     */
    protected $ReferenceNumber = null;

    /**
     * @param int $ID_CreditCard
     * @param int $ProtobaseResponseCode
     * @param int $AccountID
     * @param int $AccountNo
     * @param \DateTime $TransactionDateTime
     * @param int $ItemCode
     * @param int $ReferenceNumber
     */
    public function __construct($ID_CreditCard, $ProtobaseResponseCode, $AccountID, $AccountNo, \DateTime $TransactionDateTime, $ItemCode, $ReferenceNumber)
    {
        $this->ID_CreditCard = $ID_CreditCard;
        $this->ProtobaseResponseCode = $ProtobaseResponseCode;
        $this->AccountID = $AccountID;
        $this->AccountNo = $AccountNo;
        $this->TransactionDateTime = $TransactionDateTime->format(\DateTime::ATOM);
        $this->ItemCode = $ItemCode;
        $this->ReferenceNumber = $ReferenceNumber;
    }

    /**
     * @return string
     */
    public function getMaskedPan()
    {
        return $this->MaskedPan;
    }

    /**
     * @param string $MaskedPan
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setMaskedPan($MaskedPan)
    {
        $this->MaskedPan = $MaskedPan;
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
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setID_CreditCard($ID_CreditCard)
    {
        $this->ID_CreditCard = $ID_CreditCard;
        return $this;
    }

    /**
     * @return string
     */
    public function getVaultResultToken()
    {
        return $this->VaultResultToken;
    }

    /**
     * @param string $VaultResultToken
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setVaultResultToken($VaultResultToken)
    {
        $this->VaultResultToken = $VaultResultToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getVaultResultMessage()
    {
        return $this->VaultResultMessage;
    }

    /**
     * @param string $VaultResultMessage
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setVaultResultMessage($VaultResultMessage)
    {
        $this->VaultResultMessage = $VaultResultMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getApprovalCode()
    {
        return $this->ApprovalCode;
    }

    /**
     * @param string $ApprovalCode
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setApprovalCode($ApprovalCode)
    {
        $this->ApprovalCode = $ApprovalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getHostResponseCode()
    {
        return $this->HostResponseCode;
    }

    /**
     * @param string $HostResponseCode
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setHostResponseCode($HostResponseCode)
    {
        $this->HostResponseCode = $HostResponseCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getHostResponseMessage()
    {
        return $this->HostResponseMessage;
    }

    /**
     * @param string $HostResponseMessage
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setHostResponseMessage($HostResponseMessage)
    {
        $this->HostResponseMessage = $HostResponseMessage;
        return $this;
    }

    /**
     * @return int
     */
    public function getProtobaseResponseCode()
    {
        return $this->ProtobaseResponseCode;
    }

    /**
     * @param int $ProtobaseResponseCode
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setProtobaseResponseCode($ProtobaseResponseCode)
    {
        $this->ProtobaseResponseCode = $ProtobaseResponseCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getProtobaseResponseMessage()
    {
        return $this->ProtobaseResponseMessage;
    }

    /**
     * @param string $ProtobaseResponseMessage
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setProtobaseResponseMessage($ProtobaseResponseMessage)
    {
        $this->ProtobaseResponseMessage = $ProtobaseResponseMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardType()
    {
        return $this->CardType;
    }

    /**
     * @param string $CardType
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setCardType($CardType)
    {
        $this->CardType = $CardType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardName()
    {
        return $this->CardName;
    }

    /**
     * @param string $CardName
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setCardName($CardName)
    {
        $this->CardName = $CardName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantNumber()
    {
        return $this->MerchantNumber;
    }

    /**
     * @param string $MerchantNumber
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setMerchantNumber($MerchantNumber)
    {
        $this->MerchantNumber = $MerchantNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getHostReferenceNumber()
    {
        return $this->HostReferenceNumber;
    }

    /**
     * @param string $HostReferenceNumber
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setHostReferenceNumber($HostReferenceNumber)
    {
        $this->HostReferenceNumber = $HostReferenceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getIQWareErrorMessage()
    {
        return $this->IQWareErrorMessage;
    }

    /**
     * @param string $IQWareErrorMessage
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setIQWareErrorMessage($IQWareErrorMessage)
    {
        $this->IQWareErrorMessage = $IQWareErrorMessage;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }

    /**
     * @param int $AccountID
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setAccountID($AccountID)
    {
        $this->AccountID = $AccountID;
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
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTransactionDateTime()
    {
        if ($this->TransactionDateTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->TransactionDateTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $TransactionDateTime
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setTransactionDateTime(\DateTime $TransactionDateTime)
    {
        $this->TransactionDateTime = $TransactionDateTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getItemCode()
    {
        return $this->ItemCode;
    }

    /**
     * @param int $ItemCode
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setItemCode($ItemCode)
    {
        $this->ItemCode = $ItemCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemText()
    {
        return $this->ItemText;
    }

    /**
     * @param string $ItemText
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setItemText($ItemText)
    {
        $this->ItemText = $ItemText;
        return $this;
    }

    /**
     * @return int
     */
    public function getReferenceNumber()
    {
        return $this->ReferenceNumber;
    }

    /**
     * @param int $ReferenceNumber
     * @return \Gueststream\PMS\IQWare\API\ProtobasePostResult
     */
    public function setReferenceNumber($ReferenceNumber)
    {
        $this->ReferenceNumber = $ReferenceNumber;
        return $this;
    }
}
