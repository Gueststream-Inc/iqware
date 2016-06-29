<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_UpdateTAAddressResponse
{

    /**
     * @var dsTA $dsTA
     */
    protected $dsTA = null;

    /**
     * @param dsTA $dsTA
     */
    public function __construct($dsTA)
    {
        $this->dsTA = $dsTA;
    }

    /**
     * @return dsTA
     */
    public function getDsTA()
    {
        return $this->dsTA;
    }

    /**
     * @param dsTA $dsTA
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateTAAddressResponse
     */
    public function setDsTA($dsTA)
    {
        $this->dsTA = $dsTA;
        return $this;
    }
}
