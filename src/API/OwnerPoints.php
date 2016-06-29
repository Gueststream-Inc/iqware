<?php

namespace Gueststream\PMS\IQWare\API;

class OwnerPoints
{

    /**
     * @var int $CondoOwner_Id
     */
    protected $CondoOwner_Id = null;

    /**
     * @param int $CondoOwner_Id
     */
    public function __construct($CondoOwner_Id)
    {
        $this->CondoOwner_Id = $CondoOwner_Id;
    }

    /**
     * @return int
     */
    public function getCondoOwner_Id()
    {
        return $this->CondoOwner_Id;
    }

    /**
     * @param int $CondoOwner_Id
     * @return \Gueststream\PMS\IQWare\API\OwnerPoints
     */
    public function setCondoOwner_Id($CondoOwner_Id)
    {
        $this->CondoOwner_Id = $CondoOwner_Id;
        return $this;
    }
}
