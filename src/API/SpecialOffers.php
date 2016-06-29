<?php

namespace Gueststream\PMS\IQWare\API;

class SpecialOffers
{

    /**
     * @var int $ID_RateSpecial
     */
    protected $ID_RateSpecial = null;

    /**
     * @var string $RateSpecialName
     */
    protected $RateSpecialName = null;

    /**
     * @var \DateTime $StartBooking
     */
    protected $StartBooking = null;

    /**
     * @var \DateTime $EndBooking
     */
    protected $EndBooking = null;

    /**
     * @var \DateTime $StartArrival
     */
    protected $StartArrival = null;

    /**
     * @var \DateTime $EndArrival
     */
    protected $EndArrival = null;

    /**
     * @var int $SpecialType
     */
    protected $SpecialType = null;

    /**
     * @var int $NbrDaysAhead
     */
    protected $NbrDaysAhead = null;

    /**
     * @var int $MinOfNights
     */
    protected $MinOfNights = null;

    /**
     * @var int $RecurrenceType
     */
    protected $RecurrenceType = null;

    /**
     * @var int $ValidNbrDayIntoStay
     */
    protected $ValidNbrDayIntoStay = null;

    /**
     * @var int $ValidNbrFromLast
     */
    protected $ValidNbrFromLast = null;

    /**
     * @var int $MinGuests
     */
    protected $MinGuests = null;

    /**
     * @var boolean $IsCummulatif
     */
    protected $IsCummulatif = null;

    /**
     * @var boolean $IsIndividual
     */
    protected $IsIndividual = null;

    /**
     * @var int $ID_TrnCode
     */
    protected $ID_TrnCode = null;

    /**
     * @var int $SpecificChargeType
     */
    protected $SpecificChargeType = null;

    /**
     * @var int $ReductionType
     */
    protected $ReductionType = null;

    /**
     * @var int $ReductionValue
     */
    protected $ReductionValue = null;

    /**
     * @var boolean $IsSpecialGuaranteed
     */
    protected $IsSpecialGuaranteed = null;

    /**
     * @var boolean $IsAppliedLocally
     */
    protected $IsAppliedLocally = null;

    /**
     * @var boolean $IsAppliedCentrally
     */
    protected $IsAppliedCentrally = null;

    /**
     * @var boolean $IsApplicable
     */
    protected $IsApplicable = null;

    /**
     * @var \DateTime $StartStay
     */
    protected $StartStay = null;

    /**
     * @var \DateTime $EndStay
     */
    protected $EndStay = null;

    /**
     * @var boolean $IsForPromoOnly
     */
    protected $IsForPromoOnly = null;

    /**
     * @var boolean $IsToCreditFixTax
     */
    protected $IsToCreditFixTax = null;

    /**
     * @var boolean $IsRoomChargeReversal
     */
    protected $IsRoomChargeReversal = null;

    /**
     * @var boolean $IsElementSTDReversal
     */
    protected $IsElementSTDReversal = null;

    /**
     * @var boolean $IsLocationReversal
     */
    protected $IsLocationReversal = null;

    /**
     * @var boolean $IsAttributReversal
     */
    protected $IsAttributReversal = null;

    /**
     * @var boolean $IsSvcRateReversal
     */
    protected $IsSvcRateReversal = null;

    /**
     * @var boolean $IsSvcHskReversal
     */
    protected $IsSvcHskReversal = null;

    /**
     * @var boolean $IsSvcRoomReversal
     */
    protected $IsSvcRoomReversal = null;

    /**
     * @var int $ID_RateCodeChanged
     */
    protected $ID_RateCodeChanged = null;

    /**
     * @var ArrayOfRateCode $LinkedRateCodes
     */
    protected $LinkedRateCodes = null;

    /**
     * @var ArrayOfRateSpecialValidPeriod $RateSpecialValidPeriods
     */
    protected $RateSpecialValidPeriods = null;

    /**
     * @param int $ID_RateSpecial
     * @param \DateTime $StartBooking
     * @param \DateTime $EndBooking
     * @param \DateTime $StartArrival
     * @param \DateTime $EndArrival
     * @param int $SpecialType
     * @param int $NbrDaysAhead
     * @param int $MinOfNights
     * @param int $RecurrenceType
     * @param int $ValidNbrDayIntoStay
     * @param int $ValidNbrFromLast
     * @param int $MinGuests
     * @param boolean $IsCummulatif
     * @param boolean $IsIndividual
     * @param int $ID_TrnCode
     * @param int $SpecificChargeType
     * @param int $ReductionType
     * @param int $ReductionValue
     * @param boolean $IsSpecialGuaranteed
     * @param boolean $IsAppliedLocally
     * @param boolean $IsAppliedCentrally
     * @param boolean $IsApplicable
     * @param \DateTime $StartStay
     * @param \DateTime $EndStay
     * @param boolean $IsForPromoOnly
     * @param boolean $IsToCreditFixTax
     * @param boolean $IsRoomChargeReversal
     * @param boolean $IsElementSTDReversal
     * @param boolean $IsLocationReversal
     * @param boolean $IsAttributReversal
     * @param boolean $IsSvcRateReversal
     * @param boolean $IsSvcHskReversal
     * @param boolean $IsSvcRoomReversal
     * @param int $ID_RateCodeChanged
     */
    public function __construct($ID_RateSpecial, \DateTime $StartBooking, \DateTime $EndBooking, \DateTime $StartArrival, \DateTime $EndArrival, $SpecialType, $NbrDaysAhead, $MinOfNights, $RecurrenceType, $ValidNbrDayIntoStay, $ValidNbrFromLast, $MinGuests, $IsCummulatif, $IsIndividual, $ID_TrnCode, $SpecificChargeType, $ReductionType, $ReductionValue, $IsSpecialGuaranteed, $IsAppliedLocally, $IsAppliedCentrally, $IsApplicable, \DateTime $StartStay, \DateTime $EndStay, $IsForPromoOnly, $IsToCreditFixTax, $IsRoomChargeReversal, $IsElementSTDReversal, $IsLocationReversal, $IsAttributReversal, $IsSvcRateReversal, $IsSvcHskReversal, $IsSvcRoomReversal, $ID_RateCodeChanged)
    {
        $this->ID_RateSpecial = $ID_RateSpecial;
        $this->StartBooking = $StartBooking->format(\DateTime::ATOM);
        $this->EndBooking = $EndBooking->format(\DateTime::ATOM);
        $this->StartArrival = $StartArrival->format(\DateTime::ATOM);
        $this->EndArrival = $EndArrival->format(\DateTime::ATOM);
        $this->SpecialType = $SpecialType;
        $this->NbrDaysAhead = $NbrDaysAhead;
        $this->MinOfNights = $MinOfNights;
        $this->RecurrenceType = $RecurrenceType;
        $this->ValidNbrDayIntoStay = $ValidNbrDayIntoStay;
        $this->ValidNbrFromLast = $ValidNbrFromLast;
        $this->MinGuests = $MinGuests;
        $this->IsCummulatif = $IsCummulatif;
        $this->IsIndividual = $IsIndividual;
        $this->ID_TrnCode = $ID_TrnCode;
        $this->SpecificChargeType = $SpecificChargeType;
        $this->ReductionType = $ReductionType;
        $this->ReductionValue = $ReductionValue;
        $this->IsSpecialGuaranteed = $IsSpecialGuaranteed;
        $this->IsAppliedLocally = $IsAppliedLocally;
        $this->IsAppliedCentrally = $IsAppliedCentrally;
        $this->IsApplicable = $IsApplicable;
        $this->StartStay = $StartStay->format(\DateTime::ATOM);
        $this->EndStay = $EndStay->format(\DateTime::ATOM);
        $this->IsForPromoOnly = $IsForPromoOnly;
        $this->IsToCreditFixTax = $IsToCreditFixTax;
        $this->IsRoomChargeReversal = $IsRoomChargeReversal;
        $this->IsElementSTDReversal = $IsElementSTDReversal;
        $this->IsLocationReversal = $IsLocationReversal;
        $this->IsAttributReversal = $IsAttributReversal;
        $this->IsSvcRateReversal = $IsSvcRateReversal;
        $this->IsSvcHskReversal = $IsSvcHskReversal;
        $this->IsSvcRoomReversal = $IsSvcRoomReversal;
        $this->ID_RateCodeChanged = $ID_RateCodeChanged;
    }

    /**
     * @return int
     */
    public function getID_RateSpecial()
    {
        return $this->ID_RateSpecial;
    }

    /**
     * @param int $ID_RateSpecial
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setID_RateSpecial($ID_RateSpecial)
    {
        $this->ID_RateSpecial = $ID_RateSpecial;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateSpecialName()
    {
        return $this->RateSpecialName;
    }

    /**
     * @param string $RateSpecialName
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setRateSpecialName($RateSpecialName)
    {
        $this->RateSpecialName = $RateSpecialName;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartBooking()
    {
        if ($this->StartBooking == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartBooking);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartBooking
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setStartBooking(\DateTime $StartBooking)
    {
        $this->StartBooking = $StartBooking->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndBooking()
    {
        if ($this->EndBooking == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndBooking);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndBooking
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setEndBooking(\DateTime $EndBooking)
    {
        $this->EndBooking = $EndBooking->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartArrival()
    {
        if ($this->StartArrival == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartArrival);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartArrival
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setStartArrival(\DateTime $StartArrival)
    {
        $this->StartArrival = $StartArrival->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndArrival()
    {
        if ($this->EndArrival == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndArrival);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndArrival
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setEndArrival(\DateTime $EndArrival)
    {
        $this->EndArrival = $EndArrival->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getSpecialType()
    {
        return $this->SpecialType;
    }

    /**
     * @param int $SpecialType
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setSpecialType($SpecialType)
    {
        $this->SpecialType = $SpecialType;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbrDaysAhead()
    {
        return $this->NbrDaysAhead;
    }

    /**
     * @param int $NbrDaysAhead
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setNbrDaysAhead($NbrDaysAhead)
    {
        $this->NbrDaysAhead = $NbrDaysAhead;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinOfNights()
    {
        return $this->MinOfNights;
    }

    /**
     * @param int $MinOfNights
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setMinOfNights($MinOfNights)
    {
        $this->MinOfNights = $MinOfNights;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecurrenceType()
    {
        return $this->RecurrenceType;
    }

    /**
     * @param int $RecurrenceType
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setRecurrenceType($RecurrenceType)
    {
        $this->RecurrenceType = $RecurrenceType;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidNbrDayIntoStay()
    {
        return $this->ValidNbrDayIntoStay;
    }

    /**
     * @param int $ValidNbrDayIntoStay
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setValidNbrDayIntoStay($ValidNbrDayIntoStay)
    {
        $this->ValidNbrDayIntoStay = $ValidNbrDayIntoStay;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidNbrFromLast()
    {
        return $this->ValidNbrFromLast;
    }

    /**
     * @param int $ValidNbrFromLast
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setValidNbrFromLast($ValidNbrFromLast)
    {
        $this->ValidNbrFromLast = $ValidNbrFromLast;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinGuests()
    {
        return $this->MinGuests;
    }

    /**
     * @param int $MinGuests
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setMinGuests($MinGuests)
    {
        $this->MinGuests = $MinGuests;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCummulatif()
    {
        return $this->IsCummulatif;
    }

    /**
     * @param boolean $IsCummulatif
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsCummulatif($IsCummulatif)
    {
        $this->IsCummulatif = $IsCummulatif;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIndividual()
    {
        return $this->IsIndividual;
    }

    /**
     * @param boolean $IsIndividual
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsIndividual($IsIndividual)
    {
        $this->IsIndividual = $IsIndividual;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnCode()
    {
        return $this->ID_TrnCode;
    }

    /**
     * @param int $ID_TrnCode
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setID_TrnCode($ID_TrnCode)
    {
        $this->ID_TrnCode = $ID_TrnCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpecificChargeType()
    {
        return $this->SpecificChargeType;
    }

    /**
     * @param int $SpecificChargeType
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setSpecificChargeType($SpecificChargeType)
    {
        $this->SpecificChargeType = $SpecificChargeType;
        return $this;
    }

    /**
     * @return int
     */
    public function getReductionType()
    {
        return $this->ReductionType;
    }

    /**
     * @param int $ReductionType
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setReductionType($ReductionType)
    {
        $this->ReductionType = $ReductionType;
        return $this;
    }

    /**
     * @return int
     */
    public function getReductionValue()
    {
        return $this->ReductionValue;
    }

    /**
     * @param int $ReductionValue
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setReductionValue($ReductionValue)
    {
        $this->ReductionValue = $ReductionValue;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSpecialGuaranteed()
    {
        return $this->IsSpecialGuaranteed;
    }

    /**
     * @param boolean $IsSpecialGuaranteed
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsSpecialGuaranteed($IsSpecialGuaranteed)
    {
        $this->IsSpecialGuaranteed = $IsSpecialGuaranteed;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAppliedLocally()
    {
        return $this->IsAppliedLocally;
    }

    /**
     * @param boolean $IsAppliedLocally
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsAppliedLocally($IsAppliedLocally)
    {
        $this->IsAppliedLocally = $IsAppliedLocally;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAppliedCentrally()
    {
        return $this->IsAppliedCentrally;
    }

    /**
     * @param boolean $IsAppliedCentrally
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsAppliedCentrally($IsAppliedCentrally)
    {
        $this->IsAppliedCentrally = $IsAppliedCentrally;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsApplicable()
    {
        return $this->IsApplicable;
    }

    /**
     * @param boolean $IsApplicable
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsApplicable($IsApplicable)
    {
        $this->IsApplicable = $IsApplicable;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartStay()
    {
        if ($this->StartStay == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartStay);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartStay
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setStartStay(\DateTime $StartStay)
    {
        $this->StartStay = $StartStay->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndStay()
    {
        if ($this->EndStay == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndStay);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndStay
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setEndStay(\DateTime $EndStay)
    {
        $this->EndStay = $EndStay->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsForPromoOnly()
    {
        return $this->IsForPromoOnly;
    }

    /**
     * @param boolean $IsForPromoOnly
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsForPromoOnly($IsForPromoOnly)
    {
        $this->IsForPromoOnly = $IsForPromoOnly;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsToCreditFixTax()
    {
        return $this->IsToCreditFixTax;
    }

    /**
     * @param boolean $IsToCreditFixTax
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsToCreditFixTax($IsToCreditFixTax)
    {
        $this->IsToCreditFixTax = $IsToCreditFixTax;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRoomChargeReversal()
    {
        return $this->IsRoomChargeReversal;
    }

    /**
     * @param boolean $IsRoomChargeReversal
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsRoomChargeReversal($IsRoomChargeReversal)
    {
        $this->IsRoomChargeReversal = $IsRoomChargeReversal;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsElementSTDReversal()
    {
        return $this->IsElementSTDReversal;
    }

    /**
     * @param boolean $IsElementSTDReversal
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsElementSTDReversal($IsElementSTDReversal)
    {
        $this->IsElementSTDReversal = $IsElementSTDReversal;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLocationReversal()
    {
        return $this->IsLocationReversal;
    }

    /**
     * @param boolean $IsLocationReversal
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsLocationReversal($IsLocationReversal)
    {
        $this->IsLocationReversal = $IsLocationReversal;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAttributReversal()
    {
        return $this->IsAttributReversal;
    }

    /**
     * @param boolean $IsAttributReversal
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsAttributReversal($IsAttributReversal)
    {
        $this->IsAttributReversal = $IsAttributReversal;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSvcRateReversal()
    {
        return $this->IsSvcRateReversal;
    }

    /**
     * @param boolean $IsSvcRateReversal
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsSvcRateReversal($IsSvcRateReversal)
    {
        $this->IsSvcRateReversal = $IsSvcRateReversal;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSvcHskReversal()
    {
        return $this->IsSvcHskReversal;
    }

    /**
     * @param boolean $IsSvcHskReversal
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsSvcHskReversal($IsSvcHskReversal)
    {
        $this->IsSvcHskReversal = $IsSvcHskReversal;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSvcRoomReversal()
    {
        return $this->IsSvcRoomReversal;
    }

    /**
     * @param boolean $IsSvcRoomReversal
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setIsSvcRoomReversal($IsSvcRoomReversal)
    {
        $this->IsSvcRoomReversal = $IsSvcRoomReversal;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCodeChanged()
    {
        return $this->ID_RateCodeChanged;
    }

    /**
     * @param int $ID_RateCodeChanged
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setID_RateCodeChanged($ID_RateCodeChanged)
    {
        $this->ID_RateCodeChanged = $ID_RateCodeChanged;
        return $this;
    }

    /**
     * @return ArrayOfRateCode
     */
    public function getLinkedRateCodes()
    {
        return $this->LinkedRateCodes;
    }

    /**
     * @param ArrayOfRateCode $LinkedRateCodes
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setLinkedRateCodes($LinkedRateCodes)
    {
        $this->LinkedRateCodes = $LinkedRateCodes;
        return $this;
    }

    /**
     * @return ArrayOfRateSpecialValidPeriod
     */
    public function getRateSpecialValidPeriods()
    {
        return $this->RateSpecialValidPeriods;
    }

    /**
     * @param ArrayOfRateSpecialValidPeriod $RateSpecialValidPeriods
     * @return \Gueststream\PMS\IQWare\API\SpecialOffers
     */
    public function setRateSpecialValidPeriods($RateSpecialValidPeriods)
    {
        $this->RateSpecialValidPeriods = $RateSpecialValidPeriods;
        return $this;
    }
}
