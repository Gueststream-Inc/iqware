<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRS_CrsLocal_Initialize
{

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

    /**
     * @var TLanguage $Language
     */
    protected $Language = null;

    /**
     * @param int $PropertyGUID
     * @param TLanguage $Language
     */
    public function __construct($PropertyGUID, $Language)
    {
        $this->PropertyGUID = $PropertyGUID;
        $this->Language = $Language;
    }

    /**
     * @return int
     */
    public function getPropertyGUID()
    {
        return $this->PropertyGUID;
    }

    /**
     * @param int $PropertyGUID
     * @return \Gueststream\PMS\IQWare\API\WSCRS_CrsLocal_Initialize
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\WSCRS_CrsLocal_Initialize
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }
}
