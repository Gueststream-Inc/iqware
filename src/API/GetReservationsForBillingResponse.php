<?php

namespace Gueststream\PMS\IQWare\API;

class GetReservationsForBillingResponse
{

    /**
     * @var ArrayOfInfosBilling $GetReservationsForBillingResult
     */
    protected $GetReservationsForBillingResult = null;

    /**
     * @param ArrayOfInfosBilling $GetReservationsForBillingResult
     */
    public function __construct($GetReservationsForBillingResult)
    {
        $this->GetReservationsForBillingResult = $GetReservationsForBillingResult;
    }

    /**
     * @return ArrayOfInfosBilling
     */
    public function getGetReservationsForBillingResult()
    {
        return $this->GetReservationsForBillingResult;
    }

    /**
     * @param ArrayOfInfosBilling $GetReservationsForBillingResult
     * @return \Gueststream\PMS\IQWare\API\GetReservationsForBillingResponse
     */
    public function setGetReservationsForBillingResult($GetReservationsForBillingResult)
    {
        $this->GetReservationsForBillingResult = $GetReservationsForBillingResult;
        return $this;
    }
}
