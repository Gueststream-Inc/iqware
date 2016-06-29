<?php

namespace Gueststream\PMS\IQWare\API;

class dtHotelsLists
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $CrsWebSvcUrl
     */
    protected $CrsWebSvcUrl = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @param int $GUID
     * @param string $Name
     * @param string $Description
     * @param string $CrsWebSvcUrl
     * @param string $City
     */
    public function __construct($GUID, $Name, $Description, $CrsWebSvcUrl, $City)
    {
        $this->GUID = $GUID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->CrsWebSvcUrl = $CrsWebSvcUrl;
        $this->City = $City;
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
     * @return \Gueststream\PMS\IQWare\API\dtHotelsLists
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Gueststream\PMS\IQWare\API\dtHotelsLists
     */
    public function setName($Name)
    {
        $this->Name = $Name;
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
     * @return \Gueststream\PMS\IQWare\API\dtHotelsLists
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getCrsWebSvcUrl()
    {
        return $this->CrsWebSvcUrl;
    }

    /**
     * @param string $CrsWebSvcUrl
     * @return \Gueststream\PMS\IQWare\API\dtHotelsLists
     */
    public function setCrsWebSvcUrl($CrsWebSvcUrl)
    {
        $this->CrsWebSvcUrl = $CrsWebSvcUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return \Gueststream\PMS\IQWare\API\dtHotelsLists
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }
}
