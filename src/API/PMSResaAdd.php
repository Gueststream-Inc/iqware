<?php

namespace Gueststream\PMS\IQWare\API;

class PMSResaAdd
{

    /**
     * @var cReservation $Resa
     */
    protected $Resa = null;

    /**
     * @param cReservation $Resa
     */
    public function __construct($Resa)
    {
        $this->Resa = $Resa;
    }

    /**
     * @return cReservation
     */
    public function getResa()
    {
        return $this->Resa;
    }

    /**
     * @param cReservation $Resa
     * @return \Gueststream\PMS\IQWare\API\PMSResaAdd
     */
    public function setResa($Resa)
    {
        $this->Resa = $Resa;
        return $this;
    }
}
