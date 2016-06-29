<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_FillPrices
{

    /**
     * @var dstRatesAndRooms $dstRatesAndRooms
     */
    protected $dstRatesAndRooms = null;

    /**
     * @var int $intRate
     */
    protected $intRate = null;

    /**
     * @var int $intRoomType
     */
    protected $intRoomType = null;

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
     * @var int $intRateSpecial
     */
    protected $intRateSpecial = null;

    /**
     * @var int $GroupId
     */
    protected $GroupId = null;

    /**
     * @param dstRatesAndRooms $dstRatesAndRooms
     * @param int $intRate
     * @param int $intRoomType
     * @param int $intGUID
     * @param \DateTime $dtArrivalDate
     * @param \DateTime $dtDepartureDate
     * @param int $intGuestCount
     * @param string $strISOLanguage
     * @param string $strChildren
     * @param string $strAttributes
     * @param string $strLocations
     * @param int $intRoomQty
     * @param int $intRateSpecial
     * @param int $GroupId
     */
    public function __construct($dstRatesAndRooms, $intRate, $intRoomType, $intGUID, \DateTime $dtArrivalDate, \DateTime $dtDepartureDate, $intGuestCount, $strISOLanguage, $strChildren, $strAttributes, $strLocations, $intRoomQty, $intRateSpecial, $GroupId)
    {
        $this->dstRatesAndRooms = $dstRatesAndRooms;
        $this->intRate = $intRate;
        $this->intRoomType = $intRoomType;
        $this->intGUID = $intGUID;
        $this->dtArrivalDate = $dtArrivalDate->format(\DateTime::ATOM);
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        $this->intGuestCount = $intGuestCount;
        $this->strISOLanguage = $strISOLanguage;
        $this->strChildren = $strChildren;
        $this->strAttributes = $strAttributes;
        $this->strLocations = $strLocations;
        $this->intRoomQty = $intRoomQty;
        $this->intRateSpecial = $intRateSpecial;
        $this->GroupId = $GroupId;
    }

    /**
     * @return dstRatesAndRooms
     */
    public function getDstRatesAndRooms()
    {
        return $this->dstRatesAndRooms;
    }

    /**
     * @param dstRatesAndRooms $dstRatesAndRooms
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
     */
    public function setDstRatesAndRooms($dstRatesAndRooms)
    {
        $this->dstRatesAndRooms = $dstRatesAndRooms;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRate()
    {
        return $this->intRate;
    }

    /**
     * @param int $intRate
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
     */
    public function setIntRate($intRate)
    {
        $this->intRate = $intRate;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
     */
    public function setIntRoomType($intRoomType)
    {
        $this->intRoomType = $intRoomType;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
     */
    public function setIntGuestCount($intGuestCount)
    {
        $this->intGuestCount = $intGuestCount;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
     */
    public function setIntRoomQty($intRoomQty)
    {
        $this->intRoomQty = $intRoomQty;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRateSpecial()
    {
        return $this->intRateSpecial;
    }

    /**
     * @param int $intRateSpecial
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
     */
    public function setIntRateSpecial($intRateSpecial)
    {
        $this->intRateSpecial = $intRateSpecial;
        return $this;
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
        return $this->GroupId;
    }

    /**
     * @param int $GroupId
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPrices
     */
    public function setGroupId($GroupId)
    {
        $this->GroupId = $GroupId;
        return $this;
    }
}
