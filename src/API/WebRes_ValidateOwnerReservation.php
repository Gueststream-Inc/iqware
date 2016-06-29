<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_ValidateOwnerReservation
{

    /**
     * @var OwnerReservation $reservation
     */
    protected $reservation = null;

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var BookingCondoType $BkgType
     */
    protected $BkgType = null;

    /**
     * @var int $intBusinessSourceID
     */
    protected $intBusinessSourceID = null;

    /**
     * @var int $intSuiteID
     */
    protected $intSuiteID = null;

    /**
     * @param OwnerReservation $reservation
     * @param int $guid
     * @param BookingCondoType $BkgType
     * @param int $intBusinessSourceID
     * @param int $intSuiteID
     */
    public function __construct($reservation, $guid, $BkgType, $intBusinessSourceID, $intSuiteID)
    {
        $this->reservation = $reservation;
        $this->guid = $guid;
        $this->BkgType = $BkgType;
        $this->intBusinessSourceID = $intBusinessSourceID;
        $this->intSuiteID = $intSuiteID;
    }

    /**
     * @return OwnerReservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * @param OwnerReservation $reservation
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservation
     */
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservation
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return BookingCondoType
     */
    public function getBkgType()
    {
        return $this->BkgType;
    }

    /**
     * @param BookingCondoType $BkgType
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservation
     */
    public function setBkgType($BkgType)
    {
        $this->BkgType = $BkgType;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservation
     */
    public function setIntBusinessSourceID($intBusinessSourceID)
    {
        $this->intBusinessSourceID = $intBusinessSourceID;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntSuiteID()
    {
        return $this->intSuiteID;
    }

    /**
     * @param int $intSuiteID
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservation
     */
    public function setIntSuiteID($intSuiteID)
    {
        $this->intSuiteID = $intSuiteID;
        return $this;
    }
}
