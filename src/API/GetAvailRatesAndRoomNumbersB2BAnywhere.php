<?php

namespace Gueststream\PMS\IQWare\API;

class GetAvailRatesAndRoomNumbersB2BAnywhere
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var \DateTime $AFromDate
     */
    protected $AFromDate = null;

    /**
     * @var \DateTime $AToDate
     */
    protected $AToDate = null;

    /**
     * @var int $AStayLength
     */
    protected $AStayLength = null;

    /**
     * @var int $AccomodationType
     */
    protected $AccomodationType = null;

    /**
     * @var int $GuestCount
     */
    protected $GuestCount = null;

    /**
     * @var string $strAttributes
     */
    protected $strAttributes = null;

    /**
     * @var string $strLocalizations
     */
    protected $strLocalizations = null;

    /**
     * @var string $ListOfRoomTypes
     */
    protected $ListOfRoomTypes = null;

    /**
     * @var string $ListOfRateCodes
     */
    protected $ListOfRateCodes = null;

    /**
     * @var string $ChidrenBreakDown
     */
    protected $ChidrenBreakDown = null;

    /**
     * @param int $intGUID
     * @param \DateTime $AFromDate
     * @param \DateTime $AToDate
     * @param int $AStayLength
     * @param int $AccomodationType
     * @param int $GuestCount
     * @param string $strAttributes
     * @param string $strLocalizations
     * @param string $ListOfRoomTypes
     * @param string $ListOfRateCodes
     * @param string $ChidrenBreakDown
     */
    public function __construct($intGUID, \DateTime $AFromDate, \DateTime $AToDate, $AStayLength, $AccomodationType, $GuestCount, $strAttributes, $strLocalizations, $ListOfRoomTypes, $ListOfRateCodes, $ChidrenBreakDown)
    {
        $this->intGUID = $intGUID;
        $this->AFromDate = $AFromDate->format(\DateTime::ATOM);
        $this->AToDate = $AToDate->format(\DateTime::ATOM);
        $this->AStayLength = $AStayLength;
        $this->AccomodationType = $AccomodationType;
        $this->GuestCount = $GuestCount;
        $this->strAttributes = $strAttributes;
        $this->strLocalizations = $strLocalizations;
        $this->ListOfRoomTypes = $ListOfRoomTypes;
        $this->ListOfRateCodes = $ListOfRateCodes;
        $this->ChidrenBreakDown = $ChidrenBreakDown;
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
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersB2BAnywhere
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAFromDate()
    {
        if ($this->AFromDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->AFromDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $AFromDate
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersB2BAnywhere
     */
    public function setAFromDate(\DateTime $AFromDate)
    {
        $this->AFromDate = $AFromDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAToDate()
    {
        if ($this->AToDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->AToDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $AToDate
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersB2BAnywhere
     */
    public function setAToDate(\DateTime $AToDate)
    {
        $this->AToDate = $AToDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getAStayLength()
    {
        return $this->AStayLength;
    }

    /**
     * @param int $AStayLength
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersB2BAnywhere
     */
    public function setAStayLength($AStayLength)
    {
        $this->AStayLength = $AStayLength;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccomodationType()
    {
        return $this->AccomodationType;
    }

    /**
     * @param int $AccomodationType
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersB2BAnywhere
     */
    public function setAccomodationType($AccomodationType)
    {
        $this->AccomodationType = $AccomodationType;
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
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersB2BAnywhere
     */
    public function setGuestCount($GuestCount)
    {
        $this->GuestCount = $GuestCount;
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
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersB2BAnywhere
     */
    public function setStrAttributes($strAttributes)
    {
        $this->strAttributes = $strAttributes;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrLocalizations()
    {
        return $this->strLocalizations;
    }

    /**
     * @param string $strLocalizations
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersB2BAnywhere
     */
    public function setStrLocalizations($strLocalizations)
    {
        $this->strLocalizations = $strLocalizations;
        return $this;
    }

    /**
     * @return string
     */
    public function getListOfRoomTypes()
    {
        return $this->ListOfRoomTypes;
    }

    /**
     * @param string $ListOfRoomTypes
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersB2BAnywhere
     */
    public function setListOfRoomTypes($ListOfRoomTypes)
    {
        $this->ListOfRoomTypes = $ListOfRoomTypes;
        return $this;
    }

    /**
     * @return string
     */
    public function getListOfRateCodes()
    {
        return $this->ListOfRateCodes;
    }

    /**
     * @param string $ListOfRateCodes
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersB2BAnywhere
     */
    public function setListOfRateCodes($ListOfRateCodes)
    {
        $this->ListOfRateCodes = $ListOfRateCodes;
        return $this;
    }

    /**
     * @return string
     */
    public function getChidrenBreakDown()
    {
        return $this->ChidrenBreakDown;
    }

    /**
     * @param string $ChidrenBreakDown
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersB2BAnywhere
     */
    public function setChidrenBreakDown($ChidrenBreakDown)
    {
        $this->ChidrenBreakDown = $ChidrenBreakDown;
        return $this;
    }
}
