<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_IsGroupHasPrivatePricingGrid
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var int $ID_Account
     */
    protected $ID_Account = null;

    /**
     * @param int $guid
     * @param int $ID_Account
     */
    public function __construct($guid, $ID_Account)
    {
        $this->guid = $guid;
        $this->ID_Account = $ID_Account;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\WebRes_IsGroupHasPrivatePricingGrid
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Account()
    {
        return $this->ID_Account;
    }

    /**
     * @param int $ID_Account
     * @return \Gueststream\PMS\IQWare\API\WebRes_IsGroupHasPrivatePricingGrid
     */
    public function setID_Account($ID_Account)
    {
        $this->ID_Account = $ID_Account;
        return $this;
    }
}
