<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomsAvailabilityForStayBackToBack
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var string $strRoomIDs
     */
    protected $strRoomIDs = null;

    /**
     * @var string $strRoomTypeIDs
     */
    protected $strRoomTypeIDs = null;

    /**
     * @var string $strRoomAttributeIDs
     */
    protected $strRoomAttributeIDs = null;

    /**
     * @var string $strRoomLocationIDs
     */
    protected $strRoomLocationIDs = null;

    /**
     * @var string $strBuildingIDs
     */
    protected $strBuildingIDs = null;

    /**
     * @var string $strBeddingIDs
     */
    protected $strBeddingIDs = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var string $strAttributeGroupings
     */
    protected $strAttributeGroupings = null;

    /**
     * @var string $strLocationsGroupings
     */
    protected $strLocationsGroupings = null;

    /**
     * @var IAB2BMode $BackToBackMode
     */
    protected $BackToBackMode = null;

    /**
     * @param int $guid
     * @param string $strRoomIDs
     * @param string $strRoomTypeIDs
     * @param string $strRoomAttributeIDs
     * @param string $strRoomLocationIDs
     * @param string $strBuildingIDs
     * @param string $strBeddingIDs
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     * @param string $strAttributeGroupings
     * @param string $strLocationsGroupings
     * @param IAB2BMode $BackToBackMode
     */
    public function __construct($guid, $strRoomIDs, $strRoomTypeIDs, $strRoomAttributeIDs, $strRoomLocationIDs, $strBuildingIDs, $strBeddingIDs, \DateTime $ArrivalDate, \DateTime $DepartureDate, $strAttributeGroupings, $strLocationsGroupings, $BackToBackMode)
    {
        $this->guid = $guid;
        $this->strRoomIDs = $strRoomIDs;
        $this->strRoomTypeIDs = $strRoomTypeIDs;
        $this->strRoomAttributeIDs = $strRoomAttributeIDs;
        $this->strRoomLocationIDs = $strRoomLocationIDs;
        $this->strBuildingIDs = $strBuildingIDs;
        $this->strBeddingIDs = $strBeddingIDs;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        $this->strAttributeGroupings = $strAttributeGroupings;
        $this->strLocationsGroupings = $strLocationsGroupings;
        $this->BackToBackMode = $BackToBackMode;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayBackToBack
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRoomIDs()
    {
        return $this->strRoomIDs;
    }

    /**
     * @param string $strRoomIDs
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayBackToBack
     */
    public function setStrRoomIDs($strRoomIDs)
    {
        $this->strRoomIDs = $strRoomIDs;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRoomTypeIDs()
    {
        return $this->strRoomTypeIDs;
    }

    /**
     * @param string $strRoomTypeIDs
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayBackToBack
     */
    public function setStrRoomTypeIDs($strRoomTypeIDs)
    {
        $this->strRoomTypeIDs = $strRoomTypeIDs;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRoomAttributeIDs()
    {
        return $this->strRoomAttributeIDs;
    }

    /**
     * @param string $strRoomAttributeIDs
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayBackToBack
     */
    public function setStrRoomAttributeIDs($strRoomAttributeIDs)
    {
        $this->strRoomAttributeIDs = $strRoomAttributeIDs;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRoomLocationIDs()
    {
        return $this->strRoomLocationIDs;
    }

    /**
     * @param string $strRoomLocationIDs
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayBackToBack
     */
    public function setStrRoomLocationIDs($strRoomLocationIDs)
    {
        $this->strRoomLocationIDs = $strRoomLocationIDs;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrBuildingIDs()
    {
        return $this->strBuildingIDs;
    }

    /**
     * @param string $strBuildingIDs
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayBackToBack
     */
    public function setStrBuildingIDs($strBuildingIDs)
    {
        $this->strBuildingIDs = $strBuildingIDs;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrBeddingIDs()
    {
        return $this->strBeddingIDs;
    }

    /**
     * @param string $strBeddingIDs
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayBackToBack
     */
    public function setStrBeddingIDs($strBeddingIDs)
    {
        $this->strBeddingIDs = $strBeddingIDs;
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
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayBackToBack
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getStrAttributeGroupings()
    {
        return $this->strAttributeGroupings;
    }

    /**
     * @param string $strAttributeGroupings
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayBackToBack
     */
    public function setStrAttributeGroupings($strAttributeGroupings)
    {
        $this->strAttributeGroupings = $strAttributeGroupings;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrLocationsGroupings()
    {
        return $this->strLocationsGroupings;
    }

    /**
     * @param string $strLocationsGroupings
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayBackToBack
     */
    public function setStrLocationsGroupings($strLocationsGroupings)
    {
        $this->strLocationsGroupings = $strLocationsGroupings;
        return $this;
    }

    /**
     * @return IAB2BMode
     */
    public function getBackToBackMode()
    {
        return $this->BackToBackMode;
    }

    /**
     * @param IAB2BMode $BackToBackMode
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayBackToBack
     */
    public function setBackToBackMode($BackToBackMode)
    {
        $this->BackToBackMode = $BackToBackMode;
        return $this;
    }
}
