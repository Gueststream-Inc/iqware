<?php

namespace Gueststream\PMS\IQWare\API;

class GetServiceCharges
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var string $strServiceChargeIDs
     */
    protected $strServiceChargeIDs = null;

    /**
     * @var string $strRoomTypeIDs
     */
    protected $strRoomTypeIDs = null;

    /**
     * @var \DateTime $dtBeginDate
     */
    protected $dtBeginDate = null;

    /**
     * @var \DateTime $dtEndDate
     */
    protected $dtEndDate = null;

    /**
     * @var ArrayOfStayValue3 $StayValueArray
     */
    protected $StayValueArray = null;

    /**
     * @param int $intGUID
     * @param string $strServiceChargeIDs
     * @param string $strRoomTypeIDs
     * @param \DateTime $dtBeginDate
     * @param \DateTime $dtEndDate
     * @param ArrayOfStayValue3 $StayValueArray
     */
    public function __construct($intGUID, $strServiceChargeIDs, $strRoomTypeIDs, \DateTime $dtBeginDate, \DateTime $dtEndDate, $StayValueArray)
    {
        $this->intGUID = $intGUID;
        $this->strServiceChargeIDs = $strServiceChargeIDs;
        $this->strRoomTypeIDs = $strRoomTypeIDs;
        $this->dtBeginDate = $dtBeginDate->format(\DateTime::ATOM);
        $this->dtEndDate = $dtEndDate->format(\DateTime::ATOM);
        $this->StayValueArray = $StayValueArray;
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
     * @return \Gueststream\PMS\IQWare\API\GetServiceCharges
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrServiceChargeIDs()
    {
        return $this->strServiceChargeIDs;
    }

    /**
     * @param string $strServiceChargeIDs
     * @return \Gueststream\PMS\IQWare\API\GetServiceCharges
     */
    public function setStrServiceChargeIDs($strServiceChargeIDs)
    {
        $this->strServiceChargeIDs = $strServiceChargeIDs;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRoomTypeIDs()
    {
        return $this->strRoomTypeIDs;
    }

    /**
     * @param string $strRoomTypeIDs
     * @return \Gueststream\PMS\IQWare\API\GetServiceCharges
     */
    public function setStrRoomTypeIDs($strRoomTypeIDs)
    {
        $this->strRoomTypeIDs = $strRoomTypeIDs;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtBeginDate()
    {
        if ($this->dtBeginDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dtBeginDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dtBeginDate
     * @return \Gueststream\PMS\IQWare\API\GetServiceCharges
     */
    public function setDtBeginDate(\DateTime $dtBeginDate)
    {
        $this->dtBeginDate = $dtBeginDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDtEndDate()
    {
        if ($this->dtEndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dtEndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dtEndDate
     * @return \Gueststream\PMS\IQWare\API\GetServiceCharges
     */
    public function setDtEndDate(\DateTime $dtEndDate)
    {
        $this->dtEndDate = $dtEndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return ArrayOfStayValue3
     */
    public function getStayValueArray()
    {
        return $this->StayValueArray;
    }

    /**
     * @param ArrayOfStayValue3 $StayValueArray
     * @return \Gueststream\PMS\IQWare\API\GetServiceCharges
     */
    public function setStayValueArray($StayValueArray)
    {
        $this->StayValueArray = $StayValueArray;
        return $this;
    }
}
