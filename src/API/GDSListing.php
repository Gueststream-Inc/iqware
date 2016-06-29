<?php

namespace Gueststream\PMS\IQWare\API;

class GDSListing
{

    /**
     * @var int $ListingType
     */
    protected $ListingType = null;

    /**
     * @var string $ListingNo
     */
    protected $ListingNo = null;

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var string $RoomName
     */
    protected $RoomName = null;

    /**
     * @var int $ID_Building
     */
    protected $ID_Building = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var int $ID_Bedding
     */
    protected $ID_Bedding = null;

    /**
     * @var int $ID_AccommodationType
     */
    protected $ID_AccommodationType = null;

    /**
     * @param int $ListingType
     * @param int $ID_Room
     * @param int $ID_Building
     * @param int $ID_RoomType
     * @param int $ID_Bedding
     * @param int $ID_AccommodationType
     */
    public function __construct($ListingType, $ID_Room, $ID_Building, $ID_RoomType, $ID_Bedding, $ID_AccommodationType)
    {
        $this->ListingType = $ListingType;
        $this->ID_Room = $ID_Room;
        $this->ID_Building = $ID_Building;
        $this->ID_RoomType = $ID_RoomType;
        $this->ID_Bedding = $ID_Bedding;
        $this->ID_AccommodationType = $ID_AccommodationType;
    }

    /**
     * @return int
     */
    public function getListingType()
    {
        return $this->ListingType;
    }

    /**
     * @param int $ListingType
     * @return \Gueststream\PMS\IQWare\API\GDSListing
     */
    public function setListingType($ListingType)
    {
        $this->ListingType = $ListingType;
        return $this;
    }

    /**
     * @return string
     */
    public function getListingNo()
    {
        return $this->ListingNo;
    }

    /**
     * @param string $ListingNo
     * @return \Gueststream\PMS\IQWare\API\GDSListing
     */
    public function setListingNo($ListingNo)
    {
        $this->ListingNo = $ListingNo;
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
     * @return \Gueststream\PMS\IQWare\API\GDSListing
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomName()
    {
        return $this->RoomName;
    }

    /**
     * @param string $RoomName
     * @return \Gueststream\PMS\IQWare\API\GDSListing
     */
    public function setRoomName($RoomName)
    {
        $this->RoomName = $RoomName;
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
     * @return \Gueststream\PMS\IQWare\API\GDSListing
     */
    public function setID_Building($ID_Building)
    {
        $this->ID_Building = $ID_Building;
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
     * @return \Gueststream\PMS\IQWare\API\GDSListing
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
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
     * @return \Gueststream\PMS\IQWare\API\GDSListing
     */
    public function setID_Bedding($ID_Bedding)
    {
        $this->ID_Bedding = $ID_Bedding;
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
     * @return \Gueststream\PMS\IQWare\API\GDSListing
     */
    public function setID_AccommodationType($ID_AccommodationType)
    {
        $this->ID_AccommodationType = $ID_AccommodationType;
        return $this;
    }
}
