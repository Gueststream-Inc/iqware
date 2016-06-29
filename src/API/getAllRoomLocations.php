<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomLocations
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @param int $guid
     * @param string $language
     */
    public function __construct($guid, $language)
    {
        $this->guid = $guid;
        $this->language = $language;
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
     * @return \Gueststream\PMS\IQWare\API\getAllRoomLocations
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return \Gueststream\PMS\IQWare\API\getAllRoomLocations
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }
}
