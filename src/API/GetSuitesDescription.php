<?php

namespace Gueststream\PMS\IQWare\API;

class GetSuitesDescription
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var string $ISOLanguage
     */
    protected $ISOLanguage = null;

    /**
     * @param int $GUID
     * @param string $ISOLanguage
     */
    public function __construct($GUID, $ISOLanguage)
    {
        $this->GUID = $GUID;
        $this->ISOLanguage = $ISOLanguage;
    }

    /**
     * @return int
     */
    public function getGUID()
    {
        return $this->GUID;
    }

    /**
     * @param int $GUID
     * @return \Gueststream\PMS\IQWare\API\GetSuitesDescription
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getISOLanguage()
    {
        return $this->ISOLanguage;
    }

    /**
     * @param string $ISOLanguage
     * @return \Gueststream\PMS\IQWare\API\GetSuitesDescription
     */
    public function setISOLanguage($ISOLanguage)
    {
        $this->ISOLanguage = $ISOLanguage;
        return $this;
    }
}
