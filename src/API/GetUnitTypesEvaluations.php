<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnitTypesEvaluations
{

    /**
     * @var int $Guid
     */
    protected $Guid = null;

    /**
     * @var string $strRateCodes
     */
    protected $strRateCodes = null;

    /**
     * @var string $strRoomTypes
     */
    protected $strRoomTypes = null;

    /**
     * @var \DateTime $dtArrivalDate
     */
    protected $dtArrivalDate = null;

    /**
     * @var \DateTime $dtDepartureDate
     */
    protected $dtDepartureDate = null;

    /**
     * @var int $intGuestCount
     */
    protected $intGuestCount = null;

    /**
     * @var string $strChildrens
     */
    protected $strChildrens = null;

    /**
     * @var int $intRateSpecial
     */
    protected $intRateSpecial = null;

    /**
     * @var int $intBuilding
     */
    protected $intBuilding = null;

    /**
     * @var int $intRoomQty
     */
    protected $intRoomQty = null;

    /**
     * @var IAB2BMode $BackToBackMode
     */
    protected $BackToBackMode = null;

    /**
     * @param int $Guid
     * @param string $strRateCodes
     * @param string $strRoomTypes
     * @param \DateTime $dtArrivalDate
     * @param \DateTime $dtDepartureDate
     * @param int $intGuestCount
     * @param string $strChildrens
     * @param int $intRateSpecial
     * @param int $intBuilding
     * @param int $intRoomQty
     * @param IAB2BMode $BackToBackMode
     */
    public function __construct($Guid, $strRateCodes, $strRoomTypes, \DateTime $dtArrivalDate, \DateTime $dtDepartureDate, $intGuestCount, $strChildrens, $intRateSpecial, $intBuilding, $intRoomQty, $BackToBackMode)
    {
        $this->Guid = $Guid;
        $this->strRateCodes = $strRateCodes;
        $this->strRoomTypes = $strRoomTypes;
        $this->dtArrivalDate = $dtArrivalDate->format(\DateTime::ATOM);
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        $this->intGuestCount = $intGuestCount;
        $this->strChildrens = $strChildrens;
        $this->intRateSpecial = $intRateSpecial;
        $this->intBuilding = $intBuilding;
        $this->intRoomQty = $intRoomQty;
        $this->BackToBackMode = $BackToBackMode;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->Guid;
    }

    /**
     * @param int $Guid
     * @return \Gueststream\PMS\IQWare\API\GetUnitTypesEvaluations
     */
    public function setGuid($Guid)
    {
        $this->Guid = $Guid;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRateCodes()
    {
        return $this->strRateCodes;
    }

    /**
     * @param string $strRateCodes
     * @return \Gueststream\PMS\IQWare\API\GetUnitTypesEvaluations
     */
    public function setStrRateCodes($strRateCodes)
    {
        $this->strRateCodes = $strRateCodes;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRoomTypes()
    {
        return $this->strRoomTypes;
    }

    /**
     * @param string $strRoomTypes
     * @return \Gueststream\PMS\IQWare\API\GetUnitTypesEvaluations
     */
    public function setStrRoomTypes($strRoomTypes)
    {
        $this->strRoomTypes = $strRoomTypes;
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
     * @return \Gueststream\PMS\IQWare\API\GetUnitTypesEvaluations
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
     * @return \Gueststream\PMS\IQWare\API\GetUnitTypesEvaluations
     */
    public function setDtDepartureDate(\DateTime $dtDepartureDate)
    {
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getIntGuestCount()
    {
        return $this->intGuestCount;
    }

    /**
     * @param int $intGuestCount
     * @return \Gueststream\PMS\IQWare\API\GetUnitTypesEvaluations
     */
    public function setIntGuestCount($intGuestCount)
    {
        $this->intGuestCount = $intGuestCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrChildrens()
    {
        return $this->strChildrens;
    }

    /**
     * @param string $strChildrens
     * @return \Gueststream\PMS\IQWare\API\GetUnitTypesEvaluations
     */
    public function setStrChildrens($strChildrens)
    {
        $this->strChildrens = $strChildrens;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRateSpecial()
    {
        return $this->intRateSpecial;
    }

    /**
     * @param int $intRateSpecial
     * @return \Gueststream\PMS\IQWare\API\GetUnitTypesEvaluations
     */
    public function setIntRateSpecial($intRateSpecial)
    {
        $this->intRateSpecial = $intRateSpecial;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntBuilding()
    {
        return $this->intBuilding;
    }

    /**
     * @param int $intBuilding
     * @return \Gueststream\PMS\IQWare\API\GetUnitTypesEvaluations
     */
    public function setIntBuilding($intBuilding)
    {
        $this->intBuilding = $intBuilding;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntRoomQty()
    {
        return $this->intRoomQty;
    }

    /**
     * @param int $intRoomQty
     * @return \Gueststream\PMS\IQWare\API\GetUnitTypesEvaluations
     */
    public function setIntRoomQty($intRoomQty)
    {
        $this->intRoomQty = $intRoomQty;
        return $this;
    }

    /**
     * @return IAB2BMode
     */
    public function getBackToBackMode()
    {
        return $this->BackToBackMode;
    }

    /**
     * @param IAB2BMode $BackToBackMode
     * @return \Gueststream\PMS\IQWare\API\GetUnitTypesEvaluations
     */
    public function setBackToBackMode($BackToBackMode)
    {
        $this->BackToBackMode = $BackToBackMode;
        return $this;
    }
}
