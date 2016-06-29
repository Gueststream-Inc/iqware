<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getRateStayValueWebRes
{

    /**
     * @var int $intRateCodeID
     */
    protected $intRateCodeID = null;

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
     * @var int $intRoomTypeID
     */
    protected $intRoomTypeID = null;

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
     * @var boolean $bGenerateActivities
     */
    protected $bGenerateActivities = null;

    /**
     * @var string $strActivityStructure
     */
    protected $strActivityStructure = null;

    /**
     * @var dstElements $dstElements
     */
    protected $dstElements = null;

    /**
     * @var int $intRoomQty
     */
    protected $intRoomQty = null;

    /**
     * @param int $intRateCodeID
     * @param int $intGUID
     * @param \DateTime $dtArrivalDate
     * @param \DateTime $dtDepartureDate
     * @param int $intGuestCount
     * @param int $intRoomTypeID
     * @param string $strISOLanguage
     * @param string $strChildren
     * @param string $strAttributes
     * @param string $strLocations
     * @param boolean $bGenerateActivities
     * @param string $strActivityStructure
     * @param dstElements $dstElements
     * @param int $intRoomQty
     */
    public function __construct($intRateCodeID, $intGUID, \DateTime $dtArrivalDate, \DateTime $dtDepartureDate, $intGuestCount, $intRoomTypeID, $strISOLanguage, $strChildren, $strAttributes, $strLocations, $bGenerateActivities, $strActivityStructure, $dstElements, $intRoomQty)
    {
        $this->intRateCodeID = $intRateCodeID;
        $this->intGUID = $intGUID;
        $this->dtArrivalDate = $dtArrivalDate->format(\DateTime::ATOM);
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        $this->intGuestCount = $intGuestCount;
        $this->intRoomTypeID = $intRoomTypeID;
        $this->strISOLanguage = $strISOLanguage;
        $this->strChildren = $strChildren;
        $this->strAttributes = $strAttributes;
        $this->strLocations = $strLocations;
        $this->bGenerateActivities = $bGenerateActivities;
        $this->strActivityStructure = $strActivityStructure;
        $this->dstElements = $dstElements;
        $this->intRoomQty = $intRoomQty;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
     */
    public function setIntRateCodeID($intRateCodeID)
    {
        $this->intRateCodeID = $intRateCodeID;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
     */
    public function setIntGuestCount($intGuestCount)
    {
        $this->intGuestCount = $intGuestCount;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
     */
    public function setIntRoomTypeID($intRoomTypeID)
    {
        $this->intRoomTypeID = $intRoomTypeID;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
     */
    public function setStrLocations($strLocations)
    {
        $this->strLocations = $strLocations;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBGenerateActivities()
    {
        return $this->bGenerateActivities;
    }

    /**
     * @param boolean $bGenerateActivities
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
     */
    public function setBGenerateActivities($bGenerateActivities)
    {
        $this->bGenerateActivities = $bGenerateActivities;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
     */
    public function setStrActivityStructure($strActivityStructure)
    {
        $this->strActivityStructure = $strActivityStructure;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
     */
    public function setDstElements($dstElements)
    {
        $this->dstElements = $dstElements;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebRes
     */
    public function setIntRoomQty($intRoomQty)
    {
        $this->intRoomQty = $intRoomQty;
        return $this;
    }
}
