<?php

namespace Gueststream\PMS\IQWare\API;

class GetUserDefinedFieldsForUnits
{

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

    /**
     * @var string $UnitIds
     */
    protected $UnitIds = null;

    /**
     * @param int $PropertyGUID
     * @param string $UnitIds
     */
    public function __construct($PropertyGUID, $UnitIds)
    {
        $this->PropertyGUID = $PropertyGUID;
        $this->UnitIds = $UnitIds;
    }

    /**
     * @return int
     */
    public function getPropertyGUID()
    {
        return $this->PropertyGUID;
    }

    /**
     * @param int $PropertyGUID
     * @return \Gueststream\PMS\IQWare\API\GetUserDefinedFieldsForUnits
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitIds()
    {
        return $this->UnitIds;
    }

    /**
     * @param string $UnitIds
     * @return \Gueststream\PMS\IQWare\API\GetUserDefinedFieldsForUnits
     */
    public function setUnitIds($UnitIds)
    {
        $this->UnitIds = $UnitIds;
        return $this;
    }
}
