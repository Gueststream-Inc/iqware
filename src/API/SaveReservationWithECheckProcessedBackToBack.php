<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithECheckProcessedBackToBack
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
     * @var IAB2BMode $BacktoBackMode
     */
    protected $BacktoBackMode = null;

    /**
     * @var boolean $IsApplySpecialOffers
     */
    protected $IsApplySpecialOffers = null;

    /**
     * @var string $strListSpecialOffertApplicable
     */
    protected $strListSpecialOffertApplicable = null;

    /**
     * @var int $intBusinessSourceID
     */
    protected $intBusinessSourceID = null;

    /**
     * @var dstServicesChargesALaCarte $dstServicesChargesALaCarte
     */
    protected $dstServicesChargesALaCarte = null;

    /**
     * @var string $strRootingNo
     */
    protected $strRootingNo = null;

    /**
     * @var string $strBankAccountNo
     */
    protected $strBankAccountNo = null;

    /**
     * @var IQBankAccountType $batCheckingType
     */
    protected $batCheckingType = null;

    /**
     * @var string $strBankName
     */
    protected $strBankName = null;

    /**
     * @var string $strAccountName
     */
    protected $strAccountName = null;

    /**
     * @var string $strCheckNo
     */
    protected $strCheckNo = null;

    /**
     * @var string $strBankInstitutNo
     */
    protected $strBankInstitutNo = null;

    /**
     * @var int $intSuiteConfigurationID
     */
    protected $intSuiteConfigurationID = null;

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
     * @param string $ELMMarketingSource
     * @param string $DayOfBirth
     * @param string $MonthOfBirth
     * @param string $YearOfBirth
     * @param string $strComments
     * @param boolean $IsPaidByFOO
     * @param IAB2BMode $BacktoBackMode
     * @param boolean $IsApplySpecialOffers
     * @param string $strListSpecialOffertApplicable
     * @param int $intBusinessSourceID
     * @param dstServicesChargesALaCarte $dstServicesChargesALaCarte
     * @param string $strRootingNo
     * @param string $strBankAccountNo
     * @param IQBankAccountType $batCheckingType
     * @param string $strBankName
     * @param string $strAccountName
     * @param string $strCheckNo
     * @param string $strBankInstitutNo
     * @param int $intSuiteConfigurationID
     */
    public function __construct($intGUID, $strISOLanguage, $strFirstName, $strLastName, $strCompany, $strAddress1, $strAddress2, $strCity, $strState, $strCountry, $strZip, $strPhone, $strEmail, \DateTime $dtArrivalDate, \DateTime $dtDepartureDate, $intGuestCount, $strChildren, $intRateID, $intRoomTypeID, $intPromoPushID, $intPromoCodeID, $strAttributes, $strLocations, $strSpecialRequests, $strActivityStructure, $intRoomQty, $dstElements, $intTANo, $strIATANo, $intMemNo, $dstGolfPackageItems, $intCondoOwnerId, $intRoomId, $intBookingCondoType, $IsInsuranceAccepted, $intBuildingID, $ReservationAmount, $ELMMarketingSource, $DayOfBirth, $MonthOfBirth, $YearOfBirth, $strComments, $IsPaidByFOO, $BacktoBackMode, $IsApplySpecialOffers, $strListSpecialOffertApplicable, $intBusinessSourceID, $dstServicesChargesALaCarte, $strRootingNo, $strBankAccountNo, $batCheckingType, $strBankName, $strAccountName, $strCheckNo, $strBankInstitutNo, $intSuiteConfigurationID)
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
        $this->ELMMarketingSource = $ELMMarketingSource;
        $this->DayOfBirth = $DayOfBirth;
        $this->MonthOfBirth = $MonthOfBirth;
        $this->YearOfBirth = $YearOfBirth;
        $this->strComments = $strComments;
        $this->IsPaidByFOO = $IsPaidByFOO;
        $this->BacktoBackMode = $BacktoBackMode;
        $this->IsApplySpecialOffers = $IsApplySpecialOffers;
        $this->strListSpecialOffertApplicable = $strListSpecialOffertApplicable;
        $this->intBusinessSourceID = $intBusinessSourceID;
        $this->dstServicesChargesALaCarte = $dstServicesChargesALaCarte;
        $this->strRootingNo = $strRootingNo;
        $this->strBankAccountNo = $strBankAccountNo;
        $this->batCheckingType = $batCheckingType;
        $this->strBankName = $strBankName;
        $this->strAccountName = $strAccountName;
        $this->strCheckNo = $strCheckNo;
        $this->strBankInstitutNo = $strBankInstitutNo;
        $this->intSuiteConfigurationID = $intSuiteConfigurationID;
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setStrEmail($strEmail)
    {
        $this->strEmail = $strEmail;
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setReservationAmount($ReservationAmount)
    {
        $this->ReservationAmount = $ReservationAmount;
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setIsPaidByFOO($IsPaidByFOO)
    {
        $this->IsPaidByFOO = $IsPaidByFOO;
        return $this;
    }

    /**
     * @return IAB2BMode
     */
    public function getBacktoBackMode()
    {
        return $this->BacktoBackMode;
    }

    /**
     * @param IAB2BMode $BacktoBackMode
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setBacktoBackMode($BacktoBackMode)
    {
        $this->BacktoBackMode = $BacktoBackMode;
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setIsApplySpecialOffers($IsApplySpecialOffers)
    {
        $this->IsApplySpecialOffers = $IsApplySpecialOffers;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrListSpecialOffertApplicable()
    {
        return $this->strListSpecialOffertApplicable;
    }

    /**
     * @param string $strListSpecialOffertApplicable
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setStrListSpecialOffertApplicable($strListSpecialOffertApplicable)
    {
        $this->strListSpecialOffertApplicable = $strListSpecialOffertApplicable;
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setDstServicesChargesALaCarte($dstServicesChargesALaCarte)
    {
        $this->dstServicesChargesALaCarte = $dstServicesChargesALaCarte;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRootingNo()
    {
        return $this->strRootingNo;
    }

    /**
     * @param string $strRootingNo
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setStrRootingNo($strRootingNo)
    {
        $this->strRootingNo = $strRootingNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrBankAccountNo()
    {
        return $this->strBankAccountNo;
    }

    /**
     * @param string $strBankAccountNo
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setStrBankAccountNo($strBankAccountNo)
    {
        $this->strBankAccountNo = $strBankAccountNo;
        return $this;
    }

    /**
     * @return IQBankAccountType
     */
    public function getBatCheckingType()
    {
        return $this->batCheckingType;
    }

    /**
     * @param IQBankAccountType $batCheckingType
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setBatCheckingType($batCheckingType)
    {
        $this->batCheckingType = $batCheckingType;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrBankName()
    {
        return $this->strBankName;
    }

    /**
     * @param string $strBankName
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setStrBankName($strBankName)
    {
        $this->strBankName = $strBankName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrAccountName()
    {
        return $this->strAccountName;
    }

    /**
     * @param string $strAccountName
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setStrAccountName($strAccountName)
    {
        $this->strAccountName = $strAccountName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrCheckNo()
    {
        return $this->strCheckNo;
    }

    /**
     * @param string $strCheckNo
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setStrCheckNo($strCheckNo)
    {
        $this->strCheckNo = $strCheckNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrBankInstitutNo()
    {
        return $this->strBankInstitutNo;
    }

    /**
     * @param string $strBankInstitutNo
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setStrBankInstitutNo($strBankInstitutNo)
    {
        $this->strBankInstitutNo = $strBankInstitutNo;
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
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBack
     */
    public function setIntSuiteConfigurationID($intSuiteConfigurationID)
    {
        $this->intSuiteConfigurationID = $intSuiteConfigurationID;
        return $this;
    }
}
