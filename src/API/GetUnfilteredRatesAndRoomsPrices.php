<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnfilteredRatesAndRoomsPrices
{

    /**
     * @var ArrayOfInt $iGuids
     */
    protected $iGuids = null;

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
     * @var string $strISOLanguageCode
     */
    protected $strISOLanguageCode = null;

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
     * @param ArrayOfInt $iGuids
     * @param \DateTime $dtArrivalDate
     * @param \DateTime $dtDepartureDate
     * @param int $intGuestCount
     * @param string $strChildrens
     * @param string $strISOLanguageCode
     * @param int $intID_AccommodationType
     * @param int $intRoomQty
     * @param string $strListOfPromoRates
     * @param boolean $IsPromoByRate
     * @param int $intRateSpecial
     * @param string $strRateCodes
     * @param string $strRoomTypes
     * @param string $PushID
     */
    public function __construct($iGuids, \DateTime $dtArrivalDate, \DateTime $dtDepartureDate, $intGuestCount, $strChildrens, $strISOLanguageCode, $intID_AccommodationType, $intRoomQty, $strListOfPromoRates, $IsPromoByRate, $intRateSpecial, $strRateCodes, $strRoomTypes, $PushID)
    {
        $this->iGuids = $iGuids;
        $this->dtArrivalDate = $dtArrivalDate->format(\DateTime::ATOM);
        $this->dtDepartureDate = $dtDepartureDate->format(\DateTime::ATOM);
        $this->intGuestCount = $intGuestCount;
        $this->strChildrens = $strChildrens;
        $this->strISOLanguageCode = $strISOLanguageCode;
        $this->intID_AccommodationType = $intID_AccommodationType;
        $this->intRoomQty = $intRoomQty;
        $this->strListOfPromoRates = $strListOfPromoRates;
        $this->IsPromoByRate = $IsPromoByRate;
        $this->intRateSpecial = $intRateSpecial;
        $this->strRateCodes = $strRateCodes;
        $this->strRoomTypes = $strRoomTypes;
        $this->PushID = $PushID;
    }

    /**
     * @return ArrayOfInt
     */
    public function getIGuids()
    {
        return $this->iGuids;
    }

    /**
     * @param ArrayOfInt $iGuids
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
     */
    public function setIGuids($iGuids)
    {
        $this->iGuids = $iGuids;
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
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
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
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
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
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
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
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
     */
    public function setStrChildrens($strChildrens)
    {
        $this->strChildrens = $strChildrens;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrISOLanguageCode()
    {
        return $this->strISOLanguageCode;
    }

    /**
     * @param string $strISOLanguageCode
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
     */
    public function setStrISOLanguageCode($strISOLanguageCode)
    {
        $this->strISOLanguageCode = $strISOLanguageCode;
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
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
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
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
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
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
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
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
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
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
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
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
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
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
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
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPrices
     */
    public function setPushID($PushID)
    {
        $this->PushID = $PushID;
        return $this;
    }
}
