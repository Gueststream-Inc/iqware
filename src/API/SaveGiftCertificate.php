<?php

namespace Gueststream\PMS\IQWare\API;

class SaveGiftCertificate
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var string $strISOLanguage
     */
    protected $strISOLanguage = null;

    /**
     * @var string $strLastName
     */
    protected $strLastName = null;

    /**
     * @var string $strFirstName
     */
    protected $strFirstName = null;

    /**
     * @var string $strAddress1
     */
    protected $strAddress1 = null;

    /**
     * @var string $strZip
     */
    protected $strZip = null;

    /**
     * @var string $strCity
     */
    protected $strCity = null;

    /**
     * @var string $strState
     */
    protected $strState = null;

    /**
     * @var string $strCountry
     */
    protected $strCountry = null;

    /**
     * @var string $strPhone
     */
    protected $strPhone = null;

    /**
     * @var string $strEmail
     */
    protected $strEmail = null;

    /**
     * @var string $strFrom
     */
    protected $strFrom = null;

    /**
     * @var string $strRecipientLastName
     */
    protected $strRecipientLastName = null;

    /**
     * @var string $strRecipientFirstName
     */
    protected $strRecipientFirstName = null;

    /**
     * @var string $strRecipientEmail
     */
    protected $strRecipientEmail = null;

    /**
     * @var string $strRecipientAddress1
     */
    protected $strRecipientAddress1 = null;

    /**
     * @var string $strRecipientZip
     */
    protected $strRecipientZip = null;

    /**
     * @var string $strRecipientCity
     */
    protected $strRecipientCity = null;

    /**
     * @var string $strRecipientState
     */
    protected $strRecipientState = null;

    /**
     * @var string $strRecipientCountry
     */
    protected $strRecipientCountry = null;

    /**
     * @var string $strRecipientPhone
     */
    protected $strRecipientPhone = null;

    /**
     * @var string $strMessage
     */
    protected $strMessage = null;

    /**
     * @var int $intCCType
     */
    protected $intCCType = null;

    /**
     * @var string $strCCNumber
     */
    protected $strCCNumber = null;

    /**
     * @var \DateTime $dtCCExp
     */
    protected $dtCCExp = null;

    /**
     * @var int $CVV2
     */
    protected $CVV2 = null;

    /**
     * @var string $strVaultTokenGuid
     */
    protected $strVaultTokenGuid = null;

    /**
     * @var string $VaultLogin
     */
    protected $VaultLogin = null;

    /**
     * @var string $VaultPassword
     */
    protected $VaultPassword = null;

    /**
     * @var float $GiftCertificateAmount
     */
    protected $GiftCertificateAmount = null;

    /**
     * @var dsGiftCertificateDetail $dsGiftCertificateDetail
     */
    protected $dsGiftCertificateDetail = null;

    /**
     * @param int $intGUID
     * @param string $strISOLanguage
     * @param string $strLastName
     * @param string $strFirstName
     * @param string $strAddress1
     * @param string $strZip
     * @param string $strCity
     * @param string $strState
     * @param string $strCountry
     * @param string $strPhone
     * @param string $strEmail
     * @param string $strFrom
     * @param string $strRecipientLastName
     * @param string $strRecipientFirstName
     * @param string $strRecipientEmail
     * @param string $strRecipientAddress1
     * @param string $strRecipientZip
     * @param string $strRecipientCity
     * @param string $strRecipientState
     * @param string $strRecipientCountry
     * @param string $strRecipientPhone
     * @param string $strMessage
     * @param int $intCCType
     * @param string $strCCNumber
     * @param \DateTime $dtCCExp
     * @param int $CVV2
     * @param string $strVaultTokenGuid
     * @param string $VaultLogin
     * @param string $VaultPassword
     * @param float $GiftCertificateAmount
     * @param dsGiftCertificateDetail $dsGiftCertificateDetail
     */
    public function __construct($intGUID, $strISOLanguage, $strLastName, $strFirstName, $strAddress1, $strZip, $strCity, $strState, $strCountry, $strPhone, $strEmail, $strFrom, $strRecipientLastName, $strRecipientFirstName, $strRecipientEmail, $strRecipientAddress1, $strRecipientZip, $strRecipientCity, $strRecipientState, $strRecipientCountry, $strRecipientPhone, $strMessage, $intCCType, $strCCNumber, \DateTime $dtCCExp, $CVV2, $strVaultTokenGuid, $VaultLogin, $VaultPassword, $GiftCertificateAmount, $dsGiftCertificateDetail)
    {
        $this->intGUID = $intGUID;
        $this->strISOLanguage = $strISOLanguage;
        $this->strLastName = $strLastName;
        $this->strFirstName = $strFirstName;
        $this->strAddress1 = $strAddress1;
        $this->strZip = $strZip;
        $this->strCity = $strCity;
        $this->strState = $strState;
        $this->strCountry = $strCountry;
        $this->strPhone = $strPhone;
        $this->strEmail = $strEmail;
        $this->strFrom = $strFrom;
        $this->strRecipientLastName = $strRecipientLastName;
        $this->strRecipientFirstName = $strRecipientFirstName;
        $this->strRecipientEmail = $strRecipientEmail;
        $this->strRecipientAddress1 = $strRecipientAddress1;
        $this->strRecipientZip = $strRecipientZip;
        $this->strRecipientCity = $strRecipientCity;
        $this->strRecipientState = $strRecipientState;
        $this->strRecipientCountry = $strRecipientCountry;
        $this->strRecipientPhone = $strRecipientPhone;
        $this->strMessage = $strMessage;
        $this->intCCType = $intCCType;
        $this->strCCNumber = $strCCNumber;
        $this->dtCCExp = $dtCCExp->format(\DateTime::ATOM);
        $this->CVV2 = $CVV2;
        $this->strVaultTokenGuid = $strVaultTokenGuid;
        $this->VaultLogin = $VaultLogin;
        $this->VaultPassword = $VaultPassword;
        $this->GiftCertificateAmount = $GiftCertificateAmount;
        $this->dsGiftCertificateDetail = $dsGiftCertificateDetail;
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
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrISOLanguage()
    {
        return $this->strISOLanguage;
    }

    /**
     * @param string $strISOLanguage
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrISOLanguage($strISOLanguage)
    {
        $this->strISOLanguage = $strISOLanguage;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrLastName()
    {
        return $this->strLastName;
    }

    /**
     * @param string $strLastName
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrLastName($strLastName)
    {
        $this->strLastName = $strLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrFirstName()
    {
        return $this->strFirstName;
    }

    /**
     * @param string $strFirstName
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrFirstName($strFirstName)
    {
        $this->strFirstName = $strFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrAddress1()
    {
        return $this->strAddress1;
    }

    /**
     * @param string $strAddress1
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrAddress1($strAddress1)
    {
        $this->strAddress1 = $strAddress1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrZip()
    {
        return $this->strZip;
    }

    /**
     * @param string $strZip
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrZip($strZip)
    {
        $this->strZip = $strZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrCity()
    {
        return $this->strCity;
    }

    /**
     * @param string $strCity
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrCity($strCity)
    {
        $this->strCity = $strCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrState()
    {
        return $this->strState;
    }

    /**
     * @param string $strState
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrState($strState)
    {
        $this->strState = $strState;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrCountry()
    {
        return $this->strCountry;
    }

    /**
     * @param string $strCountry
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrCountry($strCountry)
    {
        $this->strCountry = $strCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrPhone()
    {
        return $this->strPhone;
    }

    /**
     * @param string $strPhone
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrPhone($strPhone)
    {
        $this->strPhone = $strPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrEmail()
    {
        return $this->strEmail;
    }

    /**
     * @param string $strEmail
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrEmail($strEmail)
    {
        $this->strEmail = $strEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrFrom()
    {
        return $this->strFrom;
    }

    /**
     * @param string $strFrom
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrFrom($strFrom)
    {
        $this->strFrom = $strFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRecipientLastName()
    {
        return $this->strRecipientLastName;
    }

    /**
     * @param string $strRecipientLastName
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrRecipientLastName($strRecipientLastName)
    {
        $this->strRecipientLastName = $strRecipientLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRecipientFirstName()
    {
        return $this->strRecipientFirstName;
    }

    /**
     * @param string $strRecipientFirstName
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrRecipientFirstName($strRecipientFirstName)
    {
        $this->strRecipientFirstName = $strRecipientFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRecipientEmail()
    {
        return $this->strRecipientEmail;
    }

    /**
     * @param string $strRecipientEmail
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrRecipientEmail($strRecipientEmail)
    {
        $this->strRecipientEmail = $strRecipientEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRecipientAddress1()
    {
        return $this->strRecipientAddress1;
    }

    /**
     * @param string $strRecipientAddress1
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrRecipientAddress1($strRecipientAddress1)
    {
        $this->strRecipientAddress1 = $strRecipientAddress1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRecipientZip()
    {
        return $this->strRecipientZip;
    }

    /**
     * @param string $strRecipientZip
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrRecipientZip($strRecipientZip)
    {
        $this->strRecipientZip = $strRecipientZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRecipientCity()
    {
        return $this->strRecipientCity;
    }

    /**
     * @param string $strRecipientCity
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrRecipientCity($strRecipientCity)
    {
        $this->strRecipientCity = $strRecipientCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRecipientState()
    {
        return $this->strRecipientState;
    }

    /**
     * @param string $strRecipientState
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrRecipientState($strRecipientState)
    {
        $this->strRecipientState = $strRecipientState;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRecipientCountry()
    {
        return $this->strRecipientCountry;
    }

    /**
     * @param string $strRecipientCountry
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrRecipientCountry($strRecipientCountry)
    {
        $this->strRecipientCountry = $strRecipientCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRecipientPhone()
    {
        return $this->strRecipientPhone;
    }

    /**
     * @param string $strRecipientPhone
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrRecipientPhone($strRecipientPhone)
    {
        $this->strRecipientPhone = $strRecipientPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrMessage()
    {
        return $this->strMessage;
    }

    /**
     * @param string $strMessage
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrMessage($strMessage)
    {
        $this->strMessage = $strMessage;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntCCType()
    {
        return $this->intCCType;
    }

    /**
     * @param int $intCCType
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setIntCCType($intCCType)
    {
        $this->intCCType = $intCCType;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrCCNumber()
    {
        return $this->strCCNumber;
    }

    /**
     * @param string $strCCNumber
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrCCNumber($strCCNumber)
    {
        $this->strCCNumber = $strCCNumber;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtCCExp()
    {
        if ($this->dtCCExp == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dtCCExp);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dtCCExp
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setDtCCExp(\DateTime $dtCCExp)
    {
        $this->dtCCExp = $dtCCExp->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setCVV2($CVV2)
    {
        $this->CVV2 = $CVV2;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrVaultTokenGuid()
    {
        return $this->strVaultTokenGuid;
    }

    /**
     * @param string $strVaultTokenGuid
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setStrVaultTokenGuid($strVaultTokenGuid)
    {
        $this->strVaultTokenGuid = $strVaultTokenGuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getVaultLogin()
    {
        return $this->VaultLogin;
    }

    /**
     * @param string $VaultLogin
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setVaultLogin($VaultLogin)
    {
        $this->VaultLogin = $VaultLogin;
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
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setVaultPassword($VaultPassword)
    {
        $this->VaultPassword = $VaultPassword;
        return $this;
    }

    /**
     * @return float
     */
    public function getGiftCertificateAmount()
    {
        return $this->GiftCertificateAmount;
    }

    /**
     * @param float $GiftCertificateAmount
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setGiftCertificateAmount($GiftCertificateAmount)
    {
        $this->GiftCertificateAmount = $GiftCertificateAmount;
        return $this;
    }

    /**
     * @return dsGiftCertificateDetail
     */
    public function getDsGiftCertificateDetail()
    {
        return $this->dsGiftCertificateDetail;
    }

    /**
     * @param dsGiftCertificateDetail $dsGiftCertificateDetail
     * @return \Gueststream\PMS\IQWare\API\SaveGiftCertificate
     */
    public function setDsGiftCertificateDetail($dsGiftCertificateDetail)
    {
        $this->dsGiftCertificateDetail = $dsGiftCertificateDetail;
        return $this;
    }
}
