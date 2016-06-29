<?php

namespace Gueststream\PMS\IQWare\API;

class CreditLimit
{

    /**
     * @var int $ID_CreditLimit
     */
    protected $ID_CreditLimit = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param int $ID_CreditLimit
     */
    public function __construct($ID_CreditLimit)
    {
        $this->ID_CreditLimit = $ID_CreditLimit;
    }

    /**
     * @return int
     */
    public function getID_CreditLimit()
    {
        return $this->ID_CreditLimit;
    }

    /**
     * @param int $ID_CreditLimit
     * @return \Gueststream\PMS\IQWare\API\CreditLimit
     */
    public function setID_CreditLimit($ID_CreditLimit)
    {
        $this->ID_CreditLimit = $ID_CreditLimit;
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
     * @return \Gueststream\PMS\IQWare\API\CreditLimit
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }
}
