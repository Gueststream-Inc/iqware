<?php

namespace Gueststream\PMS\IQWare\API;

class Nationality
{

    /**
     * @var int $ID_Nationality
     */
    protected $ID_Nationality = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param int $ID_Nationality
     */
    public function __construct($ID_Nationality)
    {
        $this->ID_Nationality = $ID_Nationality;
    }

    /**
     * @return int
     */
    public function getID_Nationality()
    {
        return $this->ID_Nationality;
    }

    /**
     * @param int $ID_Nationality
     * @return \Gueststream\PMS\IQWare\API\Nationality
     */
    public function setID_Nationality($ID_Nationality)
    {
        $this->ID_Nationality = $ID_Nationality;
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
     * @return \Gueststream\PMS\IQWare\API\Nationality
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }
}
