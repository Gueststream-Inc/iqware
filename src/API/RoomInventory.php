<?php

namespace Gueststream\PMS\IQWare\API;

class RoomInventory
{

    /**
     * @var int $RoomId
     */
    protected $RoomId = null;

    /**
     * @var float $Ranking
     */
    protected $Ranking = null;

    /**
     * @var int $Grading
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
     * @var int $RoomTypeId
     */
    protected $RoomTypeId = null;

    /**
     * @var int $BeddingId
     */
    protected $BeddingId = null;

    /**
     * @var string $RoomNo
     */
    protected $RoomNo = null;

    /**
     * @var int $BuildingId
     */
    protected $BuildingId = null;

    /**
     * @var anonymous724 $AttributesIds
     */
    protected $AttributesIds = null;

    /**
     * @var anonymous725 $LocationsIds
     */
    protected $LocationsIds = null;

    /**
     * @var int $AccommodationId
     */
    protected $AccommodationId = null;

    /**
     * @param int $RoomId
     * @param float $Ranking
     * @param int $Grading
     * @param string $OldRoomNo
     * @param string $OptionalRoomName
     * @param int $RoomTypeId
     * @param int $BeddingId
     * @param string $RoomNo
     * @param int $BuildingId
     * @param anonymous724 $AttributesIds
     * @param anonymous725 $LocationsIds
     * @param int $AccommodationId
     */
    public function __construct($RoomId, $Ranking, $Grading, $OldRoomNo, $OptionalRoomName, $RoomTypeId, $BeddingId, $RoomNo, $BuildingId, $AttributesIds, $LocationsIds, $AccommodationId)
    {
        $this->RoomId = $RoomId;
        $this->Ranking = $Ranking;
        $this->Grading = $Grading;
        $this->OldRoomNo = $OldRoomNo;
        $this->OptionalRoomName = $OptionalRoomName;
        $this->RoomTypeId = $RoomTypeId;
        $this->BeddingId = $BeddingId;
        $this->RoomNo = $RoomNo;
        $this->BuildingId = $BuildingId;
        $this->AttributesIds = $AttributesIds;
        $this->LocationsIds = $LocationsIds;
        $this->AccommodationId = $AccommodationId;
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
     * @return \Gueststream\PMS\IQWare\API\RoomInventory
     */
    public function setRoomId($RoomId)
    {
        $this->RoomId = $RoomId;
        return $this;
    }

    /**
     * @return float
     */
    public function getRanking()
    {
        return $this->Ranking;
    }

    /**
     * @param float $Ranking
     * @return \Gueststream\PMS\IQWare\API\RoomInventory
     */
    public function setRanking($Ranking)
    {
        $this->Ranking = $Ranking;
        return $this;
    }

    /**
     * @return int
     */
    public function getGrading()
    {
        return $this->Grading;
    }

    /**
     * @param int $Grading
     * @return \Gueststream\PMS\IQWare\API\RoomInventory
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
     * @return \Gueststream\PMS\IQWare\API\RoomInventory
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
     * @return \Gueststream\PMS\IQWare\API\RoomInventory
     */
    public function setOptionalRoomName($OptionalRoomName)
    {
        $this->OptionalRoomName = $OptionalRoomName;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomTypeId()
    {
        return $this->RoomTypeId;
    }

    /**
     * @param int $RoomTypeId
     * @return \Gueststream\PMS\IQWare\API\RoomInventory
     */
    public function setRoomTypeId($RoomTypeId)
    {
        $this->RoomTypeId = $RoomTypeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBeddingId()
    {
        return $this->BeddingId;
    }

    /**
     * @param int $BeddingId
     * @return \Gueststream\PMS\IQWare\API\RoomInventory
     */
    public function setBeddingId($BeddingId)
    {
        $this->BeddingId = $BeddingId;
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
     * @return \Gueststream\PMS\IQWare\API\RoomInventory
     */
    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getBuildingId()
    {
        return $this->BuildingId;
    }

    /**
     * @param int $BuildingId
     * @return \Gueststream\PMS\IQWare\API\RoomInventory
     */
    public function setBuildingId($BuildingId)
    {
        $this->BuildingId = $BuildingId;
        return $this;
    }

    /**
     * @return anonymous724
     */
    public function getAttributesIds()
    {
        return $this->AttributesIds;
    }

    /**
     * @param anonymous724 $AttributesIds
     * @return \Gueststream\PMS\IQWare\API\RoomInventory
     */
    public function setAttributesIds($AttributesIds)
    {
        $this->AttributesIds = $AttributesIds;
        return $this;
    }

    /**
     * @return anonymous725
     */
    public function getLocationsIds()
    {
        return $this->LocationsIds;
    }

    /**
     * @param anonymous725 $LocationsIds
     * @return \Gueststream\PMS\IQWare\API\RoomInventory
     */
    public function setLocationsIds($LocationsIds)
    {
        $this->LocationsIds = $LocationsIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccommodationId()
    {
        return $this->AccommodationId;
    }

    /**
     * @param int $AccommodationId
     * @return \Gueststream\PMS\IQWare\API\RoomInventory
     */
    public function setAccommodationId($AccommodationId)
    {
        $this->AccommodationId = $AccommodationId;
        return $this;
    }
}
