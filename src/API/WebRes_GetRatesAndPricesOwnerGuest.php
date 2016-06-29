<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetRatesAndPricesOwnerGuest
{

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var int $RoomTypeID
     */
    protected $RoomTypeID = null;

    /**
     * @var int $GuestCount
     */
    protected $GuestCount = null;

    /**
     * @var string $strISOLanguage
     */
    protected $strISOLanguage = null;

    /**
     * @var string $strChildren
     */
    protected $strChildren = null;

    /**
     * @var TAccountType $TAccountType
     */
    protected $TAccountType = null;

    /**
     * @param int $PropertyGUID
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     * @param int $RoomTypeID
     * @param int $GuestCount
     * @param string $strISOLanguage
     * @param string $strChildren
     * @param TAccountType $TAccountType
     */
    public function __construct($PropertyGUID, \DateTime $ArrivalDate, \DateTime $DepartureDate, $RoomTypeID, $GuestCount, $strISOLanguage, $strChildren, $TAccountType)
    {
        $this->PropertyGUID = $PropertyGUID;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        $this->RoomTypeID = $RoomTypeID;
        $this->GuestCount = $GuestCount;
        $this->strISOLanguage = $strISOLanguage;
        $this->strChildren = $strChildren;
        $this->TAccountType = $TAccountType;
    }

    /**
     * @return int
     */
    public function getPropertyGUID()
    {
        return $this->PropertyGUID;
    }

    /**
     * @param int $PropertyGUID
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetRatesAndPricesOwnerGuest
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        if ($this->ArrivalDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ArrivalDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ArrivalDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetRatesAndPricesOwnerGuest
     */
    public function setArrivalDate(\DateTime $ArrivalDate)
    {
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        if ($this->DepartureDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DepartureDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DepartureDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetRatesAndPricesOwnerGuest
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomTypeID()
    {
        return $this->RoomTypeID;
    }

    /**
     * @param int $RoomTypeID
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetRatesAndPricesOwnerGuest
     */
    public function setRoomTypeID($RoomTypeID)
    {
        $this->RoomTypeID = $RoomTypeID;
        return $this;
    }

    /**
     * @return int
     */
    public function getGuestCount()
    {
        return $this->GuestCount;
    }

    /**
     * @param int $GuestCount
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetRatesAndPricesOwnerGuest
     */
    public function setGuestCount($GuestCount)
    {
        $this->GuestCount = $GuestCount;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetRatesAndPricesOwnerGuest
     */
    public function setStrISOLanguage($strISOLanguage)
    {
        $this->strISOLanguage = $strISOLanguage;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetRatesAndPricesOwnerGuest
     */
    public function setStrChildren($strChildren)
    {
        $this->strChildren = $strChildren;
        return $this;
    }

    /**
     * @return TAccountType
     */
    public function getTAccountType()
    {
        return $this->TAccountType;
    }

    /**
     * @param TAccountType $TAccountType
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetRatesAndPricesOwnerGuest
     */
    public function setTAccountType($TAccountType)
    {
        $this->TAccountType = $TAccountType;
        return $this;
    }
}
