<?php

namespace Gueststream\PMS\IQWare\API;

class RoomAvailabilityForStay
{

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var int $ID_RoomTypeSuite
     */
    protected $ID_RoomTypeSuite = null;

    /**
     * @var int $ID_Building
     */
    protected $ID_Building = null;

    /**
     * @var int $ID_AccommodationType
     */
    protected $ID_AccommodationType = null;

    /**
     * @var string $RoomNo
     */
    protected $RoomNo = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $WebSiteURL
     */
    protected $WebSiteURL = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $ConfirmBy
     */
    protected $ConfirmBy = null;

    /**
     * @var boolean $IsMailing
     */
    protected $IsMailing = null;

    /**
     * @var string $ContactType
     */
    protected $ContactType = null;

    /**
     * @var string $OtherCieName
     */
    protected $OtherCieName = null;

    /**
     * @var string $BillingType
     */
    protected $BillingType = null;

    /**
     * @var boolean $IsSoldByRoomNo
     */
    protected $IsSoldByRoomNo = null;

    /**
     * @var boolean $IsVirtual
     */
    protected $IsVirtual = null;

    /**
     * @var float $RankingByRevenue
     */
    protected $RankingByRevenue = null;

    /**
     * @var float $AssignPriority
     */
    protected $AssignPriority = null;

    /**
     * @var float $Grading
     */
    protected $Grading = null;

    /**
     * @var string $OldRoomNo
     */
    protected $OldRoomNo = null;

    /**
     * @var string $OptionalRoomName
     */
    protected $OptionalRoomName = null;

    /**
     * @var string $HousekeepingRoomStatus
     */
    protected $HousekeepingRoomStatus = null;

    /**
     * @var boolean $HousekeepingIsClosed
     */
    protected $HousekeepingIsClosed = null;

    /**
     * @var boolean $IsSuite
     */
    protected $IsSuite = null;

    /**
     * @param int $ID_Room
     * @param int $ID_RoomType
     * @param int $ID_RoomTypeSuite
     * @param int $ID_Building
     * @param int $ID_AccommodationType
     * @param boolean $IsMailing
     * @param boolean $IsSoldByRoomNo
     * @param boolean $IsVirtual
     * @param float $RankingByRevenue
     * @param float $AssignPriority
     * @param float $Grading
     * @param boolean $HousekeepingIsClosed
     * @param boolean $IsSuite
     */
    public function __construct($ID_Room, $ID_RoomType, $ID_RoomTypeSuite, $ID_Building, $ID_AccommodationType, $IsMailing, $IsSoldByRoomNo, $IsVirtual, $RankingByRevenue, $AssignPriority, $Grading, $HousekeepingIsClosed, $IsSuite)
    {
        $this->ID_Room = $ID_Room;
        $this->ID_RoomType = $ID_RoomType;
        $this->ID_RoomTypeSuite = $ID_RoomTypeSuite;
        $this->ID_Building = $ID_Building;
        $this->ID_AccommodationType = $ID_AccommodationType;
        $this->IsMailing = $IsMailing;
        $this->IsSoldByRoomNo = $IsSoldByRoomNo;
        $this->IsVirtual = $IsVirtual;
        $this->RankingByRevenue = $RankingByRevenue;
        $this->AssignPriority = $AssignPriority;
        $this->Grading = $Grading;
        $this->HousekeepingIsClosed = $HousekeepingIsClosed;
        $this->IsSuite = $IsSuite;
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
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
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
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RoomTypeSuite()
    {
        return $this->ID_RoomTypeSuite;
    }

    /**
     * @param int $ID_RoomTypeSuite
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setID_RoomTypeSuite($ID_RoomTypeSuite)
    {
        $this->ID_RoomTypeSuite = $ID_RoomTypeSuite;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Building()
    {
        return $this->ID_Building;
    }

    /**
     * @param int $ID_Building
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setID_Building($ID_Building)
    {
        $this->ID_Building = $ID_Building;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_AccommodationType()
    {
        return $this->ID_AccommodationType;
    }

    /**
     * @param int $ID_AccommodationType
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setID_AccommodationType($ID_AccommodationType)
    {
        $this->ID_AccommodationType = $ID_AccommodationType;
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
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
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
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setAddress1($Address1)
    {
        $this->Address1 = $Address1;
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
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
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
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
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
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
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
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setState($State)
    {
        $this->State = $State;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
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
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;
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
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setAddress2($Address2)
    {
        $this->Address2 = $Address2;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebSiteURL()
    {
        return $this->WebSiteURL;
    }

    /**
     * @param string $WebSiteURL
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setWebSiteURL($WebSiteURL)
    {
        $this->WebSiteURL = $WebSiteURL;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getConfirmBy()
    {
        return $this->ConfirmBy;
    }

    /**
     * @param string $ConfirmBy
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setConfirmBy($ConfirmBy)
    {
        $this->ConfirmBy = $ConfirmBy;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMailing()
    {
        return $this->IsMailing;
    }

    /**
     * @param boolean $IsMailing
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setIsMailing($IsMailing)
    {
        $this->IsMailing = $IsMailing;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactType()
    {
        return $this->ContactType;
    }

    /**
     * @param string $ContactType
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setContactType($ContactType)
    {
        $this->ContactType = $ContactType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherCieName()
    {
        return $this->OtherCieName;
    }

    /**
     * @param string $OtherCieName
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setOtherCieName($OtherCieName)
    {
        $this->OtherCieName = $OtherCieName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingType()
    {
        return $this->BillingType;
    }

    /**
     * @param string $BillingType
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setBillingType($BillingType)
    {
        $this->BillingType = $BillingType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSoldByRoomNo()
    {
        return $this->IsSoldByRoomNo;
    }

    /**
     * @param boolean $IsSoldByRoomNo
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setIsSoldByRoomNo($IsSoldByRoomNo)
    {
        $this->IsSoldByRoomNo = $IsSoldByRoomNo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVirtual()
    {
        return $this->IsVirtual;
    }

    /**
     * @param boolean $IsVirtual
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setIsVirtual($IsVirtual)
    {
        $this->IsVirtual = $IsVirtual;
        return $this;
    }

    /**
     * @return float
     */
    public function getRankingByRevenue()
    {
        return $this->RankingByRevenue;
    }

    /**
     * @param float $RankingByRevenue
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setRankingByRevenue($RankingByRevenue)
    {
        $this->RankingByRevenue = $RankingByRevenue;
        return $this;
    }

    /**
     * @return float
     */
    public function getAssignPriority()
    {
        return $this->AssignPriority;
    }

    /**
     * @param float $AssignPriority
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setAssignPriority($AssignPriority)
    {
        $this->AssignPriority = $AssignPriority;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrading()
    {
        return $this->Grading;
    }

    /**
     * @param float $Grading
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setGrading($Grading)
    {
        $this->Grading = $Grading;
        return $this;
    }

    /**
     * @return string
     */
    public function getOldRoomNo()
    {
        return $this->OldRoomNo;
    }

    /**
     * @param string $OldRoomNo
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setOldRoomNo($OldRoomNo)
    {
        $this->OldRoomNo = $OldRoomNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptionalRoomName()
    {
        return $this->OptionalRoomName;
    }

    /**
     * @param string $OptionalRoomName
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setOptionalRoomName($OptionalRoomName)
    {
        $this->OptionalRoomName = $OptionalRoomName;
        return $this;
    }

    /**
     * @return string
     */
    public function getHousekeepingRoomStatus()
    {
        return $this->HousekeepingRoomStatus;
    }

    /**
     * @param string $HousekeepingRoomStatus
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setHousekeepingRoomStatus($HousekeepingRoomStatus)
    {
        $this->HousekeepingRoomStatus = $HousekeepingRoomStatus;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHousekeepingIsClosed()
    {
        return $this->HousekeepingIsClosed;
    }

    /**
     * @param boolean $HousekeepingIsClosed
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setHousekeepingIsClosed($HousekeepingIsClosed)
    {
        $this->HousekeepingIsClosed = $HousekeepingIsClosed;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSuite()
    {
        return $this->IsSuite;
    }

    /**
     * @param boolean $IsSuite
     * @return \Gueststream\PMS\IQWare\API\RoomAvailabilityForStay
     */
    public function setIsSuite($IsSuite)
    {
        $this->IsSuite = $IsSuite;
        return $this;
    }
}
