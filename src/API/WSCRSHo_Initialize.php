<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_Initialize
{

    /**
     * @var TLanguage $Language
     */
    protected $Language = null;

    /**
     * @param TLanguage $Language
     */
    public function __construct($Language)
    {
        $this->Language = $Language;
    }

    /**
     * @return TLanguage
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param TLanguage $Language
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_Initialize
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }
}
