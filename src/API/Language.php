<?php

namespace Gueststream\PMS\IQWare\API;

class Language
{

    /**
     * @var string $ISOLanguageCode
     */
    protected $ISOLanguageCode = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getISOLanguageCode()
    {
        return $this->ISOLanguageCode;
    }

    /**
     * @param string $ISOLanguageCode
     * @return \Gueststream\PMS\IQWare\API\Language
     */
    public function setISOLanguageCode($ISOLanguageCode)
    {
        $this->ISOLanguageCode = $ISOLanguageCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Gueststream\PMS\IQWare\API\Language
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }
}
