<?php

namespace Gueststream\PMS\IQWare\API;

class BeachChairGetSingleStayValue
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
     * @var string $strRateSpecial
     */
    protected $strRateSpecial = null;

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
     * @var ArrayOfElements $ListElements
     */
    protected $ListElements = null;

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
     * @var int $intBusinessSourceID
     */
    protected $intBusinessSourceID = null;

    /**
     * @var ArrayOfActivityUnit $ListActivityUnits
     */
    protected $ListActivityUnits = null;

    /**
     * @var int $ID_ActivityToken
     */
    protected $ID_ActivityToken = null;

    /**
     * @param int $intGUID
     * @param string $strISOLanguage
     * @param int $intRoomType
     * @param int $intRateID
     * @param string $strRateSpecial
     * @param int $intGuestCount
     * @param string $strChildren
     * @param \DateTime $dArrDate
     * @param \DateTime $dDepDate
     * @param string $strAttributes
     * @param string $strLocations
     * @param ArrayOfElements $ListElements
     * @param int $intRoomQty
     * @param boolean $IsInsuranceAccepted
     * @param string $strAttributeGroupings
     * @param string $strLocationsGroupings
     * @param int $intBusinessSourceID
     * @param ArrayOfActivityUnit $ListActivityUnits
     * @param int $ID_ActivityToken
     */
    public function __construct($intGUID, $strISOLanguage, $intRoomType, $intRateID, $strRateSpecial, $intGuestCount, $strChildren, \DateTime $dArrDate, \DateTime $dDepDate, $strAttributes, $strLocations, $ListElements, $intRoomQty, $IsInsuranceAccepted, $strAttributeGroupings, $strLocationsGroupings, $intBusinessSourceID, $ListActivityUnits, $ID_ActivityToken)
    {
        $this->intGUID = $intGUID;
        $this->strISOLanguage = $strISOLanguage;
        $this->intRoomType = $intRoomType;
        $this->intRateID = $intRateID;
        $this->strRateSpecial = $strRateSpecial;
        $this->intGuestCount = $intGuestCount;
        $this->strChildren = $strChildren;
        $this->dArrDate = $dArrDate->format('Y-m-d');
        $this->dDepDate = $dDepDate->format('Y-m-d');
        $this->strAttributes = $strAttributes;
        $this->strLocations = $strLocations;
        $this->ListElements = $ListElements;
        $this->intRoomQty = $intRoomQty;
        $this->IsInsuranceAccepted = $IsInsuranceAccepted;
        $this->strAttributeGroupings = $strAttributeGroupings;
        $this->strLocationsGroupings = $strLocationsGroupings;
        $this->intBusinessSourceID = $intBusinessSourceID;
        $this->ListActivityUnits = $ListActivityUnits;
        $this->ID_ActivityToken = $ID_ActivityToken;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
     */
    public function setIntRateID($intRateID)
    {
        $this->intRateID = $intRateID;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
     */
    public function setStrRateSpecial($strRateSpecial)
    {
        $this->strRateSpecial = $strRateSpecial;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
     */
    public function setStrLocations($strLocations)
    {
        $this->strLocations = $strLocations;
        return $this;
    }

    /**
     * @return ArrayOfElements
     */
    public function getListElements()
    {
        return $this->ListElements;
    }

    /**
     * @param ArrayOfElements $ListElements
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
     */
    public function setListElements($ListElements)
    {
        $this->ListElements = $ListElements;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
     */
    public function setStrLocationsGroupings($strLocationsGroupings)
    {
        $this->strLocationsGroupings = $strLocationsGroupings;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
     */
    public function setIntBusinessSourceID($intBusinessSourceID)
    {
        $this->intBusinessSourceID = $intBusinessSourceID;
        return $this;
    }

    /**
     * @return ArrayOfActivityUnit
     */
    public function getListActivityUnits()
    {
        return $this->ListActivityUnits;
    }

    /**
     * @param ArrayOfActivityUnit $ListActivityUnits
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
     */
    public function setListActivityUnits($ListActivityUnits)
    {
        $this->ListActivityUnits = $ListActivityUnits;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_ActivityToken()
    {
        return $this->ID_ActivityToken;
    }

    /**
     * @param int $ID_ActivityToken
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValue
     */
    public function setID_ActivityToken($ID_ActivityToken)
    {
        $this->ID_ActivityToken = $ID_ActivityToken;
        return $this;
    }
}
