<?php

namespace Gueststream\PMS\IQWare\API;

class CancellationReason
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     * @return \Gueststream\PMS\IQWare\API\CancellationReason
     */
    public function setID($ID)
    {
        $this->ID = $ID;
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
     * @return \Gueststream\PMS\IQWare\API\CancellationReason
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }
}
