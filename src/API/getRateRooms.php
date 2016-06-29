<?php

namespace Gueststream\PMS\IQWare\API;

class getRateRooms
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

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
     * @var int $intRateCodeID
     */
    protected $intRateCodeID = null;

    /**
     * @var string $strISOLanguage
     */
    protected $strISOLanguage = null;

    /**
     * @var string $strChildren
     */
    protected $strChildren = null;

    /**
     * @var string $strAttributes
     */
    protected $strAttributes = null;

    /**
     * @var string $strLocations
     */
    protected $strLocations = null;

    /**
     * @var int $intRoomQty
     */
    protected $intRoomQty = null;

    /**
     * @var string $strAttributeGroupings
     */
    protected $strAttributeGroupings = null;

    /**
     * @var string $strLocationsGroupings
     */
    protected $strLocationsGroupings = null;

    /**
     * @param int $intGUID
     * @param \DateTime $dtArrivalDate
     * @param \DateTime $dtDepartureDate
     * @param int $intGuestCount
     * @param int $intRateCodeID
     * @param string $strISOLanguage
     * @param string $strChildren
     * @param string $strAttributes
     * @param string $strLocations
     * @param int $intRoomQty
     * @param string $strAttributeGroupings
     * @param string $strLocationsGroupings
     */
    public function __construct($intGUID, \DateTime $dtArrivalDate, \DateTime $dtDepartureDate, $intGuestCount, $intRateCodeID, $strISOLanguage, $strChildren, $strAttributes, $strLocations, $intRoomQty, $strAttributeGroupings, $strLocationsGroupings)
    {
        $this->intGUID = $intGUID;
        $this->dtArrivalDate = $dtArrivalDate->format(\DateTime::ATOM);
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        $this->intGuestCount = $intGuestCount;
        $this->intRateCodeID = $intRateCodeID;
        $this->strISOLanguage = $strISOLanguage;
        $this->strChildren = $strChildren;
        $this->strAttributes = $strAttributes;
        $this->strLocations = $strLocations;
        $this->intRoomQty = $intRoomQty;
        $this->strAttributeGroupings = $strAttributeGroupings;
        $this->strLocationsGroupings = $strLocationsGroupings;
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
     * @return \Gueststream\PMS\IQWare\API\getRateRooms
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
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
     * @return \Gueststream\PMS\IQWare\API\getRateRooms
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
     * @return \Gueststream\PMS\IQWare\API\getRateRooms
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
     * @return \Gueststream\PMS\IQWare\API\getRateRooms
     */
    public function setIntGuestCount($intGuestCount)
    {
        $this->intGuestCount = $intGuestCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRateCodeID()
    {
        return $this->intRateCodeID;
    }

    /**
     * @param int $intRateCodeID
     * @return \Gueststream\PMS\IQWare\API\getRateRooms
     */
    public function setIntRateCodeID($intRateCodeID)
    {
        $this->intRateCodeID = $intRateCodeID;
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
     * @return \Gueststream\PMS\IQWare\API\getRateRooms
     */
    public function setStrISOLanguage($strISOLanguage)
    {
        $this->strISOLanguage = $strISOLanguage;
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
     * @return \Gueststream\PMS\IQWare\API\getRateRooms
     */
    public function setStrChildren($strChildren)
    {
        $this->strChildren = $strChildren;
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
     * @return \Gueststream\PMS\IQWare\API\getRateRooms
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
     * @return \Gueststream\PMS\IQWare\API\getRateRooms
     */
    public function setStrLocations($strLocations)
    {
        $this->strLocations = $strLocations;
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
     * @return \Gueststream\PMS\IQWare\API\getRateRooms
     */
    public function setIntRoomQty($intRoomQty)
    {
        $this->intRoomQty = $intRoomQty;
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
     * @return \Gueststream\PMS\IQWare\API\getRateRooms
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
     * @return \Gueststream\PMS\IQWare\API\getRateRooms
     */
    public function setStrLocationsGroupings($strLocationsGroupings)
    {
        $this->strLocationsGroupings = $strLocationsGroupings;
        return $this;
    }
}
