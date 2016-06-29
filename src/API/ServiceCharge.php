<?php

namespace Gueststream\PMS\IQWare\API;

class ServiceCharge
{

    /**
     * @var ArrayOfRoomType $RoomTypeList
     */
    protected $RoomTypeList = null;

    /**
     * @var int $ID_SvcCharge
     */
    protected $ID_SvcCharge = null;

    /**
     * @var string $SvcChargeName
     */
    protected $SvcChargeName = null;

    /**
     * @var string $SvcChargeShortName
     */
    protected $SvcChargeShortName = null;

    /**
     * @var boolean $IsPerAdult
     */
    protected $IsPerAdult = null;

    /**
     * @var boolean $IsPerChild
     */
    protected $IsPerChild = null;

    /**
     * @var TSrvcChargeType $Type
     */
    protected $Type = null;

    /**
     * @var int $inventoryLeft
     */
    protected $inventoryLeft = null;

    /**
     * @var boolean $IsDaySpecific
     */
    protected $IsDaySpecific = null;

    /**
     * @param int $ID_SvcCharge
     * @param boolean $IsPerAdult
     * @param boolean $IsPerChild
     * @param TSrvcChargeType $Type
     * @param int $inventoryLeft
     * @param boolean $IsDaySpecific
     */
    public function __construct($ID_SvcCharge, $IsPerAdult, $IsPerChild, $Type, $inventoryLeft, $IsDaySpecific)
    {
        $this->ID_SvcCharge = $ID_SvcCharge;
        $this->IsPerAdult = $IsPerAdult;
        $this->IsPerChild = $IsPerChild;
        $this->Type = $Type;
        $this->inventoryLeft = $inventoryLeft;
        $this->IsDaySpecific = $IsDaySpecific;
    }

    /**
     * @return ArrayOfRoomType
     */
    public function getRoomTypeList()
    {
        return $this->RoomTypeList;
    }

    /**
     * @param ArrayOfRoomType $RoomTypeList
     * @return \Gueststream\PMS\IQWare\API\ServiceCharge
     */
    public function setRoomTypeList($RoomTypeList)
    {
        $this->RoomTypeList = $RoomTypeList;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_SvcCharge()
    {
        return $this->ID_SvcCharge;
    }

    /**
     * @param int $ID_SvcCharge
     * @return \Gueststream\PMS\IQWare\API\ServiceCharge
     */
    public function setID_SvcCharge($ID_SvcCharge)
    {
        $this->ID_SvcCharge = $ID_SvcCharge;
        return $this;
    }

    /**
     * @return string
     */
    public function getSvcChargeName()
    {
        return $this->SvcChargeName;
    }

    /**
     * @param string $SvcChargeName
     * @return \Gueststream\PMS\IQWare\API\ServiceCharge
     */
    public function setSvcChargeName($SvcChargeName)
    {
        $this->SvcChargeName = $SvcChargeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSvcChargeShortName()
    {
        return $this->SvcChargeShortName;
    }

    /**
     * @param string $SvcChargeShortName
     * @return \Gueststream\PMS\IQWare\API\ServiceCharge
     */
    public function setSvcChargeShortName($SvcChargeShortName)
    {
        $this->SvcChargeShortName = $SvcChargeShortName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPerAdult()
    {
        return $this->IsPerAdult;
    }

    /**
     * @param boolean $IsPerAdult
     * @return \Gueststream\PMS\IQWare\API\ServiceCharge
     */
    public function setIsPerAdult($IsPerAdult)
    {
        $this->IsPerAdult = $IsPerAdult;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPerChild()
    {
        return $this->IsPerChild;
    }

    /**
     * @param boolean $IsPerChild
     * @return \Gueststream\PMS\IQWare\API\ServiceCharge
     */
    public function setIsPerChild($IsPerChild)
    {
        $this->IsPerChild = $IsPerChild;
        return $this;
    }

    /**
     * @return TSrvcChargeType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param TSrvcChargeType $Type
     * @return \Gueststream\PMS\IQWare\API\ServiceCharge
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return int
     */
    public function getInventoryLeft()
    {
        return $this->inventoryLeft;
    }

    /**
     * @param int $inventoryLeft
     * @return \Gueststream\PMS\IQWare\API\ServiceCharge
     */
    public function setInventoryLeft($inventoryLeft)
    {
        $this->inventoryLeft = $inventoryLeft;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDaySpecific()
    {
        return $this->IsDaySpecific;
    }

    /**
     * @param boolean $IsDaySpecific
     * @return \Gueststream\PMS\IQWare\API\ServiceCharge
     */
    public function setIsDaySpecific($IsDaySpecific)
    {
        $this->IsDaySpecific = $IsDaySpecific;
        return $this;
    }
}
