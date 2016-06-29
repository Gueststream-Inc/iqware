<?php

namespace Gueststream\PMS\IQWare\API;

class OwnerReservations
{

    /**
     * @var int $ID_Guest
     */
    protected $ID_Guest = null;

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var int $RoomQty
     */
    protected $RoomQty = null;

    /**
     * @var int $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @var int $LedgerStatus
     */
    protected $LedgerStatus = null;

    /**
     * @var int $ID_Property
     */
    protected $ID_Property = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var float $TotalFolios
     */
    protected $TotalFolios = null;

    /**
     * @var string $PropertyGUID
     */
    protected $PropertyGUID = null;

    /**
     * @var string $PropertyCode
     */
    protected $PropertyCode = null;

    /**
     * @var boolean $IsGuaranteed
     */
    protected $IsGuaranteed = null;

    /**
     * @var int $BookingCondoType
     */
    protected $BookingCondoType = null;

    /**
     * @var string $RoomNo
     */
    protected $RoomNo = null;

    /**
     * @var int $ID_RoomTypeOcc
     */
    protected $ID_RoomTypeOcc = null;

    /**
     * @var int $ID_SuiteConfiguration
     */
    protected $ID_SuiteConfiguration = null;

    /**
     * @var int $HSKRoomStatusType
     */
    protected $HSKRoomStatusType = null;

    /**
     * @var int $HSKRoomInspectionType
     */
    protected $HSKRoomInspectionType = null;

    /**
     * @var boolean $IsHSKRoomOccupied
     */
    protected $IsHSKRoomOccupied = null;

    /**
     * @var int $ID_Member
     */
    protected $ID_Member = null;

    /**
     * @var int $ID_Admin
     */
    protected $ID_Admin = null;

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var \DateTime $SystemCreationDate
     */
    protected $SystemCreationDate = null;

    /**
     * @var float $StayValue
     */
    protected $StayValue = null;

    /**
     * @var float $GrossRevenue
     */
    protected $GrossRevenue = null;

    /**
     * @var boolean $IsInternalReferal
     */
    protected $IsInternalReferal = null;

    /**
     * @var int $ID_Referal
     */
    protected $ID_Referal = null;

    /**
     * @var boolean $IsRBO
     */
    protected $IsRBO = null;

    /**
     * @var string $RateCodeName
     */
    protected $RateCodeName = null;

    /**
     * @var float $GrossRevenueTotal
     */
    protected $GrossRevenueTotal = null;

    /**
     * @param int $ID_Guest
     * @param int $ID_Room
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     * @param int $RoomQty
     * @param int $AccountStatus
     * @param int $LedgerStatus
     * @param int $ID_Property
     * @param int $AccountNo
     * @param string $AccountName
     * @param float $TotalFolios
     * @param string $PropertyGUID
     * @param string $PropertyCode
     * @param boolean $IsGuaranteed
     * @param int $BookingCondoType
     * @param string $RoomNo
     * @param int $ID_RoomTypeOcc
     * @param int $ID_SuiteConfiguration
     * @param int $HSKRoomStatusType
     * @param int $HSKRoomInspectionType
     * @param boolean $IsHSKRoomOccupied
     * @param int $ID_Member
     * @param int $ID_Admin
     * @param int $ID_CondoOwner
     * @param \DateTime $SystemCreationDate
     * @param float $StayValue
     * @param float $GrossRevenue
     * @param boolean $IsInternalReferal
     * @param int $ID_Referal
     * @param boolean $IsRBO
     * @param string $RateCodeName
     * @param float $GrossRevenueTotal
     */
    public function __construct($ID_Guest, $ID_Room, \DateTime $ArrivalDate, \DateTime $DepartureDate, $RoomQty, $AccountStatus, $LedgerStatus, $ID_Property, $AccountNo, $AccountName, $TotalFolios, $PropertyGUID, $PropertyCode, $IsGuaranteed, $BookingCondoType, $RoomNo, $ID_RoomTypeOcc, $ID_SuiteConfiguration, $HSKRoomStatusType, $HSKRoomInspectionType, $IsHSKRoomOccupied, $ID_Member, $ID_Admin, $ID_CondoOwner, \DateTime $SystemCreationDate, $StayValue, $GrossRevenue, $IsInternalReferal, $ID_Referal, $IsRBO, $RateCodeName, $GrossRevenueTotal)
    {
        $this->ID_Guest = $ID_Guest;
        $this->ID_Room = $ID_Room;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        $this->RoomQty = $RoomQty;
        $this->AccountStatus = $AccountStatus;
        $this->LedgerStatus = $LedgerStatus;
        $this->ID_Property = $ID_Property;
        $this->AccountNo = $AccountNo;
        $this->AccountName = $AccountName;
        $this->TotalFolios = $TotalFolios;
        $this->PropertyGUID = $PropertyGUID;
        $this->PropertyCode = $PropertyCode;
        $this->IsGuaranteed = $IsGuaranteed;
        $this->BookingCondoType = $BookingCondoType;
        $this->RoomNo = $RoomNo;
        $this->ID_RoomTypeOcc = $ID_RoomTypeOcc;
        $this->ID_SuiteConfiguration = $ID_SuiteConfiguration;
        $this->HSKRoomStatusType = $HSKRoomStatusType;
        $this->HSKRoomInspectionType = $HSKRoomInspectionType;
        $this->IsHSKRoomOccupied = $IsHSKRoomOccupied;
        $this->ID_Member = $ID_Member;
        $this->ID_Admin = $ID_Admin;
        $this->ID_CondoOwner = $ID_CondoOwner;
        $this->SystemCreationDate = $SystemCreationDate->format(\DateTime::ATOM);
        $this->StayValue = $StayValue;
        $this->GrossRevenue = $GrossRevenue;
        $this->IsInternalReferal = $IsInternalReferal;
        $this->ID_Referal = $ID_Referal;
        $this->IsRBO = $IsRBO;
        $this->RateCodeName = $RateCodeName;
        $this->GrossRevenueTotal = $GrossRevenueTotal;
    }

    /**
     * @return int
     */
    public function getID_Guest()
    {
        return $this->ID_Guest;
    }

    /**
     * @param int $ID_Guest
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setID_Guest($ID_Guest)
    {
        $this->ID_Guest = $ID_Guest;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Room()
    {
        return $this->ID_Room;
    }

    /**
     * @param int $ID_Room
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setRoomQty($RoomQty)
    {
        $this->RoomQty = $RoomQty;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountStatus()
    {
        return $this->AccountStatus;
    }

    /**
     * @param int $AccountStatus
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setAccountStatus($AccountStatus)
    {
        $this->AccountStatus = $AccountStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getLedgerStatus()
    {
        return $this->LedgerStatus;
    }

    /**
     * @param int $LedgerStatus
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setLedgerStatus($LedgerStatus)
    {
        $this->LedgerStatus = $LedgerStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Property()
    {
        return $this->ID_Property;
    }

    /**
     * @param int $ID_Property
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setID_Property($ID_Property)
    {
        $this->ID_Property = $ID_Property;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalFolios()
    {
        return $this->TotalFolios;
    }

    /**
     * @param float $TotalFolios
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setTotalFolios($TotalFolios)
    {
        $this->TotalFolios = $TotalFolios;
        return $this;
    }

    /**
     * @return string
     */
    public function getPropertyGUID()
    {
        return $this->PropertyGUID;
    }

    /**
     * @param string $PropertyGUID
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getPropertyCode()
    {
        return $this->PropertyCode;
    }

    /**
     * @param string $PropertyCode
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setPropertyCode($PropertyCode)
    {
        $this->PropertyCode = $PropertyCode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGuaranteed()
    {
        return $this->IsGuaranteed;
    }

    /**
     * @param boolean $IsGuaranteed
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setIsGuaranteed($IsGuaranteed)
    {
        $this->IsGuaranteed = $IsGuaranteed;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setBookingCondoType($BookingCondoType)
    {
        $this->BookingCondoType = $BookingCondoType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomNo()
    {
        return $this->RoomNo;
    }

    /**
     * @param string $RoomNo
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RoomTypeOcc()
    {
        return $this->ID_RoomTypeOcc;
    }

    /**
     * @param int $ID_RoomTypeOcc
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setID_RoomTypeOcc($ID_RoomTypeOcc)
    {
        $this->ID_RoomTypeOcc = $ID_RoomTypeOcc;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_SuiteConfiguration()
    {
        return $this->ID_SuiteConfiguration;
    }

    /**
     * @param int $ID_SuiteConfiguration
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setID_SuiteConfiguration($ID_SuiteConfiguration)
    {
        $this->ID_SuiteConfiguration = $ID_SuiteConfiguration;
        return $this;
    }

    /**
     * @return int
     */
    public function getHSKRoomStatusType()
    {
        return $this->HSKRoomStatusType;
    }

    /**
     * @param int $HSKRoomStatusType
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setHSKRoomStatusType($HSKRoomStatusType)
    {
        $this->HSKRoomStatusType = $HSKRoomStatusType;
        return $this;
    }

    /**
     * @return int
     */
    public function getHSKRoomInspectionType()
    {
        return $this->HSKRoomInspectionType;
    }

    /**
     * @param int $HSKRoomInspectionType
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setHSKRoomInspectionType($HSKRoomInspectionType)
    {
        $this->HSKRoomInspectionType = $HSKRoomInspectionType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsHSKRoomOccupied()
    {
        return $this->IsHSKRoomOccupied;
    }

    /**
     * @param boolean $IsHSKRoomOccupied
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setIsHSKRoomOccupied($IsHSKRoomOccupied)
    {
        $this->IsHSKRoomOccupied = $IsHSKRoomOccupied;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setID_Member($ID_Member)
    {
        $this->ID_Member = $ID_Member;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Admin()
    {
        return $this->ID_Admin;
    }

    /**
     * @param int $ID_Admin
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setID_Admin($ID_Admin)
    {
        $this->ID_Admin = $ID_Admin;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CondoOwner()
    {
        return $this->ID_CondoOwner;
    }

    /**
     * @param int $ID_CondoOwner
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSystemCreationDate()
    {
        if ($this->SystemCreationDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->SystemCreationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $SystemCreationDate
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setSystemCreationDate(\DateTime $SystemCreationDate)
    {
        $this->SystemCreationDate = $SystemCreationDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getStayValue()
    {
        return $this->StayValue;
    }

    /**
     * @param float $StayValue
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setStayValue($StayValue)
    {
        $this->StayValue = $StayValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrossRevenue()
    {
        return $this->GrossRevenue;
    }

    /**
     * @param float $GrossRevenue
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setGrossRevenue($GrossRevenue)
    {
        $this->GrossRevenue = $GrossRevenue;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInternalReferal()
    {
        return $this->IsInternalReferal;
    }

    /**
     * @param boolean $IsInternalReferal
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setIsInternalReferal($IsInternalReferal)
    {
        $this->IsInternalReferal = $IsInternalReferal;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Referal()
    {
        return $this->ID_Referal;
    }

    /**
     * @param int $ID_Referal
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setID_Referal($ID_Referal)
    {
        $this->ID_Referal = $ID_Referal;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setIsRBO($IsRBO)
    {
        $this->IsRBO = $IsRBO;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateCodeName()
    {
        return $this->RateCodeName;
    }

    /**
     * @param string $RateCodeName
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setRateCodeName($RateCodeName)
    {
        $this->RateCodeName = $RateCodeName;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrossRevenueTotal()
    {
        return $this->GrossRevenueTotal;
    }

    /**
     * @param float $GrossRevenueTotal
     * @return \Gueststream\PMS\IQWare\API\OwnerReservations
     */
    public function setGrossRevenueTotal($GrossRevenueTotal)
    {
        $this->GrossRevenueTotal = $GrossRevenueTotal;
        return $this;
    }
}
