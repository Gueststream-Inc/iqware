<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRS_GetAvailabilityResult
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
        $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param string $any
     * @return \Gueststream\PMS\IQWare\API\WSCRS_GetAvailabilityResult
     */
    public function setAny($any)
    {
        $this->any = $any;
        return $this;
    }
}
