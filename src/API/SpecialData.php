<?php

namespace Gueststream\PMS\IQWare\API;

class SpecialData
{

    /**
     * @var int $ID_RateSpecial
     */
    protected $ID_RateSpecial = null;

    /**
     * @param int $ID_RateSpecial
     */
    public function __construct($ID_RateSpecial)
    {
        $this->ID_RateSpecial = $ID_RateSpecial;
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
     * @return \Gueststream\PMS\IQWare\API\SpecialData
     */
    public function setID_RateSpecial($ID_RateSpecial)
    {
        $this->ID_RateSpecial = $ID_RateSpecial;
        return $this;
    }
}
