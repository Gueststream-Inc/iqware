<?php

namespace Gueststream\PMS\IQWare\API;

class SaveIncentiveGiftCertificate
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
     * @param float $GiftCertificateAmount
     * @param dsGiftCertificateDetail $dsGiftCertificateDetail
     */
    public function __construct($intGUID, $strISOLanguage, $strLastName, $strFirstName, $strAddress1, $strZip, $strCity, $strState, $strCountry, $strPhone, $strEmail, $strFrom, $GiftCertificateAmount, $dsGiftCertificateDetail)
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
     */
    public function setStrFrom($strFrom)
    {
        $this->strFrom = $strFrom;
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
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
     * @return \Gueststream\PMS\IQWare\API\SaveIncentiveGiftCertificate
     */
    public function setDsGiftCertificateDetail($dsGiftCertificateDetail)
    {
        $this->dsGiftCertificateDetail = $dsGiftCertificateDetail;
        return $this;
    }
}
