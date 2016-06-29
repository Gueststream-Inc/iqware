<?php

namespace Gueststream\PMS\IQWare\API;

class cCondoOwnerRoom
{

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var ArrayOfOaccAddress $ListAddress
     */
    protected $ListAddress = null;

    /**
     * @var ArrayOfRoomSpecification $ListRoom
     */
    protected $ListRoom = null;

    /**
     * @var ArrayOfSuitesSpecification $ListSuite
     */
    protected $ListSuite = null;

    /**
     * @param int $ID_CondoOwner
     */
    public function __construct($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
    }

    /**
     * @return int
     */
    public function getID_CondoOwner()
    {
        return $this->ID_CondoOwner;
    }

    /**
     * @param int $ID_CondoOwner
     * @return \Gueststream\PMS\IQWare\API\cCondoOwnerRoom
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }

    /**
     * @return ArrayOfOaccAddress
     */
    public function getListAddress()
    {
        return $this->ListAddress;
    }

    /**
     * @param ArrayOfOaccAddress $ListAddress
     * @return \Gueststream\PMS\IQWare\API\cCondoOwnerRoom
     */
    public function setListAddress($ListAddress)
    {
        $this->ListAddress = $ListAddress;
        return $this;
    }

    /**
     * @return ArrayOfRoomSpecification
     */
    public function getListRoom()
    {
        return $this->ListRoom;
    }

    /**
     * @param ArrayOfRoomSpecification $ListRoom
     * @return \Gueststream\PMS\IQWare\API\cCondoOwnerRoom
     */
    public function setListRoom($ListRoom)
    {
        $this->ListRoom = $ListRoom;
        return $this;
    }

    /**
     * @return ArrayOfSuitesSpecification
     */
    public function getListSuite()
    {
        return $this->ListSuite;
    }

    /**
     * @param ArrayOfSuitesSpecification $ListSuite
     * @return \Gueststream\PMS\IQWare\API\cCondoOwnerRoom
     */
    public function setListSuite($ListSuite)
    {
        $this->ListSuite = $ListSuite;
        return $this;
    }
}
