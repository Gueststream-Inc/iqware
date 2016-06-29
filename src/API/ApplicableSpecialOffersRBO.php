<?php

namespace Gueststream\PMS\IQWare\API;

class ApplicableSpecialOffersRBO
{

    /**
     * @var int $ID_SpecialOffer
     */
    protected $ID_SpecialOffer = null;

    /**
     * @param int $ID_SpecialOffer
     */
    public function __construct($ID_SpecialOffer)
    {
        $this->ID_SpecialOffer = $ID_SpecialOffer;
    }

    /**
     * @return int
     */
    public function getID_SpecialOffer()
    {
        return $this->ID_SpecialOffer;
    }

    /**
     * @param int $ID_SpecialOffer
     * @return \Gueststream\PMS\IQWare\API\ApplicableSpecialOffersRBO
     */
    public function setID_SpecialOffer($ID_SpecialOffer)
    {
        $this->ID_SpecialOffer = $ID_SpecialOffer;
        return $this;
    }
}
