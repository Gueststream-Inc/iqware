<?php

namespace Gueststream\PMS\IQWare\API;

class cReservation
{

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var TAccountStatus $AccountStatusType
     */
    protected $AccountStatusType = null;

    /**
     * @var int $NumberOfGuests
     */
    protected $NumberOfGuests = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var int $ID_MarketSegment
     */
    protected $ID_MarketSegment = null;

    /**
     * @var string $CrsNo
     */
    protected $CrsNo = null;

    /**
     * @var TCRSBookingType $CrsBookingType
     */
    protected $CrsBookingType = null;

    /**
     * @var TSBDManualType $ManualRateType
     */
    protected $ManualRateType = null;

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var float $ManualRate
     */
    protected $ManualRate = null;

    /**
     * @var int $ID_ManualRateReason
     */
    protected $ID_ManualRateReason = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var int $ID_Accomodation
     */
    protected $ID_Accomodation = null;

    /**
     * @var ArrayOfInt $ChildrenAges
     */
    protected $ChildrenAges = null;

    /**
     * @var ArrayOfInt $AttributesCode
     */
    protected $AttributesCode = null;

    /**
     * @var ArrayOfInt $LocalizationsCode
     */
    protected $LocalizationsCode = null;

    /**
     * @var ArrayOfInt $SpecialRequest
     */
    protected $SpecialRequest = null;

    /**
     * @var cAccount $Account
     */
    protected $Account = null;

    /**
     * @var cProfil $Profil
     */
    protected $Profil = null;

    /**
     * @var cInfo $Info
     */
    protected $Info = null;

    /**
     * @var cAddresses $Addresses
     */
    protected $Addresses = null;

    /**
     * @var cReservationLinks $Links
     */
    protected $Links = null;

    /**
     * @var ArrayOfCElement $PackageElements
     */
    protected $PackageElements = null;

    /**
     * @var ArrayOfCElement $ElementsALaCarte
     */
    protected $ElementsALaCarte = null;

    /**
     * @var cStayValue $StayValue
     */
    protected $StayValue = null;

    /**
     * @var ArrayOfCRateDaily $DailyRates
     */
    protected $DailyRates = null;

    /**
     * @var ArrayOfCManualRateDaily $DailyManualRates
     */
    protected $DailyManualRates = null;

    /**
     * @var cReservationShare $Share
     */
    protected $Share = null;

    /**
     * @var ArrayOfCPersonCountDaily $DailyPersonCount
     */
    protected $DailyPersonCount = null;

    /**
     * @var ArrayOfCServiceChargeALaCarte $PackageServiceCharges
     */
    protected $PackageServiceCharges = null;

    /**
     * @var ArrayOfCServiceChargeALaCarte $ServiceChargesALaCarte
     */
    protected $ServiceChargesALaCarte = null;

    /**
     * @var ArrayOfCGolfItems $GolfItems
     */
    protected $GolfItems = null;

    /**
     * @var ArrayOfCComments $Comments
     */
    protected $Comments = null;

    /**
     * @param int $AccountNo
     * @param TAccountStatus $AccountStatusType
     * @param int $NumberOfGuests
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     * @param int $ID_MarketSegment
     * @param TCRSBookingType $CrsBookingType
     * @param TSBDManualType $ManualRateType
     * @param int $ID_RateCode
     * @param float $ManualRate
     * @param int $ID_ManualRateReason
     * @param int $ID_RoomType
     * @param int $ID_Accomodation
     */
    public function __construct($AccountNo, $AccountStatusType, $NumberOfGuests, \DateTime $ArrivalDate, \DateTime $DepartureDate, $ID_MarketSegment, $CrsBookingType, $ManualRateType, $ID_RateCode, $ManualRate, $ID_ManualRateReason, $ID_RoomType, $ID_Accomodation)
    {
        $this->AccountNo = $AccountNo;
        $this->AccountStatusType = $AccountStatusType;
        $this->NumberOfGuests = $NumberOfGuests;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        $this->ID_MarketSegment = $ID_MarketSegment;
        $this->CrsBookingType = $CrsBookingType;
        $this->ManualRateType = $ManualRateType;
        $this->ID_RateCode = $ID_RateCode;
        $this->ManualRate = $ManualRate;
        $this->ID_ManualRateReason = $ID_ManualRateReason;
        $this->ID_RoomType = $ID_RoomType;
        $this->ID_Accomodation = $ID_Accomodation;
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
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return TAccountStatus
     */
    public function getAccountStatusType()
    {
        return $this->AccountStatusType;
    }

    /**
     * @param TAccountStatus $AccountStatusType
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setAccountStatusType($AccountStatusType)
    {
        $this->AccountStatusType = $AccountStatusType;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfGuests()
    {
        return $this->NumberOfGuests;
    }

    /**
     * @param int $NumberOfGuests
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setNumberOfGuests($NumberOfGuests)
    {
        $this->NumberOfGuests = $NumberOfGuests;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        if ($this->ArrivalDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ArrivalDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ArrivalDate
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setArrivalDate(\DateTime $ArrivalDate)
    {
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        if ($this->DepartureDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DepartureDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DepartureDate
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getID_MarketSegment()
    {
        return $this->ID_MarketSegment;
    }

    /**
     * @param int $ID_MarketSegment
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setID_MarketSegment($ID_MarketSegment)
    {
        $this->ID_MarketSegment = $ID_MarketSegment;
        return $this;
    }

    /**
     * @return string
     */
    public function getCrsNo()
    {
        return $this->CrsNo;
    }

    /**
     * @param string $CrsNo
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setCrsNo($CrsNo)
    {
        $this->CrsNo = $CrsNo;
        return $this;
    }

    /**
     * @return TCRSBookingType
     */
    public function getCrsBookingType()
    {
        return $this->CrsBookingType;
    }

    /**
     * @param TCRSBookingType $CrsBookingType
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setCrsBookingType($CrsBookingType)
    {
        $this->CrsBookingType = $CrsBookingType;
        return $this;
    }

    /**
     * @return TSBDManualType
     */
    public function getManualRateType()
    {
        return $this->ManualRateType;
    }

    /**
     * @param TSBDManualType $ManualRateType
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setManualRateType($ManualRateType)
    {
        $this->ManualRateType = $ManualRateType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCode()
    {
        return $this->ID_RateCode;
    }

    /**
     * @param int $ID_RateCode
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getManualRate()
    {
        return $this->ManualRate;
    }

    /**
     * @param float $ManualRate
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setManualRate($ManualRate)
    {
        $this->ManualRate = $ManualRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_ManualRateReason()
    {
        return $this->ID_ManualRateReason;
    }

    /**
     * @param int $ID_ManualRateReason
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setID_ManualRateReason($ID_ManualRateReason)
    {
        $this->ID_ManualRateReason = $ID_ManualRateReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RoomType()
    {
        return $this->ID_RoomType;
    }

    /**
     * @param int $ID_RoomType
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Accomodation()
    {
        return $this->ID_Accomodation;
    }

    /**
     * @param int $ID_Accomodation
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setID_Accomodation($ID_Accomodation)
    {
        $this->ID_Accomodation = $ID_Accomodation;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getChildrenAges()
    {
        return $this->ChildrenAges;
    }

    /**
     * @param ArrayOfInt $ChildrenAges
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setChildrenAges($ChildrenAges)
    {
        $this->ChildrenAges = $ChildrenAges;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getAttributesCode()
    {
        return $this->AttributesCode;
    }

    /**
     * @param ArrayOfInt $AttributesCode
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setAttributesCode($AttributesCode)
    {
        $this->AttributesCode = $AttributesCode;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getLocalizationsCode()
    {
        return $this->LocalizationsCode;
    }

    /**
     * @param ArrayOfInt $LocalizationsCode
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setLocalizationsCode($LocalizationsCode)
    {
        $this->LocalizationsCode = $LocalizationsCode;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSpecialRequest()
    {
        return $this->SpecialRequest;
    }

    /**
     * @param ArrayOfInt $SpecialRequest
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setSpecialRequest($SpecialRequest)
    {
        $this->SpecialRequest = $SpecialRequest;
        return $this;
    }

    /**
     * @return cAccount
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param cAccount $Account
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return cProfil
     */
    public function getProfil()
    {
        return $this->Profil;
    }

    /**
     * @param cProfil $Profil
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setProfil($Profil)
    {
        $this->Profil = $Profil;
        return $this;
    }

    /**
     * @return cInfo
     */
    public function getInfo()
    {
        return $this->Info;
    }

    /**
     * @param cInfo $Info
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setInfo($Info)
    {
        $this->Info = $Info;
        return $this;
    }

    /**
     * @return cAddresses
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }

    /**
     * @param cAddresses $Addresses
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setAddresses($Addresses)
    {
        $this->Addresses = $Addresses;
        return $this;
    }

    /**
     * @return cReservationLinks
     */
    public function getLinks()
    {
        return $this->Links;
    }

    /**
     * @param cReservationLinks $Links
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setLinks($Links)
    {
        $this->Links = $Links;
        return $this;
    }

    /**
     * @return ArrayOfCElement
     */
    public function getPackageElements()
    {
        return $this->PackageElements;
    }

    /**
     * @param ArrayOfCElement $PackageElements
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setPackageElements($PackageElements)
    {
        $this->PackageElements = $PackageElements;
        return $this;
    }

    /**
     * @return ArrayOfCElement
     */
    public function getElementsALaCarte()
    {
        return $this->ElementsALaCarte;
    }

    /**
     * @param ArrayOfCElement $ElementsALaCarte
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setElementsALaCarte($ElementsALaCarte)
    {
        $this->ElementsALaCarte = $ElementsALaCarte;
        return $this;
    }

    /**
     * @return cStayValue
     */
    public function getStayValue()
    {
        return $this->StayValue;
    }

    /**
     * @param cStayValue $StayValue
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setStayValue($StayValue)
    {
        $this->StayValue = $StayValue;
        return $this;
    }

    /**
     * @return ArrayOfCRateDaily
     */
    public function getDailyRates()
    {
        return $this->DailyRates;
    }

    /**
     * @param ArrayOfCRateDaily $DailyRates
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setDailyRates($DailyRates)
    {
        $this->DailyRates = $DailyRates;
        return $this;
    }

    /**
     * @return ArrayOfCManualRateDaily
     */
    public function getDailyManualRates()
    {
        return $this->DailyManualRates;
    }

    /**
     * @param ArrayOfCManualRateDaily $DailyManualRates
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setDailyManualRates($DailyManualRates)
    {
        $this->DailyManualRates = $DailyManualRates;
        return $this;
    }

    /**
     * @return cReservationShare
     */
    public function getShare()
    {
        return $this->Share;
    }

    /**
     * @param cReservationShare $Share
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setShare($Share)
    {
        $this->Share = $Share;
        return $this;
    }

    /**
     * @return ArrayOfCPersonCountDaily
     */
    public function getDailyPersonCount()
    {
        return $this->DailyPersonCount;
    }

    /**
     * @param ArrayOfCPersonCountDaily $DailyPersonCount
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setDailyPersonCount($DailyPersonCount)
    {
        $this->DailyPersonCount = $DailyPersonCount;
        return $this;
    }

    /**
     * @return ArrayOfCServiceChargeALaCarte
     */
    public function getPackageServiceCharges()
    {
        return $this->PackageServiceCharges;
    }

    /**
     * @param ArrayOfCServiceChargeALaCarte $PackageServiceCharges
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setPackageServiceCharges($PackageServiceCharges)
    {
        $this->PackageServiceCharges = $PackageServiceCharges;
        return $this;
    }

    /**
     * @return ArrayOfCServiceChargeALaCarte
     */
    public function getServiceChargesALaCarte()
    {
        return $this->ServiceChargesALaCarte;
    }

    /**
     * @param ArrayOfCServiceChargeALaCarte $ServiceChargesALaCarte
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setServiceChargesALaCarte($ServiceChargesALaCarte)
    {
        $this->ServiceChargesALaCarte = $ServiceChargesALaCarte;
        return $this;
    }

    /**
     * @return ArrayOfCGolfItems
     */
    public function getGolfItems()
    {
        return $this->GolfItems;
    }

    /**
     * @param ArrayOfCGolfItems $GolfItems
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setGolfItems($GolfItems)
    {
        $this->GolfItems = $GolfItems;
        return $this;
    }

    /**
     * @return ArrayOfCComments
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param ArrayOfCComments $Comments
     * @return \Gueststream\PMS\IQWare\API\cReservation
     */
    public function setComments($Comments)
    {
        $this->Comments = $Comments;
        return $this;
    }
}
