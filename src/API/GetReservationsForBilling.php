<?php

namespace Gueststream\PMS\IQWare\API;

class GetReservationsForBilling
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var int $DateOption
     */
    protected $DateOption = null;

    /**
     * @var \DateTime $SearchStartDate
     */
    protected $SearchStartDate = null;

    /**
     * @var \DateTime $SearchEndDate
     */
    protected $SearchEndDate = null;

    /**
     * @var boolean $IsIncludeRevRoom
     */
    protected $IsIncludeRevRoom = null;

    /**
     * @var boolean $IsIncludeRevElement
     */
    protected $IsIncludeRevElement = null;

    /**
     * @var boolean $IsIncludeRevAttribute
     */
    protected $IsIncludeRevAttribute = null;

    /**
     * @var boolean $IsIncludeRevLocation
     */
    protected $IsIncludeRevLocation = null;

    /**
     * @var boolean $IsIncludeRevSvcCharge
     */
    protected $IsIncludeRevSvcCharge = null;

    /**
     * @var boolean $IsIncludeRevSvcChargeALaCarte
     */
    protected $IsIncludeRevSvcChargeALaCarte = null;

    /**
     * @var boolean $IsIncludeRevElementALaCarte
     */
    protected $IsIncludeRevElementALaCarte = null;

    /**
     * @var boolean $IsIncludeRevPromoChargers
     */
    protected $IsIncludeRevPromoChargers = null;

    /**
     * @param int $guid
     * @param int $DateOption
     * @param \DateTime $SearchStartDate
     * @param \DateTime $SearchEndDate
     * @param boolean $IsIncludeRevRoom
     * @param boolean $IsIncludeRevElement
     * @param boolean $IsIncludeRevAttribute
     * @param boolean $IsIncludeRevLocation
     * @param boolean $IsIncludeRevSvcCharge
     * @param boolean $IsIncludeRevSvcChargeALaCarte
     * @param boolean $IsIncludeRevElementALaCarte
     * @param boolean $IsIncludeRevPromoChargers
     */
    public function __construct($guid, $DateOption, \DateTime $SearchStartDate, \DateTime $SearchEndDate, $IsIncludeRevRoom, $IsIncludeRevElement, $IsIncludeRevAttribute, $IsIncludeRevLocation, $IsIncludeRevSvcCharge, $IsIncludeRevSvcChargeALaCarte, $IsIncludeRevElementALaCarte, $IsIncludeRevPromoChargers)
    {
        $this->guid = $guid;
        $this->DateOption = $DateOption;
        $this->SearchStartDate = $SearchStartDate->format(\DateTime::ATOM);
        $this->SearchEndDate = $SearchEndDate->format(\DateTime::ATOM);
        $this->IsIncludeRevRoom = $IsIncludeRevRoom;
        $this->IsIncludeRevElement = $IsIncludeRevElement;
        $this->IsIncludeRevAttribute = $IsIncludeRevAttribute;
        $this->IsIncludeRevLocation = $IsIncludeRevLocation;
        $this->IsIncludeRevSvcCharge = $IsIncludeRevSvcCharge;
        $this->IsIncludeRevSvcChargeALaCarte = $IsIncludeRevSvcChargeALaCarte;
        $this->IsIncludeRevElementALaCarte = $IsIncludeRevElementALaCarte;
        $this->IsIncludeRevPromoChargers = $IsIncludeRevPromoChargers;
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
     * @return \Gueststream\PMS\IQWare\API\GetReservationsForBilling
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return int
     */
    public function getDateOption()
    {
        return $this->DateOption;
    }

    /**
     * @param int $DateOption
     * @return \Gueststream\PMS\IQWare\API\GetReservationsForBilling
     */
    public function setDateOption($DateOption)
    {
        $this->DateOption = $DateOption;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSearchStartDate()
    {
        if ($this->SearchStartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->SearchStartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $SearchStartDate
     * @return \Gueststream\PMS\IQWare\API\GetReservationsForBilling
     */
    public function setSearchStartDate(\DateTime $SearchStartDate)
    {
        $this->SearchStartDate = $SearchStartDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSearchEndDate()
    {
        if ($this->SearchEndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->SearchEndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $SearchEndDate
     * @return \Gueststream\PMS\IQWare\API\GetReservationsForBilling
     */
    public function setSearchEndDate(\DateTime $SearchEndDate)
    {
        $this->SearchEndDate = $SearchEndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIncludeRevRoom()
    {
        return $this->IsIncludeRevRoom;
    }

    /**
     * @param boolean $IsIncludeRevRoom
     * @return \Gueststream\PMS\IQWare\API\GetReservationsForBilling
     */
    public function setIsIncludeRevRoom($IsIncludeRevRoom)
    {
        $this->IsIncludeRevRoom = $IsIncludeRevRoom;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIncludeRevElement()
    {
        return $this->IsIncludeRevElement;
    }

    /**
     * @param boolean $IsIncludeRevElement
     * @return \Gueststream\PMS\IQWare\API\GetReservationsForBilling
     */
    public function setIsIncludeRevElement($IsIncludeRevElement)
    {
        $this->IsIncludeRevElement = $IsIncludeRevElement;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIncludeRevAttribute()
    {
        return $this->IsIncludeRevAttribute;
    }

    /**
     * @param boolean $IsIncludeRevAttribute
     * @return \Gueststream\PMS\IQWare\API\GetReservationsForBilling
     */
    public function setIsIncludeRevAttribute($IsIncludeRevAttribute)
    {
        $this->IsIncludeRevAttribute = $IsIncludeRevAttribute;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIncludeRevLocation()
    {
        return $this->IsIncludeRevLocation;
    }

    /**
     * @param boolean $IsIncludeRevLocation
     * @return \Gueststream\PMS\IQWare\API\GetReservationsForBilling
     */
    public function setIsIncludeRevLocation($IsIncludeRevLocation)
    {
        $this->IsIncludeRevLocation = $IsIncludeRevLocation;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIncludeRevSvcCharge()
    {
        return $this->IsIncludeRevSvcCharge;
    }

    /**
     * @param boolean $IsIncludeRevSvcCharge
     * @return \Gueststream\PMS\IQWare\API\GetReservationsForBilling
     */
    public function setIsIncludeRevSvcCharge($IsIncludeRevSvcCharge)
    {
        $this->IsIncludeRevSvcCharge = $IsIncludeRevSvcCharge;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIncludeRevSvcChargeALaCarte()
    {
        return $this->IsIncludeRevSvcChargeALaCarte;
    }

    /**
     * @param boolean $IsIncludeRevSvcChargeALaCarte
     * @return \Gueststream\PMS\IQWare\API\GetReservationsForBilling
     */
    public function setIsIncludeRevSvcChargeALaCarte($IsIncludeRevSvcChargeALaCarte)
    {
        $this->IsIncludeRevSvcChargeALaCarte = $IsIncludeRevSvcChargeALaCarte;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIncludeRevElementALaCarte()
    {
        return $this->IsIncludeRevElementALaCarte;
    }

    /**
     * @param boolean $IsIncludeRevElementALaCarte
     * @return \Gueststream\PMS\IQWare\API\GetReservationsForBilling
     */
    public function setIsIncludeRevElementALaCarte($IsIncludeRevElementALaCarte)
    {
        $this->IsIncludeRevElementALaCarte = $IsIncludeRevElementALaCarte;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIncludeRevPromoChargers()
    {
        return $this->IsIncludeRevPromoChargers;
    }

    /**
     * @param boolean $IsIncludeRevPromoChargers
     * @return \Gueststream\PMS\IQWare\API\GetReservationsForBilling
     */
    public function setIsIncludeRevPromoChargers($IsIncludeRevPromoChargers)
    {
        $this->IsIncludeRevPromoChargers = $IsIncludeRevPromoChargers;
        return $this;
    }
}
