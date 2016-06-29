<?php

namespace Gueststream\PMS\IQWare\API;

class CancelReservationAndGetAmountToPayResponse
{

    /**
     * @var CancelResponse $CancelReservationAndGetAmountToPayResult
     */
    protected $CancelReservationAndGetAmountToPayResult = null;

    /**
     * @param CancelResponse $CancelReservationAndGetAmountToPayResult
     */
    public function __construct($CancelReservationAndGetAmountToPayResult)
    {
        $this->CancelReservationAndGetAmountToPayResult = $CancelReservationAndGetAmountToPayResult;
    }

    /**
     * @return CancelResponse
     */
    public function getCancelReservationAndGetAmountToPayResult()
    {
        return $this->CancelReservationAndGetAmountToPayResult;
    }

    /**
     * @param CancelResponse $CancelReservationAndGetAmountToPayResult
     * @return \Gueststream\PMS\IQWare\API\CancelReservationAndGetAmountToPayResponse
     */
    public function setCancelReservationAndGetAmountToPayResult($CancelReservationAndGetAmountToPayResult)
    {
        $this->CancelReservationAndGetAmountToPayResult = $CancelReservationAndGetAmountToPayResult;
        return $this;
    }
}
