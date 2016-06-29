<?php

namespace Gueststream\PMS\IQWare\API;

class Reservation
{

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Company
     */
    protected $Company = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $CPZIP
     */
    protected $CPZIP = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $EMail
     */
    protected $EMail = null;

    /**
     * @var int $ID_PromoPush
     */
    protected $ID_PromoPush = null;

    /**
     * @var int $ID_PromoCode
     */
    protected $ID_PromoCode = null;

    /**
     * @var int $BookingCondoType
     */
    protected $BookingCondoType = null;

    /**
     * @var boolean $IsRBO
     */
    protected $IsRBO = null;

    /**
     * @var int $CCType
     */
    protected $CCType = null;

    /**
     * @var string $CCNo
     */
    protected $CCNo = null;

    /**
     * @var string $CCExp
     */
    protected $CCExp = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var int $RoomType
     */
    protected $RoomType = null;

    /**
     * @var int $RoomQty
     */
    protected $RoomQty = null;

    /**
     * @var int $GuestCount
     */
    protected $GuestCount = null;

    /**
     * @var ChildrenBreakDown $ChildrenBreakDown
     */
    protected $ChildrenBreakDown = null;

    /**
     * @var int $Rate
     */
    protected $Rate = null;

    /**
     * @var boolean $IsInsuranceAccepted
     */
    protected $IsInsuranceAccepted = null;

    /**
     * @var Attributes $Attributes
     */
    protected $Attributes = null;

    /**
     * @var Localizations $Localizations
     */
    protected $Localizations = null;

    /**
     * @var string $SpecialRequests
     */
    protected $SpecialRequests = null;

    /**
     * @var string $strComments
     */
    protected $strComments = null;

    /**
     * @var int $TAAccountNo
     */
    protected $TAAccountNo = null;

    /**
     * @var int $MemAccountNo
     */
    protected $MemAccountNo = null;

    /**
     * @var int $CondoOwnerId
     */
    protected $CondoOwnerId = null;

    /**
     * @var boolean $IsPaidByFOO
     */
    protected $IsPaidByFOO = null;

    /**
     * @var int $ID_Member
     */
    protected $ID_Member = null;

    /**
     * @var int $DayOfBirth
     */
    protected $DayOfBirth = null;

    /**
     * @var int $MonthOfBirth
     */
    protected $MonthOfBirth = null;

    /**
     * @var int $YearOfBirth
     */
    protected $YearOfBirth = null;

    /**
     * @var int $RoomId
     */
    protected $RoomId = null;

    /**
     * @var string $RoomKeyCode
     */
    protected $RoomKeyCode = null;

    /**
     * @var string $ELMMarketingSource
     */
    protected $ELMMarketingSource = null;

    /**
     * @var string $ELMLeadKey
     */
    protected $ELMLeadKey = null;

    /**
     * @var BookingAccountStatusEnum $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @var int $CancellationNo
     */
    protected $CancellationNo = null;

    /**
     * @var int $BusinessSource
     */
    protected $BusinessSource = null;

    /**
     * @var int $GuestType
     */
    protected $GuestType = null;

    /**
     * @var int $GeographicCode
     */
    protected $GeographicCode = null;

    /**
     * @var int $ID_ActivityToken
     */
    protected $ID_ActivityToken = null;

    /**
     * @param int $AccountNo
     * @param int $ID_PromoPush
     * @param int $ID_PromoCode
     * @param int $BookingCondoType
     * @param boolean $IsRBO
     * @param int $CCType
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     * @param int $RoomType
     * @param int $RoomQty
     * @param int $GuestCount
     * @param int $Rate
     * @param boolean $IsInsuranceAccepted
     * @param int $TAAccountNo
     * @param int $MemAccountNo
     * @param int $CondoOwnerId
     * @param boolean $IsPaidByFOO
     * @param int $ID_Member
     * @param int $DayOfBirth
     * @param int $MonthOfBirth
     * @param int $YearOfBirth
     * @param int $RoomId
     * @param BookingAccountStatusEnum $AccountStatus
     * @param int $CancellationNo
     * @param int $BusinessSource
     * @param int $GuestType
     * @param int $GeographicCode
     * @param int $ID_ActivityToken
     */
    public function __construct($AccountNo, $ID_PromoPush, $ID_PromoCode, $BookingCondoType, $IsRBO, $CCType, \DateTime $ArrivalDate, \DateTime $DepartureDate, $RoomType, $RoomQty, $GuestCount, $Rate, $IsInsuranceAccepted, $TAAccountNo, $MemAccountNo, $CondoOwnerId, $IsPaidByFOO, $ID_Member, $DayOfBirth, $MonthOfBirth, $YearOfBirth, $RoomId, $AccountStatus, $CancellationNo, $BusinessSource, $GuestType, $GeographicCode, $ID_ActivityToken)
    {
        $this->AccountNo = $AccountNo;
        $this->ID_PromoPush = $ID_PromoPush;
        $this->ID_PromoCode = $ID_PromoCode;
        $this->BookingCondoType = $BookingCondoType;
        $this->IsRBO = $IsRBO;
        $this->CCType = $CCType;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        $this->RoomType = $RoomType;
        $this->RoomQty = $RoomQty;
        $this->GuestCount = $GuestCount;
        $this->Rate = $Rate;
        $this->IsInsuranceAccepted = $IsInsuranceAccepted;
        $this->TAAccountNo = $TAAccountNo;
        $this->MemAccountNo = $MemAccountNo;
        $this->CondoOwnerId = $CondoOwnerId;
        $this->IsPaidByFOO = $IsPaidByFOO;
        $this->ID_Member = $ID_Member;
        $this->DayOfBirth = $DayOfBirth;
        $this->MonthOfBirth = $MonthOfBirth;
        $this->YearOfBirth = $YearOfBirth;
        $this->RoomId = $RoomId;
        $this->AccountStatus = $AccountStatus;
        $this->CancellationNo = $CancellationNo;
        $this->BusinessSource = $BusinessSource;
        $this->GuestType = $GuestType;
        $this->GeographicCode = $GeographicCode;
        $this->ID_ActivityToken = $ID_ActivityToken;
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
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param string $Company
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setCompany($Company)
    {
        $this->Company = $Company;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setAddress1($Address1)
    {
        $this->Address1 = $Address1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setAddress2($Address2)
    {
        $this->Address2 = $Address2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setState($State)
    {
        $this->State = $State;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCPZIP()
    {
        return $this->CPZIP;
    }

    /**
     * @param string $CPZIP
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setCPZIP($CPZIP)
    {
        $this->CPZIP = $CPZIP;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getEMail()
    {
        return $this->EMail;
    }

    /**
     * @param string $EMail
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setEMail($EMail)
    {
        $this->EMail = $EMail;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_PromoPush()
    {
        return $this->ID_PromoPush;
    }

    /**
     * @param int $ID_PromoPush
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setID_PromoPush($ID_PromoPush)
    {
        $this->ID_PromoPush = $ID_PromoPush;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_PromoCode()
    {
        return $this->ID_PromoCode;
    }

    /**
     * @param int $ID_PromoCode
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setID_PromoCode($ID_PromoCode)
    {
        $this->ID_PromoCode = $ID_PromoCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getBookingCondoType()
    {
        return $this->BookingCondoType;
    }

    /**
     * @param int $BookingCondoType
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setBookingCondoType($BookingCondoType)
    {
        $this->BookingCondoType = $BookingCondoType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRBO()
    {
        return $this->IsRBO;
    }

    /**
     * @param boolean $IsRBO
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setIsRBO($IsRBO)
    {
        $this->IsRBO = $IsRBO;
        return $this;
    }

    /**
     * @return int
     */
    public function getCCType()
    {
        return $this->CCType;
    }

    /**
     * @param int $CCType
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setCCType($CCType)
    {
        $this->CCType = $CCType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCCNo()
    {
        return $this->CCNo;
    }

    /**
     * @param string $CCNo
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setCCNo($CCNo)
    {
        $this->CCNo = $CCNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCCExp()
    {
        return $this->CCExp;
    }

    /**
     * @param string $CCExp
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setCCExp($CCExp)
    {
        $this->CCExp = $CCExp;
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
     * @return \Gueststream\PMS\IQWare\API\Reservation
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
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomType()
    {
        return $this->RoomType;
    }

    /**
     * @param int $RoomType
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setRoomType($RoomType)
    {
        $this->RoomType = $RoomType;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomQty()
    {
        return $this->RoomQty;
    }

    /**
     * @param int $RoomQty
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setRoomQty($RoomQty)
    {
        $this->RoomQty = $RoomQty;
        return $this;
    }

    /**
     * @return int
     */
    public function getGuestCount()
    {
        return $this->GuestCount;
    }

    /**
     * @param int $GuestCount
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setGuestCount($GuestCount)
    {
        $this->GuestCount = $GuestCount;
        return $this;
    }

    /**
     * @return ChildrenBreakDown
     */
    public function getChildrenBreakDown()
    {
        return $this->ChildrenBreakDown;
    }

    /**
     * @param ChildrenBreakDown $ChildrenBreakDown
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setChildrenBreakDown($ChildrenBreakDown)
    {
        $this->ChildrenBreakDown = $ChildrenBreakDown;
        return $this;
    }

    /**
     * @return int
     */
    public function getRate()
    {
        return $this->Rate;
    }

    /**
     * @param int $Rate
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setRate($Rate)
    {
        $this->Rate = $Rate;
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
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setIsInsuranceAccepted($IsInsuranceAccepted)
    {
        $this->IsInsuranceAccepted = $IsInsuranceAccepted;
        return $this;
    }

    /**
     * @return Attributes
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }

    /**
     * @param Attributes $Attributes
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setAttributes($Attributes)
    {
        $this->Attributes = $Attributes;
        return $this;
    }

    /**
     * @return Localizations
     */
    public function getLocalizations()
    {
        return $this->Localizations;
    }

    /**
     * @param Localizations $Localizations
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setLocalizations($Localizations)
    {
        $this->Localizations = $Localizations;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecialRequests()
    {
        return $this->SpecialRequests;
    }

    /**
     * @param string $SpecialRequests
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setSpecialRequests($SpecialRequests)
    {
        $this->SpecialRequests = $SpecialRequests;
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
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setStrComments($strComments)
    {
        $this->strComments = $strComments;
        return $this;
    }

    /**
     * @return int
     */
    public function getTAAccountNo()
    {
        return $this->TAAccountNo;
    }

    /**
     * @param int $TAAccountNo
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setTAAccountNo($TAAccountNo)
    {
        $this->TAAccountNo = $TAAccountNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getMemAccountNo()
    {
        return $this->MemAccountNo;
    }

    /**
     * @param int $MemAccountNo
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setMemAccountNo($MemAccountNo)
    {
        $this->MemAccountNo = $MemAccountNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getCondoOwnerId()
    {
        return $this->CondoOwnerId;
    }

    /**
     * @param int $CondoOwnerId
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setCondoOwnerId($CondoOwnerId)
    {
        $this->CondoOwnerId = $CondoOwnerId;
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
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setIsPaidByFOO($IsPaidByFOO)
    {
        $this->IsPaidByFOO = $IsPaidByFOO;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Member()
    {
        return $this->ID_Member;
    }

    /**
     * @param int $ID_Member
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setID_Member($ID_Member)
    {
        $this->ID_Member = $ID_Member;
        return $this;
    }

    /**
     * @return int
     */
    public function getDayOfBirth()
    {
        return $this->DayOfBirth;
    }

    /**
     * @param int $DayOfBirth
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setDayOfBirth($DayOfBirth)
    {
        $this->DayOfBirth = $DayOfBirth;
        return $this;
    }

    /**
     * @return int
     */
    public function getMonthOfBirth()
    {
        return $this->MonthOfBirth;
    }

    /**
     * @param int $MonthOfBirth
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setMonthOfBirth($MonthOfBirth)
    {
        $this->MonthOfBirth = $MonthOfBirth;
        return $this;
    }

    /**
     * @return int
     */
    public function getYearOfBirth()
    {
        return $this->YearOfBirth;
    }

    /**
     * @param int $YearOfBirth
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setYearOfBirth($YearOfBirth)
    {
        $this->YearOfBirth = $YearOfBirth;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomId()
    {
        return $this->RoomId;
    }

    /**
     * @param int $RoomId
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setRoomId($RoomId)
    {
        $this->RoomId = $RoomId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomKeyCode()
    {
        return $this->RoomKeyCode;
    }

    /**
     * @param string $RoomKeyCode
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setRoomKeyCode($RoomKeyCode)
    {
        $this->RoomKeyCode = $RoomKeyCode;
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
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setELMMarketingSource($ELMMarketingSource)
    {
        $this->ELMMarketingSource = $ELMMarketingSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getELMLeadKey()
    {
        return $this->ELMLeadKey;
    }

    /**
     * @param string $ELMLeadKey
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setELMLeadKey($ELMLeadKey)
    {
        $this->ELMLeadKey = $ELMLeadKey;
        return $this;
    }

    /**
     * @return BookingAccountStatusEnum
     */
    public function getAccountStatus()
    {
        return $this->AccountStatus;
    }

    /**
     * @param BookingAccountStatusEnum $AccountStatus
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setAccountStatus($AccountStatus)
    {
        $this->AccountStatus = $AccountStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getCancellationNo()
    {
        return $this->CancellationNo;
    }

    /**
     * @param int $CancellationNo
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setCancellationNo($CancellationNo)
    {
        $this->CancellationNo = $CancellationNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getBusinessSource()
    {
        return $this->BusinessSource;
    }

    /**
     * @param int $BusinessSource
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setBusinessSource($BusinessSource)
    {
        $this->BusinessSource = $BusinessSource;
        return $this;
    }

    /**
     * @return int
     */
    public function getGuestType()
    {
        return $this->GuestType;
    }

    /**
     * @param int $GuestType
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setGuestType($GuestType)
    {
        $this->GuestType = $GuestType;
        return $this;
    }

    /**
     * @return int
     */
    public function getGeographicCode()
    {
        return $this->GeographicCode;
    }

    /**
     * @param int $GeographicCode
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setGeographicCode($GeographicCode)
    {
        $this->GeographicCode = $GeographicCode;
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
     * @return \Gueststream\PMS\IQWare\API\Reservation
     */
    public function setID_ActivityToken($ID_ActivityToken)
    {
        $this->ID_ActivityToken = $ID_ActivityToken;
        return $this;
    }
}
