<?php

namespace Gueststream\PMS\IQWare\API;

class PMSResaGetNewResponse
{

    /**
     * @var cReservation $PMSResaGetNewResult
     */
    protected $PMSResaGetNewResult = null;

    /**
     * @param cReservation $PMSResaGetNewResult
     */
    public function __construct($PMSResaGetNewResult)
    {
        $this->PMSResaGetNewResult = $PMSResaGetNewResult;
    }

    /**
     * @return cReservation
     */
    public function getPMSResaGetNewResult()
    {
        return $this->PMSResaGetNewResult;
    }

    /**
     * @param cReservation $PMSResaGetNewResult
     * @return \Gueststream\PMS\IQWare\API\PMSResaGetNewResponse
     */
    public function setPMSResaGetNewResult($PMSResaGetNewResult)
    {
        $this->PMSResaGetNewResult = $PMSResaGetNewResult;
        return $this;
    }
}
