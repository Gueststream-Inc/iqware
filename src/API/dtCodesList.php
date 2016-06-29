<?php

namespace Gueststream\PMS\IQWare\API;

class dtCodesList
{

    /**
     * @var int $ID_Code
     */
    protected $ID_Code = null;

    /**
     * @var string $CodeType
     */
    protected $CodeType = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $ShortName
     */
    protected $ShortName = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param int $ID_Code
     * @param string $CodeType
     * @param string $Name
     * @param string $ShortName
     * @param string $Description
     */
    public function __construct($ID_Code, $CodeType, $Name, $ShortName, $Description)
    {
        $this->ID_Code = $ID_Code;
        $this->CodeType = $CodeType;
        $this->Name = $Name;
        $this->ShortName = $ShortName;
        $this->Description = $Description;
    }

    /**
     * @return int
     */
    public function getID_Code()
    {
        return $this->ID_Code;
    }

    /**
     * @param int $ID_Code
     * @return \Gueststream\PMS\IQWare\API\dtCodesList
     */
    public function setID_Code($ID_Code)
    {
        $this->ID_Code = $ID_Code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodeType()
    {
        return $this->CodeType;
    }

    /**
     * @param string $CodeType
     * @return \Gueststream\PMS\IQWare\API\dtCodesList
     */
    public function setCodeType($CodeType)
    {
        $this->CodeType = $CodeType;
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
     * @return \Gueststream\PMS\IQWare\API\dtCodesList
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
     * @return \Gueststream\PMS\IQWare\API\dtCodesList
     */
    public function setShortName($ShortName)
    {
        $this->ShortName = $ShortName;
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
     * @return \Gueststream\PMS\IQWare\API\dtCodesList
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }
}
