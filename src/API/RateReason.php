<?php

namespace Gueststream\PMS\IQWare\API;

class RateReason
{

    /**
     * @var int $ID_RateReason
     */
    protected $ID_RateReason = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $ShortName
     */
    protected $ShortName = null;

    /**
     * @param int $ID_RateReason
     */
    public function __construct($ID_RateReason)
    {
        $this->ID_RateReason = $ID_RateReason;
    }

    /**
     * @return int
     */
    public function getID_RateReason()
    {
        return $this->ID_RateReason;
    }

    /**
     * @param int $ID_RateReason
     * @return \Gueststream\PMS\IQWare\API\RateReason
     */
    public function setID_RateReason($ID_RateReason)
    {
        $this->ID_RateReason = $ID_RateReason;
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
     * @return \Gueststream\PMS\IQWare\API\RateReason
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->ShortName;
    }

    /**
     * @param string $ShortName
     * @return \Gueststream\PMS\IQWare\API\RateReason
     */
    public function setShortName($ShortName)
    {
        $this->ShortName = $ShortName;
        return $this;
    }
}
