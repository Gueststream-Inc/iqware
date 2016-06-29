<?php

namespace Gueststream\PMS\IQWare\API;

class GetAvailRatesAndRoomNumbersWithEvaluation
{

    /**
     * @var int $Guid
     */
    protected $Guid = null;

    /**
     * @var boolean $IsValidateRoomRefusals
     */
    protected $IsValidateRoomRefusals = null;

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
     * @var int $intID_AccommodationType
     */
    protected $intID_AccommodationType = null;

    /**
     * @var int $intRoomQty
     */
    protected $intRoomQty = null;

    /**
     * @var string $strListOfPromoRates
     */
    protected $strListOfPromoRates = null;

    /**
     * @var boolean $IsPromoByRate
     */
    protected $IsPromoByRate = null;

    /**
     * @var int $intRateSpecial
     */
    protected $intRateSpecial = null;

    /**
     * @var string $strRateCodes
     */
    protected $strRateCodes = null;

    /**
     * @var string $strRoomTypes
     */
    protected $strRoomTypes = null;

    /**
     * @var string $PushID
     */
    protected $PushID = null;

    /**
     * @var IAB2BMode $BackToBackMode
     */
    protected $BackToBackMode = null;

    /**
     * @var boolean $IsClusterVersion
     */
    protected $IsClusterVersion = null;

    /**
     * @var int $EvalCount
     */
    protected $EvalCount = null;

    /**
     * @param int $Guid
     * @param boolean $IsValidateRoomRefusals
     * @param \DateTime $dtArrivalDate
     * @param \DateTime $dtDepartureDate
     * @param int $intGuestCount
     * @param string $strChildrens
     * @param int $intID_AccommodationType
     * @param int $intRoomQty
     * @param string $strListOfPromoRates
     * @param boolean $IsPromoByRate
     * @param int $intRateSpecial
     * @param string $strRateCodes
     * @param string $strRoomTypes
     * @param string $PushID
     * @param IAB2BMode $BackToBackMode
     * @param boolean $IsClusterVersion
     * @param int $EvalCount
     */
    public function __construct($Guid, $IsValidateRoomRefusals, \DateTime $dtArrivalDate, \DateTime $dtDepartureDate, $intGuestCount, $strChildrens, $intID_AccommodationType, $intRoomQty, $strListOfPromoRates, $IsPromoByRate, $intRateSpecial, $strRateCodes, $strRoomTypes, $PushID, $BackToBackMode, $IsClusterVersion, $EvalCount)
    {
        $this->Guid = $Guid;
        $this->IsValidateRoomRefusals = $IsValidateRoomRefusals;
        $this->dtArrivalDate = $dtArrivalDate->format(\DateTime::ATOM);
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        $this->intGuestCount = $intGuestCount;
        $this->strChildrens = $strChildrens;
        $this->intID_AccommodationType = $intID_AccommodationType;
        $this->intRoomQty = $intRoomQty;
        $this->strListOfPromoRates = $strListOfPromoRates;
        $this->IsPromoByRate = $IsPromoByRate;
        $this->intRateSpecial = $intRateSpecial;
        $this->strRateCodes = $strRateCodes;
        $this->strRoomTypes = $strRoomTypes;
        $this->PushID = $PushID;
        $this->BackToBackMode = $BackToBackMode;
        $this->IsClusterVersion = $IsClusterVersion;
        $this->EvalCount = $EvalCount;
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
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
     */
    public function setGuid($Guid)
    {
        $this->Guid = $Guid;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsValidateRoomRefusals()
    {
        return $this->IsValidateRoomRefusals;
    }

    /**
     * @param boolean $IsValidateRoomRefusals
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
     */
    public function setIsValidateRoomRefusals($IsValidateRoomRefusals)
    {
        $this->IsValidateRoomRefusals = $IsValidateRoomRefusals;
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
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
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
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
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
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
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
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
     */
    public function setStrChildrens($strChildrens)
    {
        $this->strChildrens = $strChildrens;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntID_AccommodationType()
    {
        return $this->intID_AccommodationType;
    }

    /**
     * @param int $intID_AccommodationType
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
     */
    public function setIntID_AccommodationType($intID_AccommodationType)
    {
        $this->intID_AccommodationType = $intID_AccommodationType;
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
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
     */
    public function setIntRoomQty($intRoomQty)
    {
        $this->intRoomQty = $intRoomQty;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrListOfPromoRates()
    {
        return $this->strListOfPromoRates;
    }

    /**
     * @param string $strListOfPromoRates
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
     */
    public function setStrListOfPromoRates($strListOfPromoRates)
    {
        $this->strListOfPromoRates = $strListOfPromoRates;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPromoByRate()
    {
        return $this->IsPromoByRate;
    }

    /**
     * @param boolean $IsPromoByRate
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
     */
    public function setIsPromoByRate($IsPromoByRate)
    {
        $this->IsPromoByRate = $IsPromoByRate;
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
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
     */
    public function setIntRateSpecial($intRateSpecial)
    {
        $this->intRateSpecial = $intRateSpecial;
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
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
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
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
     */
    public function setStrRoomTypes($strRoomTypes)
    {
        $this->strRoomTypes = $strRoomTypes;
        return $this;
    }

    /**
     * @return string
     */
    public function getPushID()
    {
        return $this->PushID;
    }

    /**
     * @param string $PushID
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
     */
    public function setPushID($PushID)
    {
        $this->PushID = $PushID;
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
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
     */
    public function setBackToBackMode($BackToBackMode)
    {
        $this->BackToBackMode = $BackToBackMode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsClusterVersion()
    {
        return $this->IsClusterVersion;
    }

    /**
     * @param boolean $IsClusterVersion
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
     */
    public function setIsClusterVersion($IsClusterVersion)
    {
        $this->IsClusterVersion = $IsClusterVersion;
        return $this;
    }

    /**
     * @return int
     */
    public function getEvalCount()
    {
        return $this->EvalCount;
    }

    /**
     * @param int $EvalCount
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluation
     */
    public function setEvalCount($EvalCount)
    {
        $this->EvalCount = $EvalCount;
        return $this;
    }
}
