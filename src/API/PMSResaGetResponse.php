<?php

namespace Gueststream\PMS\IQWare\API;

class PMSResaGetResponse
{

    /**
     * @var cReservation $PMSResaGetResult
     */
    protected $PMSResaGetResult = null;

    /**
     * @param cReservation $PMSResaGetResult
     */
    public function __construct($PMSResaGetResult)
    {
        $this->PMSResaGetResult = $PMSResaGetResult;
    }

    /**
     * @return cReservation
     */
    public function getPMSResaGetResult()
    {
        return $this->PMSResaGetResult;
    }

    /**
     * @param cReservation $PMSResaGetResult
     * @return \Gueststream\PMS\IQWare\API\PMSResaGetResponse
     */
    public function setPMSResaGetResult($PMSResaGetResult)
    {
        $this->PMSResaGetResult = $PMSResaGetResult;
        return $this;
    }
}
