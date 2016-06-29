<?php

namespace Gueststream\PMS\IQWare\API;

class RateCode
{

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param int $ID_RateCode
     */
    public function __construct($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
    }

    /**
     * @return int
     */
    public function getID_RateCode()
    {
        return $this->ID_RateCode;
    }

    /**
     * @param int $ID_RateCode
     * @return \Gueststream\PMS\IQWare\API\RateCode
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
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
     * @return \Gueststream\PMS\IQWare\API\RateCode
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }
}
