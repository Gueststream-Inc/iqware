<?php

namespace Gueststream\PMS\IQWare\API;

class getHotelInfosAll
{

    /**
     * @var int $IsWebActive
     */
    protected $IsWebActive = null;

    /**
     * @param int $IsWebActive
     */
    public function __construct($IsWebActive)
    {
        $this->IsWebActive = $IsWebActive;
    }

    /**
     * @return int
     */
    public function getIsWebActive()
    {
        return $this->IsWebActive;
    }

    /**
     * @param int $IsWebActive
     * @return \Gueststream\PMS\IQWare\API\getHotelInfosAll
     */
    public function setIsWebActive($IsWebActive)
    {
        $this->IsWebActive = $IsWebActive;
        return $this;
    }
}
