<?php

namespace Gueststream\PMS\IQWare\API;

class RoomSpecification
{

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var int $ID_Bedding
     */
    protected $ID_Bedding = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var string $OptionalRoomName
     */
    protected $OptionalRoomName = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $WebDescription
     */
    protected $WebDescription = null;

    /**
     * @var int $ID_Building
     */
    protected $ID_Building = null;

    /**
     * @var int $ID_AccommodationType
     */
    protected $ID_AccommodationType = null;

    /**
     * @var boolean $IsSoldByRoomNo
     */
    protected $IsSoldByRoomNo = null;

    /**
     * @var boolean $IsVirtual
     */
    protected $IsVirtual = null;

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
     * @var string $IsMailing
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
     * @var int $ID_SuiteConfiguration
     */
    protected $ID_SuiteConfiguration = null;

    /**
     * @var string $SuiteName
     */
    protected $SuiteName = null;

    /**
     * @var string $OldRoomNo
     */
    protected $OldRoomNo = null;

    /**
     * @var string $FloorNo
     */
    protected $FloorNo = null;

    /**
     * @var int $ID_Floor
     */
    protected $ID_Floor = null;

    /**
     * @var int $NbrSleeps
     */
    protected $NbrSleeps = null;

    /**
     * @var ArrayOfInt $RoomAttributeIDs
     */
    protected $RoomAttributeIDs = null;

    /**
     * @var ArrayOfInt $RoomLocationIDs
     */
    protected $RoomLocationIDs = null;

    /**
     * @var int $NbrFloors
     */
    protected $NbrFloors = null;

    /**
     * @var float $TotalBed
     */
    protected $TotalBed = null;

    /**
     * @var int $NbrMasterBeds
     */
    protected $NbrMasterBeds = null;

    /**
     * @var float $TotalBath
     */
    protected $TotalBath = null;

    /**
     * @var int $NbrDemiBaths
     */
    protected $NbrDemiBaths = null;

    /**
     * @var boolean $IsSelectChoice
     */
    protected $IsSelectChoice = null;

    /**
     * @var float $StarRating
     */
    protected $StarRating = null;

    /**
     * @var int $ID_RoomChoicePrice
     */
    protected $ID_RoomChoicePrice = null;

    /**
     * @var float $RoomLatitude
     */
    protected $RoomLatitude = null;

    /**
     * @var float $RoomLongitude
     */
    protected $RoomLongitude = null;

    /**
     * @param int $ID_Room
     * @param int $ID_Bedding
     * @param int $ID_RoomType
     * @param int $ID_Building
     * @param int $ID_AccommodationType
     * @param boolean $IsSoldByRoomNo
     * @param boolean $IsVirtual
     * @param int $ID_SuiteConfiguration
     * @param int $ID_Floor
     * @param int $NbrSleeps
     * @param int $NbrFloors
     * @param float $TotalBed
     * @param int $NbrMasterBeds
     * @param float $TotalBath
     * @param int $NbrDemiBaths
     * @param boolean $IsSelectChoice
     * @param float $StarRating
     * @param int $ID_RoomChoicePrice
     * @param float $RoomLatitude
     * @param float $RoomLongitude
     */
    public function __construct($ID_Room, $ID_Bedding, $ID_RoomType, $ID_Building, $ID_AccommodationType, $IsSoldByRoomNo, $IsVirtual, $ID_SuiteConfiguration, $ID_Floor, $NbrSleeps, $NbrFloors, $TotalBed, $NbrMasterBeds, $TotalBath, $NbrDemiBaths, $IsSelectChoice, $StarRating, $ID_RoomChoicePrice, $RoomLatitude, $RoomLongitude)
    {
        $this->ID_Room = $ID_Room;
        $this->ID_Bedding = $ID_Bedding;
        $this->ID_RoomType = $ID_RoomType;
        $this->ID_Building = $ID_Building;
        $this->ID_AccommodationType = $ID_AccommodationType;
        $this->IsSoldByRoomNo = $IsSoldByRoomNo;
        $this->IsVirtual = $IsVirtual;
        $this->ID_SuiteConfiguration = $ID_SuiteConfiguration;
        $this->ID_Floor = $ID_Floor;
        $this->NbrSleeps = $NbrSleeps;
        $this->NbrFloors = $NbrFloors;
        $this->TotalBed = $TotalBed;
        $this->NbrMasterBeds = $NbrMasterBeds;
        $this->TotalBath = $TotalBath;
        $this->NbrDemiBaths = $NbrDemiBaths;
        $this->IsSelectChoice = $IsSelectChoice;
        $this->StarRating = $StarRating;
        $this->ID_RoomChoicePrice = $ID_RoomChoicePrice;
        $this->RoomLatitude = $RoomLatitude;
        $this->RoomLongitude = $RoomLongitude;
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Bedding()
    {
        return $this->ID_Bedding;
    }

    /**
     * @param int $ID_Bedding
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setID_Bedding($ID_Bedding)
    {
        $this->ID_Bedding = $ID_Bedding;
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setOptionalRoomName($OptionalRoomName)
    {
        $this->OptionalRoomName = $OptionalRoomName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebDescription()
    {
        return $this->WebDescription;
    }

    /**
     * @param string $WebDescription
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setWebDescription($WebDescription)
    {
        $this->WebDescription = $WebDescription;
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setID_AccommodationType($ID_AccommodationType)
    {
        $this->ID_AccommodationType = $ID_AccommodationType;
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setIsVirtual($IsVirtual)
    {
        $this->IsVirtual = $IsVirtual;
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setConfirmBy($ConfirmBy)
    {
        $this->ConfirmBy = $ConfirmBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsMailing()
    {
        return $this->IsMailing;
    }

    /**
     * @param string $IsMailing
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setBillingType($BillingType)
    {
        $this->BillingType = $BillingType;
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setID_SuiteConfiguration($ID_SuiteConfiguration)
    {
        $this->ID_SuiteConfiguration = $ID_SuiteConfiguration;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuiteName()
    {
        return $this->SuiteName;
    }

    /**
     * @param string $SuiteName
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setSuiteName($SuiteName)
    {
        $this->SuiteName = $SuiteName;
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
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setOldRoomNo($OldRoomNo)
    {
        $this->OldRoomNo = $OldRoomNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getFloorNo()
    {
        return $this->FloorNo;
    }

    /**
     * @param string $FloorNo
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setFloorNo($FloorNo)
    {
        $this->FloorNo = $FloorNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Floor()
    {
        return $this->ID_Floor;
    }

    /**
     * @param int $ID_Floor
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setID_Floor($ID_Floor)
    {
        $this->ID_Floor = $ID_Floor;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbrSleeps()
    {
        return $this->NbrSleeps;
    }

    /**
     * @param int $NbrSleeps
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setNbrSleeps($NbrSleeps)
    {
        $this->NbrSleeps = $NbrSleeps;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getRoomAttributeIDs()
    {
        return $this->RoomAttributeIDs;
    }

    /**
     * @param ArrayOfInt $RoomAttributeIDs
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setRoomAttributeIDs($RoomAttributeIDs)
    {
        $this->RoomAttributeIDs = $RoomAttributeIDs;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getRoomLocationIDs()
    {
        return $this->RoomLocationIDs;
    }

    /**
     * @param ArrayOfInt $RoomLocationIDs
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setRoomLocationIDs($RoomLocationIDs)
    {
        $this->RoomLocationIDs = $RoomLocationIDs;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbrFloors()
    {
        return $this->NbrFloors;
    }

    /**
     * @param int $NbrFloors
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setNbrFloors($NbrFloors)
    {
        $this->NbrFloors = $NbrFloors;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalBed()
    {
        return $this->TotalBed;
    }

    /**
     * @param float $TotalBed
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setTotalBed($TotalBed)
    {
        $this->TotalBed = $TotalBed;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbrMasterBeds()
    {
        return $this->NbrMasterBeds;
    }

    /**
     * @param int $NbrMasterBeds
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setNbrMasterBeds($NbrMasterBeds)
    {
        $this->NbrMasterBeds = $NbrMasterBeds;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalBath()
    {
        return $this->TotalBath;
    }

    /**
     * @param float $TotalBath
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setTotalBath($TotalBath)
    {
        $this->TotalBath = $TotalBath;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbrDemiBaths()
    {
        return $this->NbrDemiBaths;
    }

    /**
     * @param int $NbrDemiBaths
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setNbrDemiBaths($NbrDemiBaths)
    {
        $this->NbrDemiBaths = $NbrDemiBaths;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSelectChoice()
    {
        return $this->IsSelectChoice;
    }

    /**
     * @param boolean $IsSelectChoice
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setIsSelectChoice($IsSelectChoice)
    {
        $this->IsSelectChoice = $IsSelectChoice;
        return $this;
    }

    /**
     * @return float
     */
    public function getStarRating()
    {
        return $this->StarRating;
    }

    /**
     * @param float $StarRating
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setStarRating($StarRating)
    {
        $this->StarRating = $StarRating;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RoomChoicePrice()
    {
        return $this->ID_RoomChoicePrice;
    }

    /**
     * @param int $ID_RoomChoicePrice
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setID_RoomChoicePrice($ID_RoomChoicePrice)
    {
        $this->ID_RoomChoicePrice = $ID_RoomChoicePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoomLatitude()
    {
        return $this->RoomLatitude;
    }

    /**
     * @param float $RoomLatitude
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setRoomLatitude($RoomLatitude)
    {
        $this->RoomLatitude = $RoomLatitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoomLongitude()
    {
        return $this->RoomLongitude;
    }

    /**
     * @param float $RoomLongitude
     * @return \Gueststream\PMS\IQWare\API\RoomSpecification
     */
    public function setRoomLongitude($RoomLongitude)
    {
        $this->RoomLongitude = $RoomLongitude;
        return $this;
    }
}
