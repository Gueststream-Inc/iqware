<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_ValidateOwnerReservationResponse
{

    /**
     * @var OwnerReservationValidityResponse $WebRes_ValidateOwnerReservationResult
     */
    protected $WebRes_ValidateOwnerReservationResult = null;

    /**
     * @var OwnerReservationValue $reservationValue
     */
    protected $reservationValue = null;

    /**
     * @param OwnerReservationValidityResponse $WebRes_ValidateOwnerReservationResult
     * @param OwnerReservationValue $reservationValue
     */
    public function __construct($WebRes_ValidateOwnerReservationResult, $reservationValue)
    {
        $this->WebRes_ValidateOwnerReservationResult = $WebRes_ValidateOwnerReservationResult;
        $this->reservationValue = $reservationValue;
    }

    /**
     * @return OwnerReservationValidityResponse
     */
    public function getWebRes_ValidateOwnerReservationResult()
    {
        return $this->WebRes_ValidateOwnerReservationResult;
    }

    /**
     * @param OwnerReservationValidityResponse $WebRes_ValidateOwnerReservationResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationResponse
     */
    public function setWebRes_ValidateOwnerReservationResult($WebRes_ValidateOwnerReservationResult)
    {
        $this->WebRes_ValidateOwnerReservationResult = $WebRes_ValidateOwnerReservationResult;
        return $this;
    }

    /**
     * @return OwnerReservationValue
     */
    public function getReservationValue()
    {
        return $this->reservationValue;
    }

    /**
     * @param OwnerReservationValue $reservationValue
     * @return \Gueststream\PMS\IQWare\API\WebRes_ValidateOwnerReservationResponse
     */
    public function setReservationValue($reservationValue)
    {
        $this->reservationValue = $reservationValue;
        return $this;
    }
}
