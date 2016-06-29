<?php

namespace Gueststream\PMS\IQWare\API;

class AvailBookingSites
{

    /**
     * @var int $ID_ActivityToken
     */
    protected $ID_ActivityToken = null;

    /**
     * @var ArrayOfActivityUnitAvail $ChairAvailabilityList
     */
    protected $ChairAvailabilityList = null;

    /**
     * @param int $ID_ActivityToken
     */
    public function __construct($ID_ActivityToken)
    {
        $this->ID_ActivityToken = $ID_ActivityToken;
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
     * @return \Gueststream\PMS\IQWare\API\AvailBookingSites
     */
    public function setID_ActivityToken($ID_ActivityToken)
    {
        $this->ID_ActivityToken = $ID_ActivityToken;
        return $this;
    }

    /**
     * @return ArrayOfActivityUnitAvail
     */
    public function getChairAvailabilityList()
    {
        return $this->ChairAvailabilityList;
    }

    /**
     * @param ArrayOfActivityUnitAvail $ChairAvailabilityList
     * @return \Gueststream\PMS\IQWare\API\AvailBookingSites
     */
    public function setChairAvailabilityList($ChairAvailabilityList)
    {
        $this->ChairAvailabilityList = $ChairAvailabilityList;
        return $this;
    }
}
