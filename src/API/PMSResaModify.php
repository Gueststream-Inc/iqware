<?php

namespace Gueststream\PMS\IQWare\API;

class PMSResaModify
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var TLanguage $language
     */
    protected $language = null;

    /**
     * @var cReservation $Resa
     */
    protected $Resa = null;

    /**
     * @param int $guid
     * @param TLanguage $language
     * @param cReservation $Resa
     */
    public function __construct($guid, $language, $Resa)
    {
        $this->guid = $guid;
        $this->language = $language;
        $this->Resa = $Resa;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\PMSResaModify
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return TLanguage
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param TLanguage $language
     * @return \Gueststream\PMS\IQWare\API\PMSResaModify
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\PMSResaModify
     */
    public function setResa($Resa)
    {
        $this->Resa = $Resa;
        return $this;
    }
}
