<?php

namespace Gueststream\PMS\IQWare\API;

class BeachChairSite
{

    /**
     * @var int $ID_ActivityUnits
     */
    protected $ID_ActivityUnits = null;

    /**
     * @var string $SiteName
     */
    protected $SiteName = null;

    /**
     * @var int $ID_Activity
     */
    protected $ID_Activity = null;

    /**
     * @var string $ActivityName
     */
    protected $ActivityName = null;

    /**
     * @var string $BookingItemName
     */
    protected $BookingItemName = null;

    /**
     * @var int $ID_Element
     */
    protected $ID_Element = null;

    /**
     * @var string $ElementName
     */
    protected $ElementName = null;

    /**
     * @var int $PersPerElement
     */
    protected $PersPerElement = null;

    /**
     * @var int $BillingType
     */
    protected $BillingType = null;

    /**
     * @param int $ID_ActivityUnits
     * @param int $ID_Activity
     * @param int $ID_Element
     * @param int $PersPerElement
     * @param int $BillingType
     */
    public function __construct($ID_ActivityUnits, $ID_Activity, $ID_Element, $PersPerElement, $BillingType)
    {
        $this->ID_ActivityUnits = $ID_ActivityUnits;
        $this->ID_Activity = $ID_Activity;
        $this->ID_Element = $ID_Element;
        $this->PersPerElement = $PersPerElement;
        $this->BillingType = $BillingType;
    }

    /**
     * @return int
     */
    public function getID_ActivityUnits()
    {
        return $this->ID_ActivityUnits;
    }

    /**
     * @param int $ID_ActivityUnits
     * @return \Gueststream\PMS\IQWare\API\BeachChairSite
     */
    public function setID_ActivityUnits($ID_ActivityUnits)
    {
        $this->ID_ActivityUnits = $ID_ActivityUnits;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->SiteName;
    }

    /**
     * @param string $SiteName
     * @return \Gueststream\PMS\IQWare\API\BeachChairSite
     */
    public function setSiteName($SiteName)
    {
        $this->SiteName = $SiteName;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Activity()
    {
        return $this->ID_Activity;
    }

    /**
     * @param int $ID_Activity
     * @return \Gueststream\PMS\IQWare\API\BeachChairSite
     */
    public function setID_Activity($ID_Activity)
    {
        $this->ID_Activity = $ID_Activity;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityName()
    {
        return $this->ActivityName;
    }

    /**
     * @param string $ActivityName
     * @return \Gueststream\PMS\IQWare\API\BeachChairSite
     */
    public function setActivityName($ActivityName)
    {
        $this->ActivityName = $ActivityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBookingItemName()
    {
        return $this->BookingItemName;
    }

    /**
     * @param string $BookingItemName
     * @return \Gueststream\PMS\IQWare\API\BeachChairSite
     */
    public function setBookingItemName($BookingItemName)
    {
        $this->BookingItemName = $BookingItemName;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Element()
    {
        return $this->ID_Element;
    }

    /**
     * @param int $ID_Element
     * @return \Gueststream\PMS\IQWare\API\BeachChairSite
     */
    public function setID_Element($ID_Element)
    {
        $this->ID_Element = $ID_Element;
        return $this;
    }

    /**
     * @return string
     */
    public function getElementName()
    {
        return $this->ElementName;
    }

    /**
     * @param string $ElementName
     * @return \Gueststream\PMS\IQWare\API\BeachChairSite
     */
    public function setElementName($ElementName)
    {
        $this->ElementName = $ElementName;
        return $this;
    }

    /**
     * @return int
     */
    public function getPersPerElement()
    {
        return $this->PersPerElement;
    }

    /**
     * @param int $PersPerElement
     * @return \Gueststream\PMS\IQWare\API\BeachChairSite
     */
    public function setPersPerElement($PersPerElement)
    {
        $this->PersPerElement = $PersPerElement;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillingType()
    {
        return $this->BillingType;
    }

    /**
     * @param int $BillingType
     * @return \Gueststream\PMS\IQWare\API\BeachChairSite
     */
    public function setBillingType($BillingType)
    {
        $this->BillingType = $BillingType;
        return $this;
    }
}
