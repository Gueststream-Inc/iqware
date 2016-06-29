<?php

namespace Gueststream\PMS\IQWare\API;

class CreditCardTypes
{

    /**
     * @var int $ID_CreditCard
     */
    protected $ID_CreditCard = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param int $ID_CreditCard
     */
    public function __construct($ID_CreditCard)
    {
        $this->ID_CreditCard = $ID_CreditCard;
    }

    /**
     * @return int
     */
    public function getID_CreditCard()
    {
        return $this->ID_CreditCard;
    }

    /**
     * @param int $ID_CreditCard
     * @return \Gueststream\PMS\IQWare\API\CreditCardTypes
     */
    public function setID_CreditCard($ID_CreditCard)
    {
        $this->ID_CreditCard = $ID_CreditCard;
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
     * @return \Gueststream\PMS\IQWare\API\CreditCardTypes
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }
}
