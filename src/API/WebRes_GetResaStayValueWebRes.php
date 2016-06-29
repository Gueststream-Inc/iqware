<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetResaStayValueWebRes
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
     * @var dstElements $dstElements
     */
    protected $dstElements = null;

    /**
     * @var string $strSpecialOffers
     */
    protected $strSpecialOffers = null;

    /**
     * @var int $intRoomQty
     */
    protected $intRoomQty = null;

    /**
     * @var int $ID_ManualRateReason
     */
    protected $ID_ManualRateReason = null;

    /**
     * @var int $ID_Grp
     */
    protected $ID_Grp = null;

    /**
     * @var int $ID_PrivateGrid
     */
    protected $ID_PrivateGrid = null;

    /**
     * @var TManualTypeBooking $TManualTypeBooking
     */
    protected $TManualTypeBooking = null;

    /**
     * @var TSBDSvcChargeStayStatus $TvlInsuranceStatus
     */
    protected $TvlInsuranceStatus = null;

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
     * @param dstElements $dstElements
     * @param string $strSpecialOffers
     * @param int $intRoomQty
     * @param int $ID_ManualRateReason
     * @param int $ID_Grp
     * @param int $ID_PrivateGrid
     * @param TManualTypeBooking $TManualTypeBooking
     * @param TSBDSvcChargeStayStatus $TvlInsuranceStatus
     */
    public function __construct($intGUID, $strISOLanguage, $intRoomType, $intRateID, $intGuestCount, $strChildren, \DateTime $dArrDate, \DateTime $dDepDate, $strAttributes, $strLocations, $dstElements, $strSpecialOffers, $intRoomQty, $ID_ManualRateReason, $ID_Grp, $ID_PrivateGrid, $TManualTypeBooking, $TvlInsuranceStatus)
    {
        $this->intGUID = $intGUID;
        $this->strISOLanguage = $strISOLanguage;
        $this->intRoomType = $intRoomType;
        $this->intRateID = $intRateID;
        $this->intGuestCount = $intGuestCount;
        $this->strChildren = $strChildren;
        $this->dArrDate = $dArrDate->format(\DateTime::ATOM);
        $this->dDepDate = $dDepDate->format(\DateTime::ATOM);
        $this->strAttributes = $strAttributes;
        $this->strLocations = $strLocations;
        $this->dstElements = $dstElements;
        $this->strSpecialOffers = $strSpecialOffers;
        $this->intRoomQty = $intRoomQty;
        $this->ID_ManualRateReason = $ID_ManualRateReason;
        $this->ID_Grp = $ID_Grp;
        $this->ID_PrivateGrid = $ID_PrivateGrid;
        $this->TManualTypeBooking = $TManualTypeBooking;
        $this->TvlInsuranceStatus = $TvlInsuranceStatus;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
     */
    public function setDArrDate(\DateTime $dArrDate)
    {
        $this->dArrDate = $dArrDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
     */
    public function setDDepDate(\DateTime $dDepDate)
    {
        $this->dDepDate = $dDepDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
     */
    public function setStrLocations($strLocations)
    {
        $this->strLocations = $strLocations;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
     */
    public function setDstElements($dstElements)
    {
        $this->dstElements = $dstElements;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrSpecialOffers()
    {
        return $this->strSpecialOffers;
    }

    /**
     * @param string $strSpecialOffers
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
     */
    public function setStrSpecialOffers($strSpecialOffers)
    {
        $this->strSpecialOffers = $strSpecialOffers;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
     */
    public function setIntRoomQty($intRoomQty)
    {
        $this->intRoomQty = $intRoomQty;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_ManualRateReason()
    {
        return $this->ID_ManualRateReason;
    }

    /**
     * @param int $ID_ManualRateReason
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
     */
    public function setID_ManualRateReason($ID_ManualRateReason)
    {
        $this->ID_ManualRateReason = $ID_ManualRateReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Grp()
    {
        return $this->ID_Grp;
    }

    /**
     * @param int $ID_Grp
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
     */
    public function setID_Grp($ID_Grp)
    {
        $this->ID_Grp = $ID_Grp;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_PrivateGrid()
    {
        return $this->ID_PrivateGrid;
    }

    /**
     * @param int $ID_PrivateGrid
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
     */
    public function setID_PrivateGrid($ID_PrivateGrid)
    {
        $this->ID_PrivateGrid = $ID_PrivateGrid;
        return $this;
    }

    /**
     * @return TManualTypeBooking
     */
    public function getTManualTypeBooking()
    {
        return $this->TManualTypeBooking;
    }

    /**
     * @param TManualTypeBooking $TManualTypeBooking
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
     */
    public function setTManualTypeBooking($TManualTypeBooking)
    {
        $this->TManualTypeBooking = $TManualTypeBooking;
        return $this;
    }

    /**
     * @return TSBDSvcChargeStayStatus
     */
    public function getTvlInsuranceStatus()
    {
        return $this->TvlInsuranceStatus;
    }

    /**
     * @param TSBDSvcChargeStayStatus $TvlInsuranceStatus
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebRes
     */
    public function setTvlInsuranceStatus($TvlInsuranceStatus)
    {
        $this->TvlInsuranceStatus = $TvlInsuranceStatus;
        return $this;
    }
}
