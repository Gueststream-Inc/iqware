<?php

namespace Gueststream\PMS\IQWare\API;

class BeachChairSaveReservationWithCardProcessed
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
     * @var string $strFirstName
     */
    protected $strFirstName = null;

    /**
     * @var string $strLastName
     */
    protected $strLastName = null;

    /**
     * @var string $strCompany
     */
    protected $strCompany = null;

    /**
     * @var string $strAddress1
     */
    protected $strAddress1 = null;

    /**
     * @var string $strAddress2
     */
    protected $strAddress2 = null;

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
     * @var string $strZip
     */
    protected $strZip = null;

    /**
     * @var string $strPhone
     */
    protected $strPhone = null;

    /**
     * @var string $strEmail
     */
    protected $strEmail = null;

    /**
     * @var int $intCCType
     */
    protected $intCCType = null;

    /**
     * @var string $strVaultTokenGuid
     */
    protected $strVaultTokenGuid = null;

    /**
     * @var int $CVV2
     */
    protected $CVV2 = null;

    /**
     * @var \DateTime $dtCCExp
     */
    protected $dtCCExp = null;

    /**
     * @var \DateTime $dtArrivalDate
     */
    protected $dtArrivalDate = null;

    /**
     * @var \DateTime $dtDepartureDate
     */
    protected $dtDepartureDate = null;

    /**
     * @var int $intGuestCount
     */
    protected $intGuestCount = null;

    /**
     * @var string $strChildren
     */
    protected $strChildren = null;

    /**
     * @var int $intRateID
     */
    protected $intRateID = null;

    /**
     * @var int $intRoomTypeID
     */
    protected $intRoomTypeID = null;

    /**
     * @var int $intPromoPushID
     */
    protected $intPromoPushID = null;

    /**
     * @var int $intPromoCodeID
     */
    protected $intPromoCodeID = null;

    /**
     * @var string $strAttributes
     */
    protected $strAttributes = null;

    /**
     * @var string $strLocations
     */
    protected $strLocations = null;

    /**
     * @var string $strSpecialRequests
     */
    protected $strSpecialRequests = null;

    /**
     * @var string $strActivityStructure
     */
    protected $strActivityStructure = null;

    /**
     * @var int $intRoomQty
     */
    protected $intRoomQty = null;

    /**
     * @var dstElements $dstElements
     */
    protected $dstElements = null;

    /**
     * @var int $intTANo
     */
    protected $intTANo = null;

    /**
     * @var string $strIATANo
     */
    protected $strIATANo = null;

    /**
     * @var int $intMemNo
     */
    protected $intMemNo = null;

    /**
     * @var dstGolfPackageItems $dstGolfPackageItems
     */
    protected $dstGolfPackageItems = null;

    /**
     * @var int $intCondoOwnerId
     */
    protected $intCondoOwnerId = null;

    /**
     * @var int $intRoomId
     */
    protected $intRoomId = null;

    /**
     * @var int $intBookingCondoType
     */
    protected $intBookingCondoType = null;

    /**
     * @var boolean $IsInsuranceAccepted
     */
    protected $IsInsuranceAccepted = null;

    /**
     * @var int $intBuildingID
     */
    protected $intBuildingID = null;

    /**
     * @var float $ReservationAmount
     */
    protected $ReservationAmount = null;

    /**
     * @var string $VaultLogin
     */
    protected $VaultLogin = null;

    /**
     * @var string $VaultPassword
     */
    protected $VaultPassword = null;

    /**
     * @var string $ELMMarketingSource
     */
    protected $ELMMarketingSource = null;

    /**
     * @var string $DayOfBirth
     */
    protected $DayOfBirth = null;

    /**
     * @var string $MonthOfBirth
     */
    protected $MonthOfBirth = null;

    /**
     * @var string $YearOfBirth
     */
    protected $YearOfBirth = null;

    /**
     * @var string $strComments
     */
    protected $strComments = null;

    /**
     * @var boolean $IsPaidByFOO
     */
    protected $IsPaidByFOO = null;

    /**
     * @var boolean $IsApplySpecialOffers
     */
    protected $IsApplySpecialOffers = null;

    /**
     * @var int $intBusinessSourceID
     */
    protected $intBusinessSourceID = null;

    /**
     * @var dstServicesChargesALaCarte $dstServicesChargesALaCarte
     */
    protected $dstServicesChargesALaCarte = null;

    /**
     * @var int $intSuiteConfigurationID
     */
    protected $intSuiteConfigurationID = null;

    /**
     * @var ArrayOfActivityUnit $ListActivityUnits
     */
    protected $ListActivityUnits = null;

    /**
     * @var int $ID_ActivityToken
     */
    protected $ID_ActivityToken = null;

    /**
     * @param int $intGUID
     * @param string $strISOLanguage
     * @param string $strFirstName
     * @param string $strLastName
     * @param string $strCompany
     * @param string $strAddress1
     * @param string $strAddress2
     * @param string $strCity
     * @param string $strState
     * @param string $strCountry
     * @param string $strZip
     * @param string $strPhone
     * @param string $strEmail
     * @param int $intCCType
     * @param string $strVaultTokenGuid
     * @param int $CVV2
     * @param \DateTime $dtCCExp
     * @param \DateTime $dtArrivalDate
     * @param \DateTime $dtDepartureDate
     * @param int $intGuestCount
     * @param string $strChildren
     * @param int $intRateID
     * @param int $intRoomTypeID
     * @param int $intPromoPushID
     * @param int $intPromoCodeID
     * @param string $strAttributes
     * @param string $strLocations
     * @param string $strSpecialRequests
     * @param string $strActivityStructure
     * @param int $intRoomQty
     * @param dstElements $dstElements
     * @param int $intTANo
     * @param string $strIATANo
     * @param int $intMemNo
     * @param dstGolfPackageItems $dstGolfPackageItems
     * @param int $intCondoOwnerId
     * @param int $intRoomId
     * @param int $intBookingCondoType
     * @param boolean $IsInsuranceAccepted
     * @param int $intBuildingID
     * @param float $ReservationAmount
     * @param string $VaultLogin
     * @param string $VaultPassword
     * @param string $ELMMarketingSource
     * @param string $DayOfBirth
     * @param string $MonthOfBirth
     * @param string $YearOfBirth
     * @param string $strComments
     * @param boolean $IsPaidByFOO
     * @param boolean $IsApplySpecialOffers
     * @param int $intBusinessSourceID
     * @param dstServicesChargesALaCarte $dstServicesChargesALaCarte
     * @param int $intSuiteConfigurationID
     * @param ArrayOfActivityUnit $ListActivityUnits
     * @param int $ID_ActivityToken
     */
    public function __construct($intGUID, $strISOLanguage, $strFirstName, $strLastName, $strCompany, $strAddress1, $strAddress2, $strCity, $strState, $strCountry, $strZip, $strPhone, $strEmail, $intCCType, $strVaultTokenGuid, $CVV2, \DateTime $dtCCExp, \DateTime $dtArrivalDate, \DateTime $dtDepartureDate, $intGuestCount, $strChildren, $intRateID, $intRoomTypeID, $intPromoPushID, $intPromoCodeID, $strAttributes, $strLocations, $strSpecialRequests, $strActivityStructure, $intRoomQty, $dstElements, $intTANo, $strIATANo, $intMemNo, $dstGolfPackageItems, $intCondoOwnerId, $intRoomId, $intBookingCondoType, $IsInsuranceAccepted, $intBuildingID, $ReservationAmount, $VaultLogin, $VaultPassword, $ELMMarketingSource, $DayOfBirth, $MonthOfBirth, $YearOfBirth, $strComments, $IsPaidByFOO, $IsApplySpecialOffers, $intBusinessSourceID, $dstServicesChargesALaCarte, $intSuiteConfigurationID, $ListActivityUnits, $ID_ActivityToken)
    {
        $this->intGUID = $intGUID;
        $this->strISOLanguage = $strISOLanguage;
        $this->strFirstName = $strFirstName;
        $this->strLastName = $strLastName;
        $this->strCompany = $strCompany;
        $this->strAddress1 = $strAddress1;
        $this->strAddress2 = $strAddress2;
        $this->strCity = $strCity;
        $this->strState = $strState;
        $this->strCountry = $strCountry;
        $this->strZip = $strZip;
        $this->strPhone = $strPhone;
        $this->strEmail = $strEmail;
        $this->intCCType = $intCCType;
        $this->strVaultTokenGuid = $strVaultTokenGuid;
        $this->CVV2 = $CVV2;
        $this->dtCCExp = $dtCCExp->format(\DateTime::ATOM);
        $this->dtArrivalDate = $dtArrivalDate->format(\DateTime::ATOM);
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        $this->intGuestCount = $intGuestCount;
        $this->strChildren = $strChildren;
        $this->intRateID = $intRateID;
        $this->intRoomTypeID = $intRoomTypeID;
        $this->intPromoPushID = $intPromoPushID;
        $this->intPromoCodeID = $intPromoCodeID;
        $this->strAttributes = $strAttributes;
        $this->strLocations = $strLocations;
        $this->strSpecialRequests = $strSpecialRequests;
        $this->strActivityStructure = $strActivityStructure;
        $this->intRoomQty = $intRoomQty;
        $this->dstElements = $dstElements;
        $this->intTANo = $intTANo;
        $this->strIATANo = $strIATANo;
        $this->intMemNo = $intMemNo;
        $this->dstGolfPackageItems = $dstGolfPackageItems;
        $this->intCondoOwnerId = $intCondoOwnerId;
        $this->intRoomId = $intRoomId;
        $this->intBookingCondoType = $intBookingCondoType;
        $this->IsInsuranceAccepted = $IsInsuranceAccepted;
        $this->intBuildingID = $intBuildingID;
        $this->ReservationAmount = $ReservationAmount;
        $this->VaultLogin = $VaultLogin;
        $this->VaultPassword = $VaultPassword;
        $this->ELMMarketingSource = $ELMMarketingSource;
        $this->DayOfBirth = $DayOfBirth;
        $this->MonthOfBirth = $MonthOfBirth;
        $this->YearOfBirth = $YearOfBirth;
        $this->strComments = $strComments;
        $this->IsPaidByFOO = $IsPaidByFOO;
        $this->IsApplySpecialOffers = $IsApplySpecialOffers;
        $this->intBusinessSourceID = $intBusinessSourceID;
        $this->dstServicesChargesALaCarte = $dstServicesChargesALaCarte;
        $this->intSuiteConfigurationID = $intSuiteConfigurationID;
        $this->ListActivityUnits = $ListActivityUnits;
        $this->ID_ActivityToken = $ID_ActivityToken;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrISOLanguage($strISOLanguage)
    {
        $this->strISOLanguage = $strISOLanguage;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrFirstName($strFirstName)
    {
        $this->strFirstName = $strFirstName;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrLastName($strLastName)
    {
        $this->strLastName = $strLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrCompany()
    {
        return $this->strCompany;
    }

    /**
     * @param string $strCompany
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrCompany($strCompany)
    {
        $this->strCompany = $strCompany;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrAddress1($strAddress1)
    {
        $this->strAddress1 = $strAddress1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrAddress2()
    {
        return $this->strAddress2;
    }

    /**
     * @param string $strAddress2
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrAddress2($strAddress2)
    {
        $this->strAddress2 = $strAddress2;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrCountry($strCountry)
    {
        $this->strCountry = $strCountry;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrZip($strZip)
    {
        $this->strZip = $strZip;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrEmail($strEmail)
    {
        $this->strEmail = $strEmail;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntCCType($intCCType)
    {
        $this->intCCType = $intCCType;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrVaultTokenGuid($strVaultTokenGuid)
    {
        $this->strVaultTokenGuid = $strVaultTokenGuid;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setCVV2($CVV2)
    {
        $this->CVV2 = $CVV2;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setDtCCExp(\DateTime $dtCCExp)
    {
        $this->dtCCExp = $dtCCExp->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtArrivalDate()
    {
        if ($this->dtArrivalDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dtArrivalDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dtArrivalDate
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setDtArrivalDate(\DateTime $dtArrivalDate)
    {
        $this->dtArrivalDate = $dtArrivalDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtDepartureDate()
    {
        if ($this->dtDepartureDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dtDepartureDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dtDepartureDate
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setDtDepartureDate(\DateTime $dtDepartureDate)
    {
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getIntGuestCount()
    {
        return $this->intGuestCount;
    }

    /**
     * @param int $intGuestCount
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntGuestCount($intGuestCount)
    {
        $this->intGuestCount = $intGuestCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrChildren()
    {
        return $this->strChildren;
    }

    /**
     * @param string $strChildren
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrChildren($strChildren)
    {
        $this->strChildren = $strChildren;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRateID()
    {
        return $this->intRateID;
    }

    /**
     * @param int $intRateID
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntRateID($intRateID)
    {
        $this->intRateID = $intRateID;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRoomTypeID()
    {
        return $this->intRoomTypeID;
    }

    /**
     * @param int $intRoomTypeID
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntRoomTypeID($intRoomTypeID)
    {
        $this->intRoomTypeID = $intRoomTypeID;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntPromoPushID()
    {
        return $this->intPromoPushID;
    }

    /**
     * @param int $intPromoPushID
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntPromoPushID($intPromoPushID)
    {
        $this->intPromoPushID = $intPromoPushID;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntPromoCodeID()
    {
        return $this->intPromoCodeID;
    }

    /**
     * @param int $intPromoCodeID
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntPromoCodeID($intPromoCodeID)
    {
        $this->intPromoCodeID = $intPromoCodeID;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrAttributes()
    {
        return $this->strAttributes;
    }

    /**
     * @param string $strAttributes
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrAttributes($strAttributes)
    {
        $this->strAttributes = $strAttributes;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrLocations()
    {
        return $this->strLocations;
    }

    /**
     * @param string $strLocations
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrLocations($strLocations)
    {
        $this->strLocations = $strLocations;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrSpecialRequests()
    {
        return $this->strSpecialRequests;
    }

    /**
     * @param string $strSpecialRequests
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrSpecialRequests($strSpecialRequests)
    {
        $this->strSpecialRequests = $strSpecialRequests;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrActivityStructure()
    {
        return $this->strActivityStructure;
    }

    /**
     * @param string $strActivityStructure
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrActivityStructure($strActivityStructure)
    {
        $this->strActivityStructure = $strActivityStructure;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRoomQty()
    {
        return $this->intRoomQty;
    }

    /**
     * @param int $intRoomQty
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntRoomQty($intRoomQty)
    {
        $this->intRoomQty = $intRoomQty;
        return $this;
    }

    /**
     * @return dstElements
     */
    public function getDstElements()
    {
        return $this->dstElements;
    }

    /**
     * @param dstElements $dstElements
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setDstElements($dstElements)
    {
        $this->dstElements = $dstElements;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntTANo()
    {
        return $this->intTANo;
    }

    /**
     * @param int $intTANo
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntTANo($intTANo)
    {
        $this->intTANo = $intTANo;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrIATANo()
    {
        return $this->strIATANo;
    }

    /**
     * @param string $strIATANo
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrIATANo($strIATANo)
    {
        $this->strIATANo = $strIATANo;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntMemNo()
    {
        return $this->intMemNo;
    }

    /**
     * @param int $intMemNo
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntMemNo($intMemNo)
    {
        $this->intMemNo = $intMemNo;
        return $this;
    }

    /**
     * @return dstGolfPackageItems
     */
    public function getDstGolfPackageItems()
    {
        return $this->dstGolfPackageItems;
    }

    /**
     * @param dstGolfPackageItems $dstGolfPackageItems
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setDstGolfPackageItems($dstGolfPackageItems)
    {
        $this->dstGolfPackageItems = $dstGolfPackageItems;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntCondoOwnerId()
    {
        return $this->intCondoOwnerId;
    }

    /**
     * @param int $intCondoOwnerId
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntCondoOwnerId($intCondoOwnerId)
    {
        $this->intCondoOwnerId = $intCondoOwnerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRoomId()
    {
        return $this->intRoomId;
    }

    /**
     * @param int $intRoomId
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntRoomId($intRoomId)
    {
        $this->intRoomId = $intRoomId;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntBookingCondoType()
    {
        return $this->intBookingCondoType;
    }

    /**
     * @param int $intBookingCondoType
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntBookingCondoType($intBookingCondoType)
    {
        $this->intBookingCondoType = $intBookingCondoType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInsuranceAccepted()
    {
        return $this->IsInsuranceAccepted;
    }

    /**
     * @param boolean $IsInsuranceAccepted
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIsInsuranceAccepted($IsInsuranceAccepted)
    {
        $this->IsInsuranceAccepted = $IsInsuranceAccepted;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntBuildingID()
    {
        return $this->intBuildingID;
    }

    /**
     * @param int $intBuildingID
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntBuildingID($intBuildingID)
    {
        $this->intBuildingID = $intBuildingID;
        return $this;
    }

    /**
     * @return float
     */
    public function getReservationAmount()
    {
        return $this->ReservationAmount;
    }

    /**
     * @param float $ReservationAmount
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setReservationAmount($ReservationAmount)
    {
        $this->ReservationAmount = $ReservationAmount;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setVaultPassword($VaultPassword)
    {
        $this->VaultPassword = $VaultPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getELMMarketingSource()
    {
        return $this->ELMMarketingSource;
    }

    /**
     * @param string $ELMMarketingSource
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setELMMarketingSource($ELMMarketingSource)
    {
        $this->ELMMarketingSource = $ELMMarketingSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getDayOfBirth()
    {
        return $this->DayOfBirth;
    }

    /**
     * @param string $DayOfBirth
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setDayOfBirth($DayOfBirth)
    {
        $this->DayOfBirth = $DayOfBirth;
        return $this;
    }

    /**
     * @return string
     */
    public function getMonthOfBirth()
    {
        return $this->MonthOfBirth;
    }

    /**
     * @param string $MonthOfBirth
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setMonthOfBirth($MonthOfBirth)
    {
        $this->MonthOfBirth = $MonthOfBirth;
        return $this;
    }

    /**
     * @return string
     */
    public function getYearOfBirth()
    {
        return $this->YearOfBirth;
    }

    /**
     * @param string $YearOfBirth
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setYearOfBirth($YearOfBirth)
    {
        $this->YearOfBirth = $YearOfBirth;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrComments()
    {
        return $this->strComments;
    }

    /**
     * @param string $strComments
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setStrComments($strComments)
    {
        $this->strComments = $strComments;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPaidByFOO()
    {
        return $this->IsPaidByFOO;
    }

    /**
     * @param boolean $IsPaidByFOO
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIsPaidByFOO($IsPaidByFOO)
    {
        $this->IsPaidByFOO = $IsPaidByFOO;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsApplySpecialOffers()
    {
        return $this->IsApplySpecialOffers;
    }

    /**
     * @param boolean $IsApplySpecialOffers
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIsApplySpecialOffers($IsApplySpecialOffers)
    {
        $this->IsApplySpecialOffers = $IsApplySpecialOffers;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntBusinessSourceID()
    {
        return $this->intBusinessSourceID;
    }

    /**
     * @param int $intBusinessSourceID
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntBusinessSourceID($intBusinessSourceID)
    {
        $this->intBusinessSourceID = $intBusinessSourceID;
        return $this;
    }

    /**
     * @return dstServicesChargesALaCarte
     */
    public function getDstServicesChargesALaCarte()
    {
        return $this->dstServicesChargesALaCarte;
    }

    /**
     * @param dstServicesChargesALaCarte $dstServicesChargesALaCarte
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setDstServicesChargesALaCarte($dstServicesChargesALaCarte)
    {
        $this->dstServicesChargesALaCarte = $dstServicesChargesALaCarte;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntSuiteConfigurationID()
    {
        return $this->intSuiteConfigurationID;
    }

    /**
     * @param int $intSuiteConfigurationID
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setIntSuiteConfigurationID($intSuiteConfigurationID)
    {
        $this->intSuiteConfigurationID = $intSuiteConfigurationID;
        return $this;
    }

    /**
     * @return ArrayOfActivityUnit
     */
    public function getListActivityUnits()
    {
        return $this->ListActivityUnits;
    }

    /**
     * @param ArrayOfActivityUnit $ListActivityUnits
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setListActivityUnits($ListActivityUnits)
    {
        $this->ListActivityUnits = $ListActivityUnits;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_ActivityToken()
    {
        return $this->ID_ActivityToken;
    }

    /**
     * @param int $ID_ActivityToken
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessed
     */
    public function setID_ActivityToken($ID_ActivityToken)
    {
        $this->ID_ActivityToken = $ID_ActivityToken;
        return $this;
    }
}
