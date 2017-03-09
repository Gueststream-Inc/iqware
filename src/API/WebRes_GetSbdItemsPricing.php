<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetSbdItemsPricing
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var string $strISOLanguage
     */
    protected $strISOLanguage = null;

    /**
     * @var int $intRoomType
     */
    protected $intRoomType = null;

    /**
     * @var int $intRateID
     */
    protected $intRateID = null;

    /**
     * @var int $intGuestCount
     */
    protected $intGuestCount = null;

    /**
     * @var string $strChildren
     */
    protected $strChildren = null;

    /**
     * @var \DateTime $dArrDate
     */
    protected $dArrDate = null;

    /**
     * @var \DateTime $dDepDate
     */
    protected $dDepDate = null;

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
     * @param int $intGUID
     * @param string $strISOLanguage
     * @param int $intRoomType
     * @param int $intRateID
     * @param int $intGuestCount
     * @param string $strChildren
     * @param \DateTime $dArrDate
     * @param \DateTime $dDepDate
     * @param string $strAttributes
     * @param string $strLocations
     * @param int $intRoomQty
     */
    public function __construct($intGUID, $strISOLanguage, $intRoomType, $intRateID, $intGuestCount, $strChildren, \DateTime $dArrDate, \DateTime $dDepDate, $strAttributes, $strLocations, $intRoomQty)
    {
        $this->intGUID = $intGUID;
        $this->strISOLanguage = $strISOLanguage;
        $this->intRoomType = $intRoomType;
        $this->intRateID = $intRateID;
        $this->intGuestCount = $intGuestCount;
        $this->strChildren = $strChildren;
        $this->dArrDate = $dArrDate->format('Y-m-d');
        $this->dDepDate = $dDepDate->format('Y-m-d');
        $this->strAttributes = $strAttributes;
        $this->strLocations = $strLocations;
        $this->intRoomQty = $intRoomQty;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSbdItemsPricing
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSbdItemsPricing
     */
    public function setStrISOLanguage($strISOLanguage)
    {
        $this->strISOLanguage = $strISOLanguage;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRoomType()
    {
        return $this->intRoomType;
    }

    /**
     * @param int $intRoomType
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSbdItemsPricing
     */
    public function setIntRoomType($intRoomType)
    {
        $this->intRoomType = $intRoomType;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRateID()
    {
        return $this->intRateID;
    }

    /**
     * @param int $intRateID
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSbdItemsPricing
     */
    public function setIntRateID($intRateID)
    {
        $this->intRateID = $intRateID;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSbdItemsPricing
     */
    public function setIntGuestCount($intGuestCount)
    {
        $this->intGuestCount = $intGuestCount;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSbdItemsPricing
     */
    public function setStrChildren($strChildren)
    {
        $this->strChildren = $strChildren;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDArrDate()
    {
        if ($this->dArrDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dArrDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dArrDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSbdItemsPricing
     */
    public function setDArrDate(\DateTime $dArrDate)
    {
        $this->dArrDate = $dArrDate->format('Y-m-d');
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDDepDate()
    {
        if ($this->dDepDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dDepDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dDepDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSbdItemsPricing
     */
    public function setDDepDate(\DateTime $dDepDate)
    {
        $this->dDepDate = $dDepDate->format('Y-m-d');
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSbdItemsPricing
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSbdItemsPricing
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSbdItemsPricing
     */
    public function setIntRoomQty($intRoomQty)
    {
        $this->intRoomQty = $intRoomQty;
        return $this;
    }
}
