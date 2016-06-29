<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetOwnerRoomAvailabilityByAdminID
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var int $AdminID
     */
    protected $AdminID = null;

    /**
     * @var int $MemberID
     */
    protected $MemberID = null;

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var boolean $ValidateResa
     */
    protected $ValidateResa = null;

    /**
     * @param int $guid
     * @param int $ID_CondoOwner
     * @param int $AdminID
     * @param int $MemberID
     * @param int $ID_RateCode
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param boolean $ValidateResa
     */
    public function __construct($guid, $ID_CondoOwner, $AdminID, $MemberID, $ID_RateCode, \DateTime $startDate, \DateTime $endDate, $ValidateResa)
    {
        $this->guid = $guid;
        $this->ID_CondoOwner = $ID_CondoOwner;
        $this->AdminID = $AdminID;
        $this->MemberID = $MemberID;
        $this->ID_RateCode = $ID_RateCode;
        $this->startDate = $startDate->format(\DateTime::ATOM);
        $this->endDate = $endDate->format(\DateTime::ATOM);
        $this->ValidateResa = $ValidateResa;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailabilityByAdminID
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CondoOwner()
    {
        return $this->ID_CondoOwner;
    }

    /**
     * @param int $ID_CondoOwner
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailabilityByAdminID
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdminID()
    {
        return $this->AdminID;
    }

    /**
     * @param int $AdminID
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailabilityByAdminID
     */
    public function setAdminID($AdminID)
    {
        $this->AdminID = $AdminID;
        return $this;
    }

    /**
     * @return int
     */
    public function getMemberID()
    {
        return $this->MemberID;
    }

    /**
     * @param int $MemberID
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailabilityByAdminID
     */
    public function setMemberID($MemberID)
    {
        $this->MemberID = $MemberID;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCode()
    {
        return $this->ID_RateCode;
    }

    /**
     * @param int $ID_RateCode
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailabilityByAdminID
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->startDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->startDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $startDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailabilityByAdminID
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->endDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->endDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $endDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailabilityByAdminID
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValidateResa()
    {
        return $this->ValidateResa;
    }

    /**
     * @param boolean $ValidateResa
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailabilityByAdminID
     */
    public function setValidateResa($ValidateResa)
    {
        $this->ValidateResa = $ValidateResa;
        return $this;
    }
}
