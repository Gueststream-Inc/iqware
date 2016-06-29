<?php

namespace Gueststream\PMS\IQWare\API;

class GetIQImagesFiles
{

    /**
     * @var int $Guid
     */
    protected $Guid = null;

    /**
     * @var int $ID_Code
     */
    protected $ID_Code = null;

    /**
     * @var ECodeType $CodeType
     */
    protected $CodeType = null;

    /**
     * @param int $Guid
     * @param int $ID_Code
     * @param ECodeType $CodeType
     */
    public function __construct($Guid, $ID_Code, $CodeType)
    {
        $this->Guid = $Guid;
        $this->ID_Code = $ID_Code;
        $this->CodeType = $CodeType;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->Guid;
    }

    /**
     * @param int $Guid
     * @return \Gueststream\PMS\IQWare\API\GetIQImagesFiles
     */
    public function setGuid($Guid)
    {
        $this->Guid = $Guid;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\GetIQImagesFiles
     */
    public function setID_Code($ID_Code)
    {
        $this->ID_Code = $ID_Code;
        return $this;
    }

    /**
     * @return ECodeType
     */
    public function getCodeType()
    {
        return $this->CodeType;
    }

    /**
     * @param ECodeType $CodeType
     * @return \Gueststream\PMS\IQWare\API\GetIQImagesFiles
     */
    public function setCodeType($CodeType)
    {
        $this->CodeType = $CodeType;
        return $this;
    }
}
