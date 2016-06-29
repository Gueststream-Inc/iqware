<?php

namespace Gueststream\PMS\IQWare\API;

class Bedding
{

    /**
     * @var int $ID_Bedding
     */
    protected $ID_Bedding = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $ShortName
     */
    protected $ShortName = null;

    /**
     * @param int $ID_Bedding
     */
    public function __construct($ID_Bedding)
    {
        $this->ID_Bedding = $ID_Bedding;
    }

    /**
     * @return int
     */
    public function getID_Bedding()
    {
        return $this->ID_Bedding;
    }

    /**
     * @param int $ID_Bedding
     * @return \Gueststream\PMS\IQWare\API\Bedding
     */
    public function setID_Bedding($ID_Bedding)
    {
        $this->ID_Bedding = $ID_Bedding;
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
     * @return \Gueststream\PMS\IQWare\API\Bedding
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
     * @return \Gueststream\PMS\IQWare\API\Bedding
     */
    public function setShortName($ShortName)
    {
        $this->ShortName = $ShortName;
        return $this;
    }
}
