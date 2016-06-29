<?php

namespace Gueststream\PMS\IQWare\API;

class BeachChairGetAvailBookingSite
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
     * @var boolean $IsAddCheckOutDay
     */
    protected $IsAddCheckOutDay = null;

    /**
     * @var int $ID_ActivityToken
     */
    protected $ID_ActivityToken = null;

    /**
     * @param int $intGUID
     * @param \DateTime $dtArrivalDate
     * @param \DateTime $dtDepartureDate
     * @param boolean $IsAddCheckOutDay
     * @param int $ID_ActivityToken
     */
    public function __construct($intGUID, \DateTime $dtArrivalDate, \DateTime $dtDepartureDate, $IsAddCheckOutDay, $ID_ActivityToken)
    {
        $this->intGUID = $intGUID;
        $this->dtArrivalDate = $dtArrivalDate->format(\DateTime::ATOM);
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        $this->IsAddCheckOutDay = $IsAddCheckOutDay;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetAvailBookingSite
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetAvailBookingSite
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetAvailBookingSite
     */
    public function setDtDepartureDate(\DateTime $dtDepartureDate)
    {
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAddCheckOutDay()
    {
        return $this->IsAddCheckOutDay;
    }

    /**
     * @param boolean $IsAddCheckOutDay
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetAvailBookingSite
     */
    public function setIsAddCheckOutDay($IsAddCheckOutDay)
    {
        $this->IsAddCheckOutDay = $IsAddCheckOutDay;
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
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetAvailBookingSite
     */
    public function setID_ActivityToken($ID_ActivityToken)
    {
        $this->ID_ActivityToken = $ID_ActivityToken;
        return $this;
    }
}
