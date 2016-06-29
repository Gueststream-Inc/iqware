<?php

namespace Gueststream\PMS\IQWare\API;

class ActivityUnit
{

    /**
     * @var int $ID_ActivitiyUnit
     */
    protected $ID_ActivitiyUnit = null;

    /**
     * @var int $ID_Element
     */
    protected $ID_Element = null;

    /**
     * @var \DateTime $aDate
     */
    protected $aDate = null;

    /**
     * @var TSBDBookingIndividualItemStatus $Status
     */
    protected $Status = null;

    /**
     * @param int $ID_ActivitiyUnit
     * @param int $ID_Element
     * @param \DateTime $aDate
     * @param TSBDBookingIndividualItemStatus $Status
     */
    public function __construct($ID_ActivitiyUnit, $ID_Element, \DateTime $aDate, $Status)
    {
        $this->ID_ActivitiyUnit = $ID_ActivitiyUnit;
        $this->ID_Element = $ID_Element;
        $this->aDate = $aDate->format(\DateTime::ATOM);
        $this->Status = $Status;
    }

    /**
     * @return int
     */
    public function getID_ActivitiyUnit()
    {
        return $this->ID_ActivitiyUnit;
    }

    /**
     * @param int $ID_ActivitiyUnit
     * @return \Gueststream\PMS\IQWare\API\ActivityUnit
     */
    public function setID_ActivitiyUnit($ID_ActivitiyUnit)
    {
        $this->ID_ActivitiyUnit = $ID_ActivitiyUnit;
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
     * @return \Gueststream\PMS\IQWare\API\ActivityUnit
     */
    public function setID_Element($ID_Element)
    {
        $this->ID_Element = $ID_Element;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getADate()
    {
        if ($this->aDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->aDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $aDate
     * @return \Gueststream\PMS\IQWare\API\ActivityUnit
     */
    public function setADate(\DateTime $aDate)
    {
        $this->aDate = $aDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return TSBDBookingIndividualItemStatus
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param TSBDBookingIndividualItemStatus $Status
     * @return \Gueststream\PMS\IQWare\API\ActivityUnit
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }
}
