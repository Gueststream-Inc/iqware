<?php

namespace Gueststream\PMS\IQWare\API;

class GetSingleStayValueBackToBack
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
     * @var int $ID_PromoCode
     */
    protected $ID_PromoCode = null;

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
     * @var int $intRoomQty
     */
    protected $intRoomQty = null;

    /**
     * @var boolean $IsInsuranceAccepted
     */
    protected $IsInsuranceAccepted = null;

    /**
     * @var string $strAttributeGroupings
     */
    protected $strAttributeGroupings = null;

    /**
     * @var string $strLocationsGroupings
     */
    protected $strLocationsGroupings = null;

    /**
     * @var boolean $isRBO
     */
    protected $isRBO = null;

    /**
     * @var boolean $MustEvaluateRBO
     */
    protected $MustEvaluateRBO = null;

    /**
     * @var string $StrListSpecialOffertApplicable
     */
    protected $StrListSpecialOffertApplicable = null;

    /**
     * @var XMLDailyManualRates $XMLDailyManualRates
     */
    protected $XMLDailyManualRates = null;

    /**
     * @var string $XMLDailyRates
     */
    protected $XMLDailyRates = null;

    /**
     * @var string $XMLServicesChargesALaCarte
     */
    protected $XMLServicesChargesALaCarte = null;

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var int $ID_Building
     */
    protected $ID_Building = null;

    /**
     * @var string $strRateSpecial
     */
    protected $strRateSpecial = null;

    /**
     * @var IAB2BMode $BackToBackMode
     */
    protected $BackToBackMode = null;

    /**
     * @var int $intBusinessSourceID
     */
    protected $intBusinessSourceID = null;

    /**
     * @param int $intGUID
     * @param string $strISOLanguage
     * @param int $intRoomType
     * @param int $intRateID
     * @param int $ID_PromoCode
     * @param int $intGuestCount
     * @param string $strChildren
     * @param \DateTime $dArrDate
     * @param \DateTime $dDepDate
     * @param string $strAttributes
     * @param string $strLocations
     * @param dstElements $dstElements
     * @param int $intRoomQty
     * @param boolean $IsInsuranceAccepted
     * @param string $strAttributeGroupings
     * @param string $strLocationsGroupings
     * @param boolean $isRBO
     * @param boolean $MustEvaluateRBO
     * @param string $StrListSpecialOffertApplicable
     * @param XMLDailyManualRates $XMLDailyManualRates
     * @param string $XMLDailyRates
     * @param string $XMLServicesChargesALaCarte
     * @param int $ID_Room
     * @param int $ID_Building
     * @param string $strRateSpecial
     * @param IAB2BMode $BackToBackMode
     * @param int $intBusinessSourceID
     */
    public function __construct($intGUID, $strISOLanguage, $intRoomType, $intRateID, $ID_PromoCode, $intGuestCount, $strChildren, \DateTime $dArrDate, \DateTime $dDepDate, $strAttributes, $strLocations, $dstElements, $intRoomQty, $IsInsuranceAccepted, $strAttributeGroupings, $strLocationsGroupings, $isRBO, $MustEvaluateRBO, $StrListSpecialOffertApplicable, $XMLDailyManualRates, $XMLDailyRates, $XMLServicesChargesALaCarte, $ID_Room, $ID_Building, $strRateSpecial, $BackToBackMode, $intBusinessSourceID)
    {
        $this->intGUID = $intGUID;
        $this->strISOLanguage = $strISOLanguage;
        $this->intRoomType = $intRoomType;
        $this->intRateID = $intRateID;
        $this->ID_PromoCode = $ID_PromoCode;
        $this->intGuestCount = $intGuestCount;
        $this->strChildren = $strChildren;
        $this->dArrDate = $dArrDate->format(\DateTime::ATOM);
        $this->dDepDate = $dDepDate->format(\DateTime::ATOM);
        $this->strAttributes = $strAttributes;
        $this->strLocations = $strLocations;
        $this->dstElements = $dstElements;
        $this->intRoomQty = $intRoomQty;
        $this->IsInsuranceAccepted = $IsInsuranceAccepted;
        $this->strAttributeGroupings = $strAttributeGroupings;
        $this->strLocationsGroupings = $strLocationsGroupings;
        $this->isRBO = $isRBO;
        $this->MustEvaluateRBO = $MustEvaluateRBO;
        $this->StrListSpecialOffertApplicable = $StrListSpecialOffertApplicable;
        $this->XMLDailyManualRates = $XMLDailyManualRates;
        $this->XMLDailyRates = $XMLDailyRates;
        $this->XMLServicesChargesALaCarte = $XMLServicesChargesALaCarte;
        $this->ID_Room = $ID_Room;
        $this->ID_Building = $ID_Building;
        $this->strRateSpecial = $strRateSpecial;
        $this->BackToBackMode = $BackToBackMode;
        $this->intBusinessSourceID = $intBusinessSourceID;
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setIntRateID($intRateID)
    {
        $this->intRateID = $intRateID;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_PromoCode()
    {
        return $this->ID_PromoCode;
    }

    /**
     * @param int $ID_PromoCode
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setID_PromoCode($ID_PromoCode)
    {
        $this->ID_PromoCode = $ID_PromoCode;
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setIntRoomQty($intRoomQty)
    {
        $this->intRoomQty = $intRoomQty;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInsuranceAccepted()
    {
        return $this->IsInsuranceAccepted;
    }

    /**
     * @param boolean $IsInsuranceAccepted
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setIsInsuranceAccepted($IsInsuranceAccepted)
    {
        $this->IsInsuranceAccepted = $IsInsuranceAccepted;
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setStrLocationsGroupings($strLocationsGroupings)
    {
        $this->strLocationsGroupings = $strLocationsGroupings;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRBO()
    {
        return $this->isRBO;
    }

    /**
     * @param boolean $isRBO
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setIsRBO($isRBO)
    {
        $this->isRBO = $isRBO;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMustEvaluateRBO()
    {
        return $this->MustEvaluateRBO;
    }

    /**
     * @param boolean $MustEvaluateRBO
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setMustEvaluateRBO($MustEvaluateRBO)
    {
        $this->MustEvaluateRBO = $MustEvaluateRBO;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrListSpecialOffertApplicable()
    {
        return $this->StrListSpecialOffertApplicable;
    }

    /**
     * @param string $StrListSpecialOffertApplicable
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setStrListSpecialOffertApplicable($StrListSpecialOffertApplicable)
    {
        $this->StrListSpecialOffertApplicable = $StrListSpecialOffertApplicable;
        return $this;
    }

    /**
     * @return XMLDailyManualRates
     */
    public function getXMLDailyManualRates()
    {
        return $this->XMLDailyManualRates;
    }

    /**
     * @param XMLDailyManualRates $XMLDailyManualRates
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setXMLDailyManualRates($XMLDailyManualRates)
    {
        $this->XMLDailyManualRates = $XMLDailyManualRates;
        return $this;
    }

    /**
     * @return string
     */
    public function getXMLDailyRates()
    {
        return $this->XMLDailyRates;
    }

    /**
     * @param string $XMLDailyRates
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setXMLDailyRates($XMLDailyRates)
    {
        $this->XMLDailyRates = $XMLDailyRates;
        return $this;
    }

    /**
     * @return string
     */
    public function getXMLServicesChargesALaCarte()
    {
        return $this->XMLServicesChargesALaCarte;
    }

    /**
     * @param string $XMLServicesChargesALaCarte
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setXMLServicesChargesALaCarte($XMLServicesChargesALaCarte)
    {
        $this->XMLServicesChargesALaCarte = $XMLServicesChargesALaCarte;
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setID_Building($ID_Building)
    {
        $this->ID_Building = $ID_Building;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRateSpecial()
    {
        return $this->strRateSpecial;
    }

    /**
     * @param string $strRateSpecial
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setStrRateSpecial($strRateSpecial)
    {
        $this->strRateSpecial = $strRateSpecial;
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setBackToBackMode($BackToBackMode)
    {
        $this->BackToBackMode = $BackToBackMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntBusinessSourceID()
    {
        return $this->intBusinessSourceID;
    }

    /**
     * @param int $intBusinessSourceID
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBack
     */
    public function setIntBusinessSourceID($intBusinessSourceID)
    {
        $this->intBusinessSourceID = $intBusinessSourceID;
        return $this;
    }
}
